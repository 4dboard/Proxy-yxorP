<?php

declare(strict_types=1);

namespace yxorP\app\lib\graphQL\Validator\Rules;

use yxorP\app\lib\graphQL\Error\Error;
use yxorP\app\lib\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\graphQL\Type\Definition\Type;
use yxorP\app\lib\graphQL\Type\Schema;
use yxorP\app\lib\graphQL\Utils\Utils;
use yxorP\app\lib\graphQL\Validator\ValidationContext;
use function array_keys;
use function array_merge;
use function arsort;
use function count;
use function sprintf;

class FieldsOnCorrectType extends ValidationRule
{
    /**
     * @param string $fieldName
     * @param string $type
     * @param string[] $suggestedTypeNames
     * @param string[] $suggestedFieldNames
     *
     * @return string
     */
    public static function undefinedFieldMessage(
        $fieldName,
        $type,
        array $suggestedTypeNames,
        array $suggestedFieldNames
    )
    {
        $message = sprintf('Cannot query field "%s" on type "%s".', $fieldName, $type);

        if ($suggestedTypeNames) {
            $suggestions = Utils::quotedOrList($suggestedTypeNames);

            $message .= sprintf(' Did you mean to use an inline fragment on %s?', $suggestions);
        } elseif (count($suggestedFieldNames) > 0) {
            $suggestions = Utils::quotedOrList($suggestedFieldNames);

            $message .= sprintf(' Did you mean %s?', $suggestions);
        }

        return $message;
    }

    public function getVisitor(ValidationContext $context)
    {
        return [
            NodeKind::FIELD => function (FieldNode $node) use ($context): void {
                $type = $context->getParentType();
                if (!$type) {
                    return;
                }

                $fieldDef = $context->getFieldDef();
                if ($fieldDef) {
                    return;
                }

                // This isn't valid. Let's find suggestions, if any.
                $schema = $context->getSchema();
                $fieldName = $node->name->value;
                // First determine if there are any suggested types to condition on.
                $suggestedTypeNames = $this->getSuggestedTypeNames(
                    $schema,
                    $type,
                    $fieldName
                );
                // If there are no suggested types, then perhaps this was a typo?
                $suggestedFieldNames = $suggestedTypeNames
                    ? []
                    : $this->getSuggestedFieldNames(
                        $schema,
                        $type,
                        $fieldName
                    );

                // Report an error, including helpful suggestions.
                $context->reportError(new Error(
                    static::undefinedFieldMessage(
                        $node->name->value,
                        $type->name,
                        $suggestedTypeNames,
                        $suggestedFieldNames
                    ),
                    [$node]
                ));
            },
        ];
    }

    /**
     * Go through all of the implementations of type, as well as the interfaces
     * that they implement. If any of those types include the provided field,
     * suggest them, sorted by how often the type is referenced, starting
     * with Interfaces.
     *
     * @param ObjectType|InterfaceType $type
     * @param string $fieldName
     *
     * @return string[]
     */
    private function getSuggestedTypeNames(Schema $schema, $type, $fieldName)
    {
        if (Type::isAbstractType($type)) {
            $suggestedObjectTypes = [];
            $interfaceUsageCount = [];

            foreach ($schema->getPossibleTypes($type) as $possibleType) {
                if (!$possibleType->hasField($fieldName)) {
                    continue;
                }
                // This object type defines this field.
                $suggestedObjectTypes[] = $possibleType->name;
                foreach ($possibleType->getInterfaces() as $possibleInterface) {
                    if (!$possibleInterface->hasField($fieldName)) {
                        continue;
                    }
                    // This interface type defines this field.
                    $interfaceUsageCount[$possibleInterface->name] =
                        !isset($interfaceUsageCount[$possibleInterface->name])
                            ? 0
                            : $interfaceUsageCount[$possibleInterface->name] + 1;
                }
            }

            // Suggest interface types based on how common they are.
            arsort($interfaceUsageCount);
            $suggestedInterfaceTypes = array_keys($interfaceUsageCount);

            // Suggest both interface and object types.
            return array_merge($suggestedInterfaceTypes, $suggestedObjectTypes);
        }

        // Otherwise, must be an Object type, which does not have possible fields.
        return [];
    }

    /**
     * For the field name provided, determine if there are any similar field names
     * that may be the result of a typo.
     *
     * @param ObjectType|InterfaceType $type
     * @param string $fieldName
     *
     * @return array|string[]
     */
    private function getSuggestedFieldNames(Schema $schema, $type, $fieldName)
    {
        if ($type instanceof ObjectType || $type instanceof InterfaceType) {
            $possibleFieldNames = $type->getFieldNames();

            return Utils::suggestionList($fieldName, $possibleFieldNames);
        }

        // Otherwise, must be a Union type, which does not define fields.
        return [];
    }
}
