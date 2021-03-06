<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use ArrayObject;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Executor\Values;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldDefinition;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_map;
use function count;
use function implode;
use function method_exists;
use function sprintf;

class QueryComplexity extends QuerySecurityRule
{
    /** @var int */
    private int $maxQueryComplexity;

    /** @var array|null */
    private ?array $rawVariableValues = [];

    /** @var ArrayObject */
    private ArrayObject $variableDefs;

    /** @var ArrayObject */
    private ArrayObject $fieldNodeAndDefs;

    /** @var ValidationContext */
    private ValidationContext $context;

    /** @var int */
    private int $complexity;

    public function __construct($maxQueryComplexity)
    {
        $this->setMaxQueryComplexity($maxQueryComplexity);
    }

    public function getVisitor(ValidationContext $context): array
    {
        $this->context = $context;

        $this->variableDefs = new ArrayObject();
        $this->fieldNodeAndDefs = new ArrayObject();
        $this->complexity = 0;

        return $this->invokeIfNeeded(
            $context,
            [
                NodeKind::SELECTION_SET => function (SelectionSetNode $selectionSet) use ($context): void {
                    $this->fieldNodeAndDefs = $this->collectFieldASTsAndDefs(
                        $context,
                        $context->getParentType(),
                        $selectionSet,
                        null,
                        $this->fieldNodeAndDefs
                    );
                },
                NodeKind::VARIABLE_DEFINITION => function ($def): VisitorOperation {
                    $this->variableDefs[] = $def;

                    return Visitor::skipNode();
                },
                NodeKind::OPERATION_DEFINITION => [
                    'leave' => function (OperationDefinitionNode $operationDefinition) use ($context, &$complexity): void {
                        $errors = $context->getErrors();

                        if (count($errors) > 0) {
                            return;
                        }

                        $this->complexity = $this->fieldComplexity($operationDefinition, $complexity);

                        if ($this->getQueryComplexity() <= $this->getMaxQueryComplexity()) {
                            return;
                        }

                        $context->reportError(
                            new Error(self::maxQueryComplexityErrorMessage(
                                $this->getMaxQueryComplexity(),
                                $this->getQueryComplexity()
                            ))
                        );
                    },
                ],
            ]
        );
    }

    private function fieldComplexity($node, $complexity = 0)
    {
        if (isset($node->selectionSet) && $node->selectionSet instanceof SelectionSetNode) {
            foreach ($node->selectionSet->selections as $childNode) {
                $complexity = $this->nodeComplexity($childNode, $complexity);
            }
        }

        return $complexity;
    }

    /**
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function nodeComplexity(Node $node, $complexity = 0)
    {
        switch (true) {
            case $node instanceof FieldNode:
                // default values
                $args = [];
                $complexityFn = FieldDefinition::DEFAULT_COMPLEXITY_FN;

                // calculate children complexity if needed
                $childrenComplexity = 0;

                // node has children?
                if (isset($node->selectionSet)) {
                    $childrenComplexity = $this->fieldComplexity($node);
                }

                $astFieldInfo = $this->astFieldInfo($node);
                $fieldDef = $astFieldInfo[1];

                if ($fieldDef instanceof FieldDefinition) {
                    if ($this->directiveExcludesField($node)) {
                        break;
                    }

                    $args = $this->buildFieldArguments($node);
                    //get complexity fn using fieldDef complexity
                    if (method_exists($fieldDef, 'getComplexityFn')) {
                        $complexityFn = $fieldDef->getComplexityFn();
                    }
                }

                $complexity += $complexityFn($childrenComplexity, $args);
                break;

            case $node instanceof InlineFragmentNode:
                // node has children?
                if (isset($node->selectionSet)) {
                    $complexity = $this->fieldComplexity($node, $complexity);
                }
                break;

            case $node instanceof FragmentSpreadNode:
                $fragment = $this->getFragment($node);

                if ($fragment !== null) {
                    $complexity = $this->fieldComplexity($fragment, $complexity);
                }
                break;
        }

        return $complexity;
    }

    private function astFieldInfo(FieldNode $field)
    {
        $fieldName = $this->getFieldName($field);
        $astFieldInfo = [null, null];
        if (isset($this->fieldNodeAndDefs[$fieldName])) {
            foreach ($this->fieldNodeAndDefs[$fieldName] as $astAndDef) {
                if ($astAndDef[0] === $field) {
                    $astFieldInfo = $astAndDef;
                    break;
                }
            }
        }

        return $astFieldInfo;
    }

    /**
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function directiveExcludesField(FieldNode $node): mixed
    {
        foreach ($node->directives as $directiveNode) {
            if ($directiveNode->name->value === 'deprecated') {
                return false;
            }
            [$errors, $variableValues] = Values::getVariableValues(
                $this->context->getSchema(),
                $this->variableDefs,
                $this->getRawVariableValues()
            );
            if (count($errors ?? []) > 0) {
                throw new Error(implode(
                    "\n\n",
                    array_map(
                        static function ($error) {
                            return $error->getMessage();
                        },
                        $errors
                    )
                ));
            }
            if ($directiveNode->name->value === 'include') {
                $directive = Directive::includeDirective();
                /** @var bool $directiveArgsIf */
                $directiveArgsIf = Values::getArgumentValues($directive, $directiveNode, $variableValues)['if'];

                return !$directiveArgsIf;
            }
            if ($directiveNode->name->value === Directive::SKIP_NAME) {
                $directive = Directive::skipDirective();
                /** @var bool $directiveArgsIf */
                return Values::getArgumentValues($directive, $directiveNode, $variableValues)['if'];
            }
        }

        return false;
    }

    public function getRawVariableValues(): ?array
    {
        return $this->rawVariableValues;
    }

    /**
     * @param array|null $rawVariableValues
     */
    public function setRawVariableValues(?array $rawVariableValues = null)
    {
        $this->rawVariableValues = $rawVariableValues ?? [];
    }

    /**
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    private function buildFieldArguments(FieldNode $node): array
    {
        $rawVariableValues = $this->getRawVariableValues();
        $astFieldInfo = $this->astFieldInfo($node);
        $fieldDef = $astFieldInfo[1];

        $args = [];

        if ($fieldDef instanceof FieldDefinition) {
            [$errors, $variableValues] = Values::getVariableValues(
                $this->context->getSchema(),
                $this->variableDefs,
                $rawVariableValues
            );

            if (count($errors ?? []) > 0) {
                throw new Error(implode(
                    "\n\n",
                    array_map(
                        static function ($error) {
                            return $error->getMessage();
                        },
                        $errors
                    )
                ));
            }

            $args = Values::getArgumentValues($fieldDef, $node, $variableValues);
        }

        return $args;
    }

    public function getQueryComplexity(): int
    {
        return $this->complexity;
    }

    public function getMaxQueryComplexity(): int
    {
        return $this->maxQueryComplexity;
    }

    /**
     * Set max query complexity. If equal to 0 no check is done. Must be greater or equal to 0.
     */
    public function setMaxQueryComplexity($maxQueryComplexity)
    {
        $this->checkIfGreaterOrEqualToZero('maxQueryComplexity', $maxQueryComplexity);

        $this->maxQueryComplexity = (int)$maxQueryComplexity;
    }

    public static function maxQueryComplexityErrorMessage($max, $count): string
    {
        return sprintf('Max query complexity should be %d but got %d.', $max, $count);
    }

    #[Pure] protected function isEnabled(): bool
    {
        return $this->getMaxQueryComplexity() !== self::DISABLED;
    }
}
