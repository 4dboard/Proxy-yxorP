<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Utils;

use ArrayAccess;
use Exception;
use stdClass;
use Throwable;
use Traversable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\Location;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\NonNullTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectFieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\VariableNode;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\IDType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputType;
use yxorP\app\lib\data\graphQL\Type\Definition\ListOfType;
use yxorP\app\lib\data\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\data\graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Schema;
use function array_combine;
use function array_key_exists;
use function array_map;
use function count;
use function is_array;
use function is_bool;
use function is_float;
use function is_int;
use function is_object;
use function is_string;
use function iterator_to_array;
use function property_exists;

/**
 * Various utilities dealing with AST
 */
class AST
{
    /**
     * Convert representation of AST as an associative array to instance of GraphQL\Language\AST\Node.
     *
     * For example:
     *
     * ```php
     * AST::fromArray([
     *     'kind' => 'ListValue',
     *     'values' => [
     *         ['kind' => 'StringValue', 'value' => 'my str'],
     *         ['kind' => 'StringValue', 'value' => 'my other str']
     *     ],
     *     'loc' => ['start' => 21, 'end' => 25]
     * ]);
     * ```
     *
     * Will produce instance of `ListValueNode` where `values` prop is a lazily-evaluated `NodeList`
     * returning instances of `StringValueNode` on access.
     *
     * This is a reverse operation for AST::toArray($node)
     *
     * @param array $node
     *
     * @return Node
     * @api
     */
    public static function fromArray(array $node): Node
    {
        if (!isset($node['kind']) || !isset(NodeKind::$classMap[$node['kind']])) {
            throw new InvariantViolation('Unexpected node structure: ' . Utils::printSafeJson($node));
        }

        $kind = $node['kind'] ?? null;
        $class = NodeKind::$classMap[$kind];
        $instance = new $class([]);

        if (isset($node['loc'], $node['loc']['start'], $node['loc']['end'])) {
            $instance->loc = Location::create($node['loc']['start'], $node['loc']['end']);
        }

        foreach ($node as $key => $value) {
            if ($key === 'loc' || $key === 'kind') {
                continue;
            }
            if (is_array($value)) {
                if (isset($value[0]) || count($value) === 0) {
                    $value = new NodeList($value);
                } else {
                    $value = self::fromArray($value);
                }
            }
            $instance->{$key} = $value;
        }

        return $instance;
    }

    /**
     * Convert AST node to serializable array
     *
     * @param Node $node
     * @return array
     *
     * @api
     */
    public static function toArray(Node $node): array
    {
        return $node->toArray(true);
    }

    /**
     * Produces a GraphQL Value AST given a PHP value.
     *
     * Optionally, a GraphQL type may be provided, which will be used to
     * disambiguate between value primitives.
     *
     * | PHP Value     | GraphQL Value        |
     * | ------------- | -------------------- |
     * | Object        | Input Object         |
     * | Assoc Array   | Input Object         |
     * | Array         | List                 |
     * | Boolean       | Boolean              |
     * | String        | String / Enum Value  |
     * | Int           | Int                  |
     * | Float         | Int / Float          |
     * | Mixed         | Enum Value           |
     * | null          | NullValue            |
     *
     * @param Type|mixed|null $value
     * @param InputType $type
     * @return ObjectValueNode|ListValueNode|BooleanValueNode|IntValueNode|FloatValueNode|EnumValueNode|StringValueNode|NullValueNode|null
     *
     * @throws Throwable
     * @throws Error
     * @api
     */
    public static function astFromValue(mixed $value, InputType $type): NullValueNode|ListValueNode|StringValueNode|IntValueNode|FloatValueNode|BooleanValueNode|EnumValueNode|ObjectValueNode|null
    {
        if ($type instanceof NonNull) {
            $astValue = self::astFromValue($value, $type->getWrappedType());
            if ($astValue instanceof NullValueNode) {
                return null;
            }

            return $astValue;
        }

        if ($value === null) {
            return new NullValueNode([]);
        }

        // Convert PHP array to GraphQL list. If the GraphQLType is a list, but
        // the value is not an array, convert the value using the list's item type.
        if ($type instanceof ListOfType) {
            $itemType = $type->getWrappedType();
            if (is_array($value) || ($value instanceof Traversable)) {
                $valuesNodes = [];
                foreach ($value as $item) {
                    $itemNode = self::astFromValue($item, $itemType);
                    if (!$itemNode) {
                        continue;
                    }

                    $valuesNodes[] = $itemNode;
                }

                return new ListValueNode(['values' => new NodeList($valuesNodes)]);
            }

            return self::astFromValue($value, $itemType);
        }

        // Populate the fields of the input object by creating ASTs from each value
        // in the PHP object according to the fields in the input type.
        if ($type instanceof InputObjectType) {
            $isArray = is_array($value);
            $isArrayLike = $isArray || $value instanceof ArrayAccess;
            if ((!$isArrayLike && !is_object($value))) {
                return null;
            }
            $fields = $type->getFields();
            $fieldNodes = [];
            foreach ($fields as $fieldName => $field) {
                if ($isArrayLike) {
                    $fieldValue = $value[$fieldName] ?? null;
                } else {
                    $fieldValue = $value->{$fieldName} ?? null;
                }

                // Have to check additionally if key exists, since we differentiate between
                // "no key" and "value is null":
                if ($fieldValue !== null) {
                    $fieldExists = true;
                } elseif ($isArray) {
                    $fieldExists = array_key_exists($fieldName, $value);
                } elseif ($isArrayLike) {
                    $fieldExists = $value->offsetExists($fieldName);
                } else {
                    $fieldExists = property_exists($value, $fieldName);
                }

                if (!$fieldExists) {
                    continue;
                }

                $fieldNode = self::astFromValue($fieldValue, $field->getType());

                if (!$fieldNode) {
                    continue;
                }

                $fieldNodes[] = new ObjectFieldNode([
                    'name' => new NameNode(['value' => $fieldName]),
                    'value' => $fieldNode,
                ]);
            }

            return new ObjectValueNode(['fields' => new NodeList($fieldNodes)]);
        }

        if ($type instanceof ScalarType || $type instanceof EnumType) {
            // Since value is an internally represented value, it must be serialized
            // to an externally represented value before converting into an AST.
            try {
                $serialized = $type->serialize($value);
            } catch (Throwable $error) {
                if ($error instanceof Error && $type instanceof EnumType) {
                    return null;
                }
                throw $error;
            }

            // Others serialize based on their corresponding PHP scalar types.
            if (is_bool($serialized)) {
                return new BooleanValueNode(['value' => $serialized]);
            }
            if (is_int($serialized)) {
                return new IntValueNode(['value' => (string)$serialized]);
            }
            if (is_float($serialized)) {
                // int cast with == used for performance reasons
                // phpcs:ignore
                if ((int)$serialized == $serialized) {
                    return new IntValueNode(['value' => (string)$serialized]);
                }

                return new FloatValueNode(['value' => (string)$serialized]);
            }
            if (is_string($serialized)) {
                // Enum types use Enum literals.
                if ($type instanceof EnumType) {
                    return new EnumValueNode(['value' => $serialized]);
                }

                // ID types can use Int literals.
                $asInt = (int)$serialized;
                if ($type instanceof IDType && (string)$asInt === $serialized) {
                    return new IntValueNode(['value' => $serialized]);
                }

                // Use json_encode, which uses the same string encoding as GraphQL,
                // then remove the quotes.
                return new StringValueNode(['value' => $serialized]);
            }

            throw new InvariantViolation('Cannot convert value to AST: ' . Utils::printSafe($serialized));
        }

        throw new Error('Unknown type: ' . Utils::printSafe($type) . '.');
    }

    /**
     * Produces a PHP value given a GraphQL Value AST.
     *
     * A GraphQL type must be provided, which will be used to interpret different
     * GraphQL Value literals.
     *
     * Returns `null` when the value could not be validly coerced according to
     * the provided type.
     *
     * | GraphQL Value        | PHP Value     |
     * | -------------------- | ------------- |
     * | Input Object         | Assoc Array   |
     * | List                 | Array         |
     * | Boolean              | Boolean       |
     * | String               | String        |
     * | Int / Float          | Int / Float   |
     * | Enum Value           | Mixed         |
     * | Null Value           | null          |
     *
     * @param ValueNodeInterface|null $valueNode
     * @param Type $type
     * @param array|null $variables
     *
     * @return array|stdClass|null
     *
     * @throws Error
     * @api
     */
    public static function valueFromAST(?ValueNodeInterface $valueNode, Type $type, ?array $variables = null): array|stdClass|null
    {
        $undefined = Utils::undefined();

        if ($valueNode === null) {
            // When there is no AST, then there is also no value.
            // Importantly, this is different from returning the GraphQL null value.
            return $undefined;
        }

        if ($type instanceof NonNull) {
            if ($valueNode instanceof NullValueNode) {
                // Invalid: intentionally return no value.
                return $undefined;
            }

            return self::valueFromAST($valueNode, $type->getWrappedType(), $variables);
        }

        if ($valueNode instanceof NullValueNode) {
            // This is explicitly returning the value null.
            return null;
        }

        if ($valueNode instanceof VariableNode) {
            $variableName = $valueNode->name->value;

            if (!$variables || !array_key_exists($variableName, $variables)) {
                // No valid return value.
                return $undefined;
            }

            $variableValue = $variables[$variableName] ?? null;

            // Note: This does no further checking that this variable is correct.
            // This assumes that this query has been validated and the variable
            // usage here is of the correct type.
            return $variables[$variableName];
        }

        if ($type instanceof ListOfType) {
            $itemType = $type->getWrappedType();

            if ($valueNode instanceof ListValueNode) {
                $coercedValues = [];
                $itemNodes = $valueNode->values;
                foreach ($itemNodes as $itemNode) {
                    if (self::isMissingVariable($itemNode, $variables)) {
                        // If an array contains a missing variable, it is either coerced to
                        // null or if the item type is non-null, it considered invalid.
                        if ($itemType instanceof NonNull) {
                            // Invalid: intentionally return no value.
                            return $undefined;
                        }
                        $coercedValues[] = null;
                    } else {
                        $itemValue = self::valueFromAST($itemNode, $itemType, $variables);
                        if ($undefined === $itemValue) {
                            // Invalid: intentionally return no value.
                            return $undefined;
                        }
                        $coercedValues[] = $itemValue;
                    }
                }

                return $coercedValues;
            }
            $coercedValue = self::valueFromAST($valueNode, $itemType, $variables);
            if ($undefined === $coercedValue) {
                // Invalid: intentionally return no value.
                return $undefined;
            }

            return [$coercedValue];
        }

        if ($type instanceof InputObjectType) {
            if (!$valueNode instanceof ObjectValueNode) {
                // Invalid: intentionally return no value.
                return $undefined;
            }

            $coercedObj = [];
            $fields = $type->getFields();
            $fieldNodes = Utils::keyMap(
                $valueNode->fields,
                static function ($field) {
                    return $field->name->value;
                }
            );
            foreach ($fields as $field) {
                $fieldName = $field->name;
                /** @var VariableNode|NullValueNode|IntValueNode|FloatValueNode|StringValueNode|BooleanValueNode|EnumValueNode|ListValueNode|ObjectValueNode $fieldNode */
                $fieldNode = $fieldNodes[$fieldName] ?? null;

                if ($fieldNode === null || self::isMissingVariable($fieldNode->value, $variables)) {
                    if ($field->defaultValueExists()) {
                        $coercedObj[$fieldName] = $field->defaultValue;
                    } elseif ($field->getType() instanceof NonNull) {
                        // Invalid: intentionally return no value.
                        return $undefined;
                    }
                    continue;
                }

                $fieldValue = self::valueFromAST(
                    $fieldNode?->value,
                    $field->getType(),
                    $variables
                );

                if ($undefined === $fieldValue) {
                    // Invalid: intentionally return no value.
                    return $undefined;
                }
                $coercedObj[$fieldName] = $fieldValue;
            }

            return $coercedObj;
        }

        if ($type instanceof EnumType) {
            if (!$valueNode instanceof EnumValueNode) {
                return $undefined;
            }
            $enumValue = $type->getValue($valueNode->value);
            if (!$enumValue) {
                return $undefined;
            }

            return $enumValue->value;
        }

        if ($type instanceof ScalarType) {
            // Scalars fulfill parsing a literal value via parseLiteral().
            // Invalid values represent a failure to parse correctly, in which case
            // no value is returned.
            try {
                return $type->parseLiteral($valueNode, $variables);
            } catch (Throwable $error) {
                return $undefined;
            }
        }

        throw new Error('Unknown type: ' . Utils::printSafe($type) . '.');
    }

    /**
     * Returns true if the provided valueNode is a variable which is not defined
     * in the set of variables.
     *
     * @param ValueNodeInterface $valueNode
     * @param array $variables
     *
     * @return bool
     */
    private static function isMissingVariable(ValueNodeInterface $valueNode, array $variables): bool
    {
        return $valueNode instanceof VariableNode &&
            (count($variables) === 0 || !array_key_exists($valueNode->name->value, $variables));
    }

    /**
     * Produces a PHP value given a GraphQL Value AST.
     *
     * Unlike `valueFromAST()`, no type is provided. The resulting PHP value
     * will reflect the provided GraphQL value AST.
     *
     * | GraphQL Value        | PHP Value     |
     * | -------------------- | ------------- |
     * | Input Object         | Assoc Array   |
     * | List                 | Array         |
     * | Boolean              | Boolean       |
     * | String               | String        |
     * | Int / Float          | Int / Float   |
     * | Enum                 | Mixed         |
     * | Null                 | null          |
     *
     * @param Node $valueNode
     * @param array|null $variables
     *
     * @return mixed
     *
     * @throws Exception
     *
     * @api
     */
    public static function valueFromASTUntyped(Node $valueNode, ?array $variables = null): mixed
    {
        switch (true) {
            case $valueNode instanceof NullValueNode:
                return null;
            case $valueNode instanceof IntValueNode:
                return (int)$valueNode->value;
            case $valueNode instanceof FloatValueNode:
                return (float)$valueNode->value;
            case $valueNode instanceof StringValueNode:
            case $valueNode instanceof EnumValueNode:
            case $valueNode instanceof BooleanValueNode:
                return $valueNode->value;
            case $valueNode instanceof ListValueNode:
                return array_map(
                    static function ($node) use ($variables) {
                        return self::valueFromASTUntyped($node, $variables);
                    },
                    iterator_to_array($valueNode->values)
                );
            case $valueNode instanceof ObjectValueNode:
                return array_combine(
                    array_map(
                        static function ($field): string {
                            return $field->name->value;
                        },
                        iterator_to_array($valueNode->fields)
                    ),
                    array_map(
                        static function ($field) use ($variables) {
                            return self::valueFromASTUntyped($field->value, $variables);
                        },
                        iterator_to_array($valueNode->fields)
                    )
                );
            case $valueNode instanceof VariableNode:
                $variableName = $valueNode->name->value;

                return $variables && isset($variables[$variableName])
                    ? $variables[$variableName]
                    : null;
        }

        throw new Error('Unexpected value kind: ' . $valueNode->kind . '.');
    }

    /**
     * Returns type definition for given AST Type node
     *
     * @param Schema $schema
     * @param ListTypeNode|NamedTypeNode|NonNullTypeNode $inputTypeNode
     *
     * @return ListOfType|NonNull|Type|null
     *
     * @throws Error
     * @api
     */
    public static function typeFromAST(Schema $schema, NonNullTypeNode|ListTypeNode|NamedTypeNode $inputTypeNode): ListOfType|NonNull|Type|null
    {
        if ($inputTypeNode instanceof ListTypeNode) {
            $innerType = self::typeFromAST($schema, $inputTypeNode->type);

            return $innerType ? new ListOfType($innerType) : null;
        }
        if ($inputTypeNode instanceof NonNullTypeNode) {
            $innerType = self::typeFromAST($schema, $inputTypeNode->type);

            return $innerType ? new NonNull($innerType) : null;
        }
        if ($inputTypeNode instanceof NamedTypeNode) {
            return $schema->getType($inputTypeNode->name->value);
        }

        throw new Error('Unexpected type kind: ' . $inputTypeNode->kind . '.');
    }

    /**
     * @param DocumentNode $document
     * @param string|null $operationName
     *
     * @return bool|string
     *
     * @deprecated use getOperationAST instead.
     *
     * Returns operation type ("query", "mutation" or "subscription") given a document and operation name
     *
     * @api
     */
    public static function getOperation(DocumentNode $document, string $operationName = null): bool|string
    {
        foreach ($document->definitions as $def) {
            if (!($def instanceof OperationDefinitionNode)) {
                continue;
            }

            if (!$operationName || (isset($def->name->value) && $def->name->value === $operationName)) {
                return $def->operation;
            }
        }

        return false;
    }

    /**
     * Returns the operation within a document by name.
     *
     * If a name is not provided, an operation is only returned if the document has exactly one.
     *
     * @throws Exception
     * @api
     */
    public static function getOperationAST(DocumentNode $document, ?string $operationName = null): ?OperationDefinitionNode
    {
        $operation = null;
        foreach ($document->definitions->getIterator() as $node) {
            if (!$node instanceof OperationDefinitionNode) {
                continue;
            }

            if ($operationName === null) {
                // We found a second operation, so we bail instead of returning an ambiguous result.
                if ($operation !== null) {
                    return null;
                }
                $operation = $node;
            } elseif ($node->name->value === $operationName) {
                return $node;
            }
        }

        return $operation;
    }
}
