<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor;

use stdClass;
use Throwable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\ArgumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldNode;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentSpreadNode;
use yxorP\app\lib\data\graphQL\Language\AST\InlineFragmentNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\NullValueNode;
use yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\VariableDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\VariableNode;
use yxorP\app\lib\data\graphQL\Language\Printer;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\InputType;
use yxorP\app\lib\data\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\AST;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Utils\Value;
use function array_key_exists;
use function array_map;
use function count;
use function sprintf;

class Values
{
    /**
     * Prepares an object map of variables of the correct type based on the provided
     * variable definitions and arbitrary input. If the input cannot be coerced
     * to match the variable definitions, a Error will be thrown.
     *
     * @param \yxorP\app\lib\data\graphQL\Type\Schema $schema
     * @param VariableDefinitionNode[] $varDefNodes
     * @param array $inputs
     *
     * @return array
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    public static function getVariableValues(Schema $schema, array $varDefNodes, array $inputs): array
    {
        $errors = [];
        $coercedValues = [];
        foreach ($varDefNodes as $varDefNode) {
            $varName = $varDefNode->variable->name->value;
            /** @var InputType|Type $varType */
            $varType = TypeInfo::typeFromAST($schema, $varDefNode->type);

            if (!Type::isInputType($varType)) {
                // Must use input types for variables. This should be caught during
                // validation, however is checked again here for safety.
                $errors[] = new Error(
                    sprintf(
                        'Variable "$%s" expected value of type "%s" which cannot be used as an input type.',
                        $varName,
                        Printer::doPrint($varDefNode->type)
                    ),
                    [$varDefNode->type]
                );
            } else {
                $hasValue = array_key_exists($varName, $inputs);
                $value = $hasValue ? $inputs[$varName] : Utils::undefined();

                if (!$hasValue && ($varDefNode->defaultValue !== null)) {
                    // If no value was provided to a variable with a default value,
                    // use the default value.
                    $coercedValues[$varName] = AST::valueFromAST($varDefNode->defaultValue, $varType);
                } elseif ((!$hasValue || $value === null) && ($varType instanceof NonNull)) {
                    // If no value or a nullish value was provided to a variable with a
                    // non-null type (required), produce an error.
                    $errors[] = new Error(
                        sprintf(
                            $hasValue
                                ? 'Variable "$%s" of non-null type "%s" must not be null.'
                                : 'Variable "$%s" of required type "%s" was not provided.',
                            $varName,
                            Utils::printSafe($varType)
                        ),
                        [$varDefNode]
                    );
                } elseif ($hasValue) {
                    if ($value === null) {
                        // If the explicit value `null` was provided, an entry in the coerced
                        // values must exist as the value `null`.
                        $coercedValues[$varName] = null;
                    } else {
                        // Otherwise, a non-null value was provided, coerce it to the expected
                        // type or report an error if coercion fails.
                        $coerced = Value::coerceValue($value, $varType, $varDefNode);
                        /** @var Error[] $coercionErrors */
                        $coercionErrors = $coerced['errors'];
                        if (count($coercionErrors ?? []) > 0) {
                            $messagePrelude = sprintf(
                                'Variable "$%s" got invalid value %s; ',
                                $varName,
                                Utils::printSafeJson($value)
                            );

                            foreach ($coercionErrors as $error) {
                                $errors[] = new Error(
                                    $messagePrelude . $error->getMessage(),
                                    $error->getNodes(),
                                    $error->getSource(),
                                    $error->getPositions(),
                                    $error->getPath(),
                                    $error->getPrevious(),
                                    $error->getExtensions()
                                );
                            }
                        } else {
                            $coercedValues[$varName] = $coerced['value'];
                        }
                    }
                }
            }
        }

        if (count($errors) > 0) {
            return [$errors, null];
        }

        return [null, $coercedValues];
    }

    /**
     * Prepares an object map of argument values given a directive definition
     * and a AST node which may contain directives. Optionally also accepts a map
     * of variable values.
     *
     * If the directive does not exist on the node, returns undefined.
     *
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\Directive $directiveDef
     * @param EnumValueDefinitionNode|FieldDefinitionNode|FieldNode|FragmentSpreadNode|InlineFragmentNode $node
     * @param null $variableValues
     *
     * @return array|null
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    public static function getDirectiveValues(Directive $directiveDef, EnumValueDefinitionNode|InlineFragmentNode|FieldNode|FieldDefinitionNode|FragmentSpreadNode $node, $variableValues = null): ?array
    {
        if (isset($node->directives) && $node->directives instanceof NodeList) {
            $directiveNode = Utils::find(
                (array)$node->directives,
                static function (DirectiveNode $directive) use ($directiveDef): bool {
                    return $directive->name->value === $directiveDef->name;
                }
            );

            if ($directiveNode !== null) {
                return self::getArgumentValues($directiveDef, $directiveNode, $variableValues);
            }
        }

        return null;
    }

    /**
     * Prepares an object map of argument values given a list of argument
     * definitions and list of argument AST nodes.
     *
     * @param Directive|FieldDefinition $def
     * @param DirectiveNode|FieldNode $node
     * @param array|null $variableValues
     *
     * @return array
     *
     * @throws Error
     */
    public static function getArgumentValues(Directive|FieldDefinition $def, FieldNode|DirectiveNode $node, array $variableValues = null): array
    {
        if (count($def->args) === 0) {
            return [];
        }

        $argumentNodes = $node->arguments;
        $argumentValueMap = [];
        foreach ($argumentNodes as $argumentNode) {
            $argumentValueMap[$argumentNode->name->value] = $argumentNode->value;
        }

        return static::getArgumentValuesForMap($def, $argumentValueMap, $variableValues, $node);
    }

    /**
     * @param Directive|FieldDefinition $fieldDefinition
     * @param ArgumentNode[] $argumentValueMap
     * @param array|null $variableValues
     * @param Node|null $referenceNode
     *
     * @return array
     *
     * @throws Error
     * @throws \Exception
     */
    public static function getArgumentValuesForMap(Directive|FieldDefinition $fieldDefinition, array $argumentValueMap, array $variableValues = null, Node $referenceNode = null): array
    {
        $argumentDefinitions = $fieldDefinition->args;
        $coercedValues = [];

        foreach ($argumentDefinitions as $argumentDefinition) {
            $name = $argumentDefinition->name;
            $argType = $argumentDefinition->getType();
            $argumentValueNode = $argumentValueMap[$name] ?? null;

            if ($argumentValueNode instanceof VariableNode) {
                $variableName = $argumentValueNode->name->value;
                $hasValue = array_key_exists($variableName, $variableValues ?? []);
                $isNull = $hasValue && $variableValues[$variableName] === null;
            } else {
                $hasValue = $argumentValueNode !== null;
                $isNull = $argumentValueNode instanceof NullValueNode;
            }

            if (!$hasValue && $argumentDefinition->defaultValueExists()) {
                // If no argument was provided where the definition has a default value,
                // use the default value.
                $coercedValues[$name] = $argumentDefinition->defaultValue;
            } elseif ((!$hasValue || $isNull) && ($argType instanceof NonNull)) {
                // If no argument or a null value was provided to an argument with a
                // non-null type (required), produce a field error.
                if ($isNull) {
                    throw new Error(
                        'Argument "' . $name . '" of non-null type ' .
                        '"' . Utils::printSafe($argType) . '" must not be null.',
                        $referenceNode
                    );
                }

                if ($argumentValueNode instanceof VariableNode) {
                    $variableName = $argumentValueNode->name->value;
                    throw new Error(
                        'Argument "' . $name . '" of required type "' . Utils::printSafe($argType) . '" was ' .
                        'provided the variable "$' . $variableName . '" which was not provided ' .
                        'a runtime value.',
                        [$argumentValueNode]
                    );
                }

                throw new Error(
                    'Argument "' . $name . '" of required type ' .
                    '"' . Utils::printSafe($argType) . '" was not provided.',
                    $referenceNode
                );
            } elseif ($hasValue) {
                if ($argumentValueNode instanceof NullValueNode) {
                    // If the explicit value `null` was provided, an entry in the coerced
                    // values must exist as the value `null`.
                    $coercedValues[$name] = null;
                } elseif ($argumentValueNode instanceof VariableNode) {
                    $variableName = $argumentValueNode->name->value;
                    Utils::invariant($variableValues !== null, 'Must exist for hasValue to be true.');
                    // Note: This does no further checking that this variable is correct.
                    // This assumes that this query has been validated and the variable
                    // usage here is of the correct type.
                    $coercedValues[$name] = $variableValues[$variableName] ?? null;
                } else {
                    $valueNode = $argumentValueNode;
                    $coercedValue = AST::valueFromAST($valueNode, $argType, $variableValues);
                    if (Utils::isInvalid($coercedValue)) {
                        // Note: ValuesOfCorrectType validation should catch this before
                        // execution. This is a runtime check to ensure execution does not
                        // continue with an invalid argument value.
                        throw new Error(
                            'Argument "' . $name . '" has invalid value ' . Printer::doPrint($valueNode) . '.',
                            [$argumentValueNode]
                        );
                    }
                    $coercedValues[$name] = $coercedValue;
                }
            }
        }

        return $coercedValues;
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Language\AST\ValueNodeInterface $valueNode
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\InputType $type
     * @param array|null $variables
     *
     * @return array|stdClass|null
     *
     * @throws \Exception
     * @codeCoverageIgnore
     * @deprecated as of 8.0 (Moved to \GraphQL\Utils\AST::valueFromAST)
     */
    public static function valueFromAST(ValueNodeInterface $valueNode, InputType $type, ?array $variables = null): array|stdClass|null
    {
        return AST::valueFromAST($valueNode, $type, $variables);
    }

    /**
     * @param array $value
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\InputType $type
     *
     * @return string[]
     *
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     * @codeCoverageIgnore
     * @deprecated as of 0.12 (Use coerceValue() directly for richer information)
     */
    public static function isValidPHPValue(array $value, InputType $type): array
    {
        $errors = Value::coerceValue($value, $type)['errors'];

        return $errors
            ? array_map(
                static function (Throwable $error): string {
                    return $error->getMessage();
                },
                $errors
            )
            : [];
    }
}
