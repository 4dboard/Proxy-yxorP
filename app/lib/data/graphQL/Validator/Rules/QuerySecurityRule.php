<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use ArrayObject;
use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\SelectionSetNode;
use yxorP\app\lib\data\graphQL\Type\Definition\HasFieldsType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Introspection;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function class_alias;
use function sprintf;

abstract class QuerySecurityRule extends ValidationRule
{
    public const DISABLED = 0;

    /** @var FragmentDefinitionNode[] */
    private array $fragments = [];

    /**
     * check if equal to 0 no check is done. Must be greater or equal to 0.
     *
     * @param string $name
     * @param int $value
     */
    protected function checkIfGreaterOrEqualToZero(string $name, int $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException(sprintf('$%s argument must be greater or equal to 0.', $name));
        }
    }

    #[Pure] protected function getFragment(FragmentSpreadNode $fragmentSpread): ?FragmentDefinitionNode
    {
        $spreadName = $fragmentSpread->name->value;
        $fragments = $this->getFragments();

        return $fragments[$spreadName] ?? null;
    }

    /**
     * @return FragmentDefinitionNode[]
     */
    protected function getFragments(): array
    {
        return $this->fragments;
    }

    /**
     * @param callable[] $validators
     *
     * @return callable[]
     */
    protected function invokeIfNeeded(ValidationContext $context, array $validators): array
    {
        // is disabled?
        if (!$this->isEnabled()) {
            return [];
        }

        $this->gatherFragmentDefinition($context);

        return $validators;
    }

    abstract protected function isEnabled();

    protected function gatherFragmentDefinition(ValidationContext $context)
    {
        // Gather all the fragment definition.
        // Importantly this does not include inline fragments.
        $definitions = $context->getDocument()->definitions;
        foreach ($definitions as $node) {
            if (!($node instanceof FragmentDefinitionNode)) {
                continue;
            }

            $this->fragments[$node->name->value] = $node;
        }
    }

    /**
     * Given a selectionSet, adds all of the fields in that selection to
     * the passed in map of fields, and returns it at the end.
     *
     * Note: This is not the same as execution's collectFields because at static
     * time we do not know what object type will be used, so we unconditionally
     * spread in all fragments.
     *
     * @param Type|null $parentType
     *
     * @return ArrayObject
     * @see \GraphQL\Validator\Rules\OverlappingFieldsCanBeMerged
     *
     */
    protected function collectFieldASTsAndDefs(
        ValidationContext $context,
        ?Type             $parentType,
        SelectionSetNode  $selectionSet,
        ?ArrayObject      $visitedFragmentNames = null,
        ?ArrayObject      $astAndDefs = null
    ): ArrayObject|array
    {
        $_visitedFragmentNames = $visitedFragmentNames ?? new ArrayObject();
        $_astAndDefs = $astAndDefs ?? new ArrayObject();

        foreach ($selectionSet->selections as $selection) {
            switch (true) {
                case $selection instanceof FieldNode:
                    $fieldName = $selection->name->value;
                    $fieldDef = null;
                    if ($parentType instanceof HasFieldsType || $parentType instanceof InputObjectType) {
                        $schemaMetaFieldDef = Introspection::schemaMetaFieldDef();
                        $typeMetaFieldDef = Introspection::typeMetaFieldDef();
                        $typeNameMetaFieldDef = Introspection::typeNameMetaFieldDef();

                        if ($fieldName === $schemaMetaFieldDef->name && $context->getSchema()->getQueryType() === $parentType) {
                            $fieldDef = $schemaMetaFieldDef;
                        } elseif ($fieldName === $typeMetaFieldDef->name && $context->getSchema()->getQueryType() === $parentType) {
                            $fieldDef = $typeMetaFieldDef;
                        } elseif ($fieldName === $typeNameMetaFieldDef->name) {
                            $fieldDef = $typeNameMetaFieldDef;
                        } elseif ($parentType->hasField($fieldName)) {
                            $fieldDef = $parentType->getField($fieldName);
                        }
                    }
                    $responseName = $this->getFieldName($selection);
                    if (!isset($_astAndDefs[$responseName])) {
                        $_astAndDefs[$responseName] = new ArrayObject();
                    }
                    // create field context
                    $_astAndDefs[$responseName][] = [$selection, $fieldDef];
                    break;
                case $selection instanceof InlineFragmentNode:
                    $_astAndDefs = $this->collectFieldASTsAndDefs(
                        $context,
                        TypeInfo::typeFromAST($context->getSchema(), $selection->typeCondition),
                        $selection->selectionSet,
                        $_visitedFragmentNames,
                        $_astAndDefs
                    );
                    break;
                case $selection instanceof FragmentSpreadNode:
                    $fragName = $selection->name->value;

                    if (!($_visitedFragmentNames[$fragName] ?? false)) {
                        $_visitedFragmentNames[$fragName] = true;
                        $fragment = $context->getFragment($fragName);

                        if ($fragment) {
                            $_astAndDefs = $this->collectFieldASTsAndDefs(
                                $context,
                                TypeInfo::typeFromAST($context->getSchema(), $fragment->typeCondition),
                                $fragment->selectionSet,
                                $_visitedFragmentNames,
                                $_astAndDefs
                            );
                        }
                    }
                    break;
            }
        }

        return $_astAndDefs;
    }

    protected function getFieldName(FieldNode $node): string
    {
        $fieldName = $node->name->value;

        return $node->alias ? $node->alias->value : $fieldName;
    }
}

class_alias(QuerySecurityRule::class, 'GraphQL\Validator\Rules\AbstractQuerySecurity');
