<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\TypeComparators;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function sprintf;

class VariablesInAllowedPosition extends ValidationRule
{
    /**
     * A map from variable names to their definition nodes.
     *
     * @var VariableDefinitionNode[]
     */
    public array $varDefMap;

    #[ArrayShape([NodeKind::OPERATION_DEFINITION => "\Closure[]", NodeKind::VARIABLE_DEFINITION => "\Closure"])] public function getVisitor(ValidationContext $context): array
    {
        return [
            NodeKind::OPERATION_DEFINITION => [
                'enter' => function (): void {
                    $this->varDefMap = [];
                },
                'leave' => function (OperationDefinitionNode $operation) use ($context): void {
                    $usages = $context->getRecursiveVariableUsages($operation);

                    foreach ($usages as $usage) {
                        $node = $usage['node'];
                        $type = $usage['type'];
                        $defaultValue = $usage['defaultValue'];
                        $varName = $node->name->value;
                        $varDef = $this->varDefMap[$varName] ?? null;

                        if ($varDef === null || $type === null) {
                            continue;
                        }

                        // A var type is allowed if it is the same or more strict (e.g. is
                        // a subtype of) than the expected type. It can be more strict if
                        // the variable type is non-null when the expected type is nullable.
                        // If both are list types, the variable item type can be more strict
                        // than the expected item type (contravariant).
                        $schema = $context->getSchema();
                        $varType = TypeInfo::typeFromAST($schema, $varDef->type);

                        if (!$varType || $this->allowedVariableUsage($schema, $varType, $varDef->defaultValue, $type, $defaultValue)) {
                            continue;
                        }

                        $context->reportError(new Error(
                            self::badVarPosMessage($varName, $varType, $type),
                            [$varDef, $node]
                        ));
                    }
                },
            ],
            NodeKind::VARIABLE_DEFINITION => function (VariableDefinitionNode $varDefNode): void {
                $this->varDefMap[$varDefNode->variable->name->value] = $varDefNode;
            },
        ];
    }

    /**
     * Returns true if the variable is allowed in the location it was found,
     * which includes considering if default values exist for either the variable
     * or the location at which it is located.
     *
     * @param Schema $schema
     * @param Type $varType
     * @param ValueNodeInterface|null $varDefaultValue
     * @param Type $locationType
     * @param mixed $locationDefaultValue
     * @return bool
     */
    private function allowedVariableUsage(Schema $schema, Type $varType, ?ValueNodeInterface $varDefaultValue, Type $locationType, mixed $locationDefaultValue): bool
    {
        if ($locationType instanceof NonNull && !$varType instanceof NonNull) {
            $hasNonNullVariableDefaultValue = $varDefaultValue && !$varDefaultValue instanceof NullValueNode;
            $hasLocationDefaultValue = !Utils::isInvalid($locationDefaultValue);
            if (!$hasNonNullVariableDefaultValue && !$hasLocationDefaultValue) {
                return false;
            }
            $nullableLocationType = $locationType->getWrappedType();

            return TypeComparators::isTypeSubTypeOf($schema, $varType, $nullableLocationType);
        }

        return TypeComparators::isTypeSubTypeOf($schema, $varType, $locationType);
    }

    /**
     * A var type is allowed if it is the same or more strict than the expected
     * type. It can be more strict if the variable type is non-null when the
     * expected type is nullable. If both are list types, the variable item type can
     * be more strict than the expected item type.
     */
    public static function badVarPosMessage($varName, $varType, $expectedType): string
    {
        return sprintf(
            'Variable "$%s" of type "%s" used in position expecting type "%s".',
            $varName,
            $varType,
            $expectedType
        );
    }
}
