<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Validator\Rules;

use Throwable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\BooleanValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FloatValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\IntValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\NodeKind;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectFieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\StringValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Language\Printer;
use yxorP\app\lib\data\graphQL\Language\Visitor;
use yxorP\app\lib\data\graphQL\Language\VisitorOperation;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumValueDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\ListOfType;
use yxorP\app\lib\data\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\data\graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\ValidationContext;
use function array_combine;
use function array_keys;
use function array_map;
use function array_values;
use function iterator_to_array;
use function sprintf;

/**
 * Value literals of correct type
 *
 * A GraphQL document is only valid if all value literals are of the type
 * expected at their position.
 */
class ValuesOfCorrectType extends ValidationRule
{
    public static function badArgumentValueMessage($typeName, $valueName, $fieldName, $argName, $message = null): string
    {
        return sprintf('Field "%s" argument "%s" requires type %s, found %s', $fieldName, $argName, $typeName, $valueName) .
            ($message ? sprintf('; %s', $message) : '.');
    }

    public static function badValueMessage($typeName, $valueName, $message = null): string
    {
        return sprintf('Expected type %s, found %s', $typeName, $valueName) .
            ($message ? "; ${message}" : '.');
    }

    public static function requiredFieldMessage($typeName, $fieldName, $fieldTypeName): string
    {
        return sprintf('Field %s.%s of required type %s was not provided.', $typeName, $fieldName, $fieldTypeName);
    }

    public static function unknownFieldMessage($typeName, $fieldName, $message = null): string
    {
        return sprintf('Field "%s" is not defined by type %s', $fieldName, $typeName) .
            ($message ? sprintf('; %s', $message) : '.');
    }

    private static function getBadValueMessage($typeName, $valueName, $message = null, $context = null, $fieldName = null): string
    {
        if ($context) {
            $arg = $context->getArgument();
            if ($arg) {
                return self::badArgumentValueMessage($typeName, $valueName, $fieldName, $arg->name, $message);
            }
        }

        return self::badValueMessage($typeName, $valueName, $message);
    }

    public function getVisitor(ValidationContext $context): array
    {
        $fieldName = '';

        return [
            NodeKind::FIELD => [
                'enter' => static function (FieldNode $node) use (&$fieldName): void {
                    $fieldName = $node->name->value;
                },
            ],
            NodeKind::NULL => static function (NullValueNode $node) use ($context, &$fieldName): void {
                $type = $context->getInputType();
                if (!($type instanceof NonNull)) {
                    return;
                }

                $context->reportError(
                    new Error(
                        self::getBadValueMessage((string)$type, Printer::doPrint($node), null, $context, $fieldName),
                        $node
                    )
                );
            },
            NodeKind::LST => function (ListValueNode $node) use ($context, &$fieldName): ?VisitorOperation {
                // Note: TypeInfo will traverse into a list's item type, so look to the
                // parent input type to check if it is a list.
                $type = Type::getNullableType($context->getParentInputType());
                if (!$type instanceof ListOfType) {
                    $this->isValidScalar($context, $node, $fieldName);

                    return Visitor::skipNode();
                }

                return null;
            },
            NodeKind::OBJECT => function (ObjectValueNode $node) use ($context, &$fieldName): ?VisitorOperation {
                // Note: TypeInfo will traverse into a list's item type, so look to the
                // parent input type to check if it is a list.
                $type = Type::getNamedType($context->getInputType());
                if (!$type instanceof InputObjectType) {
                    $this->isValidScalar($context, $node, $fieldName);

                    return Visitor::skipNode();
                }
                unset($fieldName);
                // Ensure every required field exists.
                $inputFields = $type->getFields();
                $nodeFields = iterator_to_array($node->fields);
                $fieldNodeMap = array_combine(
                    array_map(
                        static function ($field): string {
                            return $field->name->value;
                        },
                        $nodeFields
                    ),
                    array_values($nodeFields)
                );
                foreach ($inputFields as $fieldName => $fieldDef) {
                    $fieldType = $fieldDef->getType();
                    if (isset($fieldNodeMap[$fieldName]) || !$fieldDef->isRequired()) {
                        continue;
                    }

                    $context->reportError(
                        new Error(
                            self::requiredFieldMessage($type->name, $fieldName, (string)$fieldType),
                            $node
                        )
                    );
                }

                return null;
            },
            NodeKind::OBJECT_FIELD => static function (ObjectFieldNode $node) use ($context): void {
                $parentType = Type::getNamedType($context->getParentInputType());
                /** @var ScalarType|EnumType|InputObjectType|ListOfType|NonNull $fieldType */
                $fieldType = $context->getInputType();
                if ($fieldType || !($parentType instanceof InputObjectType)) {
                    return;
                }

                $suggestions = Utils::suggestionList(
                    $node->name->value,
                    array_keys($parentType->getFields())
                );
                $didYouMean = $suggestions
                    ? 'Did you mean ' . Utils::orList($suggestions) . '?'
                    : null;

                $context->reportError(
                    new Error(
                        self::unknownFieldMessage($parentType->name, $node->name->value, $didYouMean),
                        $node
                    )
                );
            },
            NodeKind::ENUM => function (EnumValueNode $node) use ($context, &$fieldName): void {
                $type = Type::getNamedType($context->getInputType());
                if (!$type instanceof EnumType) {
                    $this->isValidScalar($context, $node, $fieldName);
                } elseif (!$type->getValue($node->value)) {
                    $context->reportError(
                        new Error(
                            self::getBadValueMessage(
                                $type->name,
                                Printer::doPrint($node),
                                $this->enumTypeSuggestion($type, $node),
                                $context,
                                $fieldName
                            ),
                            $node
                        )
                    );
                }
            },
            NodeKind::INT => function (IntValueNode $node) use ($context, &$fieldName): void {
                $this->isValidScalar($context, $node, $fieldName);
            },
            NodeKind::FLOAT => function (FloatValueNode $node) use ($context, &$fieldName): void {
                $this->isValidScalar($context, $node, $fieldName);
            },
            NodeKind::STRING => function (StringValueNode $node) use ($context, &$fieldName): void {
                $this->isValidScalar($context, $node, $fieldName);
            },
            NodeKind::BOOLEAN => function (BooleanValueNode $node) use ($context, &$fieldName): void {
                $this->isValidScalar($context, $node, $fieldName);
            },
        ];
    }

    /**
     * @param ValidationContext $context
     * @param ValueNodeInterface $node
     * @param $fieldName
     */
    private function isValidScalar(ValidationContext $context, ValueNodeInterface $node, $fieldName)
    {
        // Report any error at the full type expected by the location.
        /** @var ScalarType|EnumType|InputObjectType|ListOfType|NonNull $locationType */
        $locationType = $context->getInputType();

        if (!$locationType) {
            return;
        }

        $type = Type::getNamedType($locationType);

        if (!$type instanceof ScalarType) {
            try {
                $context->reportError(
                    new Error(
                        self::getBadValueMessage(
                            (string)$locationType,
                            Printer::doPrint($node),
                            $this->enumTypeSuggestion($type, $node),
                            $context,
                            $fieldName
                        ),
                        $node
                    )
                );
            } catch (\Exception $e) {
            }

            return;
        }

        // Scalars determine if a literal value is valid via parseLiteral() which
        // may throw to indicate failure.
        try {
            $type->parseLiteral($node);
        } catch (Throwable $error) {
            // Ensure a reference to the original error is maintained.
            try {
                $context->reportError(
                    new Error(
                        self::getBadValueMessage(
                            (string)$locationType,
                            Printer::doPrint($node),
                            $error->getMessage(),
                            $context,
                            $fieldName
                        ),
                        $node,
                        null,
                        [],
                        null,
                        $error
                    )
                );
            } catch (\Exception $e) {
            }
        }
    }

    /**
     * @param $type
     * @param ValueNodeInterface $node
     * @return string|void|null
     */
    private function enumTypeSuggestion($type, ValueNodeInterface $node)
    {
        if ($type instanceof EnumType) {
            try {
                $suggestions = Utils::suggestionList(
                    Printer::doPrint($node),
                    array_map(
                        static function (EnumValueDefinition $value): string {
                            return $value->name;
                        },
                        $type->getValues()
                    )
                );
            } catch (\Exception $e) {
            }

            return $suggestions ? 'Did you mean the enum value ' . Utils::orList($suggestions) . '?' : null;
        }
    }
}
