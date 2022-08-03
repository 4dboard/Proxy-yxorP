<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Utils;

use JetBrains\PhpStorm\ArrayShape;
use Throwable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Executor\Values;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ListTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\NameNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\NonNullTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ScalarTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\TypeDefinitionNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\TypeNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\Token;
use yxorP\app\lib\data\graphQL\Type\Definition\CustomScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldArgument;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use function array_reverse;
use function implode;
use function is_array;
use function is_string;
use function sprintf;

class ASTDefinitionBuilder
{
    /** @var array<string, Node&TypeDefinitionNodeInterface> */
    private $typeDefinitionsMap;

    /** @var callable */
    private $typeConfigDecorator;

    /** @var array<string, bool> */
    private $options;

    /** @var callable */
    private $resolveType;

    /** @var array<string, Type> */
    private $cache;

    /**
     * code sniffer doesn't understand this syntax. Pr with a fix here: waiting on https://github.com/squizlabs/PHP_CodeSniffer/pull/2919
     * phpcs:disable Squiz.Commenting.FunctionComment.SpacingAfterParamType
     * @param array<string, Node&TypeDefinitionNodeInterface> $typeDefinitionsMap
     * @param array<string, bool> $options
     */
    public function __construct(
        array     $typeDefinitionsMap,
        array     $options,
        callable  $resolveType,
        ?callable $typeConfigDecorator = null
    )
    {
        $this->typeDefinitionsMap = $typeDefinitionsMap;
        $this->typeConfigDecorator = $typeConfigDecorator;
        $this->options = $options;
        $this->resolveType = $resolveType;

        $this->cache = Type::getAllBuiltInTypes();
    }

    /**
     * @throws \Exception
     */
    public function buildDirective(DirectiveDefinitionNode $directiveNode): Directive
    {
        return new Directive([
            'name' => $directiveNode->name->value,
            'description' => $this->getDescription($directiveNode),
            'args' => FieldArgument::createMap($this->makeInputValues($directiveNode->arguments)),
            'isRepeatable' => $directiveNode->repeatable,
            'locations' => Utils::map(
                $directiveNode->locations,
                static function (NameNode $node): string {
                    return $node->value;
                }
            ),
            'astNode' => $directiveNode,
        ]);
    }

    /**
     * Given an ast node, returns its string description.
     */
    private function getDescription(Node $node): ?string
    {
        if (isset($node->description)) {
            return $node->description->value;
        }

        if (isset($this->options['commentDescriptions'])) {
            $rawValue = $this->getLeadingCommentBlock($node);
            if ($rawValue !== null) {
                return BlockString::value("\n" . $rawValue);
            }
        }

        return null;
    }

    private function getLeadingCommentBlock(Node $node): ?string
    {
        $loc = $node->loc;
        if ($loc === null || $loc->startToken === null) {
            return null;
        }

        $comments = [];
        $token = $loc->startToken->prev;
        while ($token !== null
            && $token->kind === Token::COMMENT
            && $token->next !== null
            && $token->prev !== null
            && $token->line + 1 === $token->next->line
            && $token->line !== $token->prev->line
        ) {
            $value = $token->value;
            $comments[] = $value;
            $token = $token->prev;
        }

        return implode("\n", array_reverse($comments));
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function makeInputValues(NodeList $values): array
    {
        return Utils::keyValMap(
            $values,
            static function (InputValueDefinitionNode $value): string {
                return $value->name->value;
            },
            function (InputValueDefinitionNode $value): array {
                // Note: While this could make assertions to get the correctly typed
                // value, that would throw immediately while type system validation
                // with validateSchema() will produce more actionable results.
                $type = $this->buildWrappedType($value->type);

                $config = [
                    'name' => $value->name->value,
                    'type' => $type,
                    'description' => $this->getDescription($value),
                    'astNode' => $value,
                ];
                if (isset($value->defaultValue)) {
                    $config['defaultValue'] = AST::valueFromAST($value->defaultValue, $type);
                }

                return $config;
            }
        );
    }

    private function buildWrappedType(TypeNodeInterface $typeNode): Type
    {
        if ($typeNode instanceof ListTypeNode) {
            return Type::listOf($this->buildWrappedType($typeNode->type));
        }

        if ($typeNode instanceof NonNullTypeNode) {
            return Type::nonNull($this->buildWrappedType($typeNode->type));
        }

        return $this->buildType($typeNode);
    }

    /**
     * @param string|(Node &NamedTypeNode)|(Node&TypeDefinitionNode) $ref
     */
    public function buildType($ref): Type
    {
        if (is_string($ref)) {
            return $this->internalBuildType($ref);
        }

        return $this->internalBuildType($ref->name->value, $ref);
    }

    /**
     * @param (Node &NamedTypeNode)|(Node&TypeDefinitionNode)|null $typeNode
     *
     * @throws Error
     */
    private function internalBuildType(string $typeName, ?Node $typeNode = null): Type
    {
        if (!isset($this->cache[$typeName])) {
            if (isset($this->typeDefinitionsMap[$typeName])) {
                $type = $this->makeSchemaDef($this->typeDefinitionsMap[$typeName]);
                if ($this->typeConfigDecorator) {
                    $fn = $this->typeConfigDecorator;
                    try {
                        $config = $fn($type->config, $this->typeDefinitionsMap[$typeName], $this->typeDefinitionsMap);
                    } catch (Throwable $e) {
                        throw new Error(
                            sprintf('Type config decorator passed to %s threw an error ', static::class) .
                            sprintf('when building %s type: %s', $typeName, $e->getMessage()),
                            null,
                            null,
                            [],
                            null,
                            $e
                        );
                    }
                    if (!is_array($config) || isset($config[0])) {
                        throw new Error(
                            sprintf(
                                'Type config decorator passed to %s is expected to return an array, but got %s',
                                static::class,
                                Utils::getVariableType($config)
                            )
                        );
                    }
                    $type = $this->makeSchemaDefFromConfig($this->typeDefinitionsMap[$typeName], $config);
                }
                $this->cache[$typeName] = $type;
            } else {
                $fn = $this->resolveType;
                $this->cache[$typeName] = $fn($typeName, $typeNode);
            }
        }

        return $this->cache[$typeName];
    }

    /**
     * @param ObjectTypeDefinitionNode|InterfaceTypeDefinitionNode|EnumTypeDefinitionNode|ScalarTypeDefinitionNode|InputObjectTypeDefinitionNode|UnionTypeDefinitionNode $def
     *
     * @return CustomScalarType|EnumType|InputObjectType|InterfaceType|ObjectType|UnionType
     *
     * @throws Error
     */
    private function makeSchemaDef(Node $def): Type
    {
        return match (true) {
            $def instanceof ObjectTypeDefinitionNode => $this->makeTypeDef($def),
            $def instanceof InterfaceTypeDefinitionNode => $this->makeInterfaceDef($def),
            $def instanceof EnumTypeDefinitionNode => $this->makeEnumDef($def),
            $def instanceof UnionTypeDefinitionNode => $this->makeUnionDef($def),
            $def instanceof ScalarTypeDefinitionNode => $this->makeScalarDef($def),
            $def instanceof InputObjectTypeDefinitionNode => $this->makeInputObjectDef($def),
            default => throw new Error(sprintf('Type kind of %s not supported.', $def->kind)),
        };
    }

    private function makeTypeDef(ObjectTypeDefinitionNode $def): ObjectType
    {
        return new ObjectType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            'fields' => function () use ($def): array {
                return $this->makeFieldDefMap($def);
            },
            'interfaces' => function () use ($def): array {
                return $this->makeImplementedInterfaces($def);
            },
            'astNode' => $def,
        ]);
    }

    /**
     * @param ObjectTypeDefinitionNode|InterfaceTypeDefinitionNode $def
     *
     * @return array<string, array<string, mixed>>
     */
    private function makeFieldDefMap(Node $def): array
    {
        return Utils::keyValMap(
            $def->fields,
            static function (FieldDefinitionNode $field): string {
                return $field->name->value;
            },
            function (FieldDefinitionNode $field): array {
                return $this->buildField($field);
            }
        );
    }

    /**
     * @return array<string, mixed>
     */
    #[ArrayShape(['type' => "\yxorP\app\lib\data\graphQL\Type\Definition\Type", 'description' => "null|string", 'args' => "mixed", 'deprecationReason' => "null|string", 'astNode' => "\yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode"])] public function buildField(FieldDefinitionNode $field): array
    {
        return [
            // Note: While this could make assertions to get the correctly typed
            // value, that would throw immediately while type system validation
            // with validateSchema() will produce more actionable results.
            'type' => $this->buildWrappedType($field->type),
            'description' => $this->getDescription($field),
            'args' => $this->makeInputValues($field->arguments),
            'deprecationReason' => $this->getDeprecationReason($field),
            'astNode' => $field,
        ];
    }

    /**
     * Given a collection of directives, returns the string value for the
     * deprecation reason.
     *
     * @param EnumValueDefinitionNode|FieldDefinitionNode $node
     */
    private function getDeprecationReason(Node $node): ?string
    {
        $deprecated = Values::getDirectiveValues(
            Directive::deprecatedDirective(),
            $node
        );

        return $deprecated['reason'] ?? null;
    }

    /**
     * @param ObjectTypeDefinitionNode|InterfaceTypeDefinitionNode $def
     *
     * @return array<int, Type>
     */
    private function makeImplementedInterfaces($def): array
    {
        // Note: While this could make early assertions to get the correctly
        // typed values, that would throw immediately while type system
        // validation with validateSchema() will produce more actionable results.
        return Utils::map(
            $def->interfaces,
            function (NamedTypeNode $iface): Type {
                return $this->buildType($iface);
            }
        );
    }

    private function makeInterfaceDef(InterfaceTypeDefinitionNode $def): InterfaceType
    {
        return new InterfaceType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            'fields' => function () use ($def): array {
                return $this->makeFieldDefMap($def);
            },
            'interfaces' => function () use ($def): array {
                return $this->makeImplementedInterfaces($def);
            },
            'astNode' => $def,
        ]);
    }

    private function makeEnumDef(EnumTypeDefinitionNode $def): EnumType
    {
        return new EnumType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            'values' => Utils::keyValMap(
                $def->values,
                static function ($enumValue) {
                    return $enumValue->name->value;
                },
                function ($enumValue): array {
                    return [
                        'description' => $this->getDescription($enumValue),
                        'deprecationReason' => $this->getDeprecationReason($enumValue),
                        'astNode' => $enumValue,
                    ];
                }
            ),
            'astNode' => $def,
        ]);
    }

    private function makeUnionDef(UnionTypeDefinitionNode $def): UnionType
    {
        return new UnionType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            // Note: While this could make assertions to get the correctly typed
            // values below, that would throw immediately while type system
            // validation with validateSchema() will produce more actionable results.
            'types' => function () use ($def): array {
                return Utils::map(
                    $def->types,
                    function ($typeNode): Type {
                        return $this->buildType($typeNode);
                    }
                );
            },
            'astNode' => $def,
        ]);
    }

    private function makeScalarDef(ScalarTypeDefinitionNode $def): CustomScalarType
    {
        return new CustomScalarType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            'astNode' => $def,
            'serialize' => static function ($value) {
                return $value;
            },
        ]);
    }

    private function makeInputObjectDef(InputObjectTypeDefinitionNode $def): InputObjectType
    {
        return new InputObjectType([
            'name' => $def->name->value,
            'description' => $this->getDescription($def),
            'fields' => function () use ($def): array {
                return $this->makeInputValues($def->fields);
            },
            'astNode' => $def,
        ]);
    }

    /**
     * @param array<string, mixed> $config
     *
     * @return CustomScalarType|EnumType|InputObjectType|InterfaceType|ObjectType|UnionType
     *
     * @throws Error
     */
    private function makeSchemaDefFromConfig(Node $def, array $config): Type
    {
        return match (true) {
            $def instanceof ObjectTypeDefinitionNode => new ObjectType($config),
            $def instanceof InterfaceTypeDefinitionNode => new InterfaceType($config),
            $def instanceof EnumTypeDefinitionNode => new EnumType($config),
            $def instanceof UnionTypeDefinitionNode => new UnionType($config),
            $def instanceof ScalarTypeDefinitionNode => new CustomScalarType($config),
            $def instanceof InputObjectTypeDefinitionNode => new InputObjectType($config),
            default => throw new Error(sprintf('Type kind of %s not supported.', $def->kind)),
        };
    }

    /**
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'type' => "\yxorP\app\lib\data\graphQL\Type\Definition\Type", 'description' => "null|string", 'astNode' => "\yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode", 'defaultValue' => "mixed"])] public function buildInputField(InputValueDefinitionNode $value): array
    {
        $type = $this->buildWrappedType($value->type);

        $config = [
            'name' => $value->name->value,
            'type' => $type,
            'description' => $this->getDescription($value),
            'astNode' => $value,
        ];

        if ($value->defaultValue !== null) {
            $config['defaultValue'] = $value->defaultValue;
        }

        return $config;
    }

    /**
     * @return array<string, mixed>
     */
    #[ArrayShape(['description' => "null|string", 'deprecationReason' => "null|string", 'astNode' => "\yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode"])] public function buildEnumValue(EnumValueDefinitionNode $value): array
    {
        return [
            'description' => $this->getDescription($value),
            'deprecationReason' => $this->getDeprecationReason($value),
            'astNode' => $value,
        ];
    }
}
