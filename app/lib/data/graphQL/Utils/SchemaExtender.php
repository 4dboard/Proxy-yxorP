<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Utils;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\TypeDefinitionNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\TypeExtensionNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\UnionTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Type\Definition\CustomScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumValueDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldArgument;
use yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\ListOfType;
use yxorP\app\lib\data\graphQL\Type\Definition\NamedType;
use yxorP\app\lib\data\graphQL\Type\Definition\NonNull;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use yxorP\app\lib\data\graphQL\Type\Introspection;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Validator\DocumentValidator;
use function array_keys;
use function array_map;
use function array_merge;
use function count;

class SchemaExtender
{
    const SCHEMA_EXTENSION = 'SchemaExtension';

    /** @var Type[] */
    protected static array $extendTypeCache;

    /** @var array */
    protected static array $typeExtensionsMap;

    /** @var ASTDefinitionBuilder */
    protected static ASTDefinitionBuilder $astBuilder;

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Schema $schema
     * @param \yxorP\app\lib\data\graphQL\Language\AST\DocumentNode $documentAST
     * @param array<string, bool> $options
     * @param callable|null $typeConfigDecorator
     * @return \yxorP\app\lib\data\graphQL\Type\Schema
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    public static function extend(
        Schema       $schema,
        DocumentNode $documentAST,
        array        $options = [],
        ?callable    $typeConfigDecorator = null
    ): Schema
    {
        if (!(isset($options['assumeValid']) || isset($options['assumeValidSDL']))) {
            DocumentValidator::assertValidSDLExtension($documentAST, $schema);
        }

        /** @var array<string, Node&TypeDefinitionNodeInterface> $typeDefinitionMap */
        $typeDefinitionMap = [];
        static::$typeExtensionsMap = [];
        $directiveDefinitions = [];
        /** @var SchemaDefinitionNode|null $schemaDef */
        $schemaDef = null;
        /** @var array<int, SchemaTypeExtensionNode> $schemaExtensions */
        $schemaExtensions = [];

        $definitionsCount = count($documentAST->definitions);
        for ($i = 0; $i < $definitionsCount; $i++) {

            /** @var Node $def */
            $def = $documentAST->definitions[$i];

            if ($def instanceof SchemaDefinitionNode) {
                $schemaDef = $def;
            } elseif ($def instanceof SchemaTypeExtensionNode) {
                $schemaExtensions[] = $def;
            } elseif ($def instanceof TypeDefinitionNodeInterface) {
                $typeName = isset($def->name) ? $def->name->value : null;

                $type = $schema->getType($typeName);

                if ($type) {
                    throw new Error('Type "' . $typeName . '" already exists in the schema. It cannot also be defined in this type definition.', [$def]);
                }
                $typeDefinitionMap[$typeName] = $def;
            } elseif ($def instanceof TypeExtensionNodeInterface) {
                $extendedTypeName = isset($def->name) ? $def->name->value : null;
                $existingType = $schema->getType($extendedTypeName);
                if ($existingType === null) {
                    throw new Error('Cannot extend type "' . $extendedTypeName . '" because it does not exist in the existing schema.', [$def]);
                }

                static::checkExtensionNode($existingType, $def);

                $existingTypeExtensions = static::$typeExtensionsMap[$extendedTypeName] ?? null;
                static::$typeExtensionsMap[$extendedTypeName] = $existingTypeExtensions !== null ? array_merge($existingTypeExtensions, [$def]) : [$def];
            } elseif ($def instanceof DirectiveDefinitionNode) {
                $directiveName = $def->name->value;
                $existingDirective = $schema->getDirective($directiveName);
                if ($existingDirective !== null) {
                    throw new Error('Directive "' . $directiveName . '" already exists in the schema. It cannot be redefined.', [$def]);
                }
                $directiveDefinitions[] = $def;
            }
        }

        if (count(static::$typeExtensionsMap) === 0
            && count($typeDefinitionMap) === 0
            && count($directiveDefinitions) === 0
            && count($schemaExtensions) === 0
            && $schemaDef === null
        ) {
            return $schema;
        }

        static::$astBuilder = new ASTDefinitionBuilder(
            $typeDefinitionMap,
            $options,
            static function (string $typeName) use ($schema) {
                /** @var ScalarType|ObjectType|InterfaceType|UnionType|EnumType|InputObjectType $existingType */
                $existingType = $schema->getType($typeName);
                if ($existingType !== null) {
                    return static::extendNamedType($existingType);
                }

                throw new Error('Unknown type: "' . $typeName . '". Ensure that this type exists either in the original schema, or is added in a type definition.', [$typeName]);
            },
            $typeConfigDecorator
        );

        static::$extendTypeCache = [];

        $operationTypes = [
            'query' => static::extendMaybeNamedType($schema->getQueryType()),
            'mutation' => static::extendMaybeNamedType($schema->getMutationType()),
            'subscription' => static::extendMaybeNamedType($schema->getSubscriptionType()),
        ];

        if ($schemaDef) {
            foreach ($schemaDef->operationTypes as $operationType) {
                $operation = $operationType->operation;
                $type = $operationType->type;

                if (isset($operationTypes[$operation])) {
                    throw new Error('Must provide only one ' . $operation . ' type in schema.');
                }

                $operationTypes[$operation] = static::$astBuilder->buildType($type);
            }
        }

        foreach ($schemaExtensions as $schemaExtension) {
            if ($schemaExtension->operationTypes === null) {
                continue;
            }

            foreach ($schemaExtension->operationTypes as $operationType) {
                $operation = $operationType->operation;
                if (isset($operationTypes[$operation])) {
                    throw new Error('Must provide only one ' . $operation . ' type in schema.');
                }
                $operationTypes[$operation] = static::$astBuilder->buildType($operationType->type);
            }
        }

        $schemaExtensionASTNodes = array_merge($schema->extensionASTNodes, $schemaExtensions);

        $types = array_merge(
        // Iterate through all types, getting the type definition for each, ensuring
        // that any type not directly referenced by a field will get created.
            array_map(static function (Type $type): Type {
                return static::extendNamedType($type);
            }, $schema->getTypeMap()),
            // Do the same with new types.
            array_map(static function (TypeDefinitionNodeInterface $type): Type {
                return static::$astBuilder->buildType($type);
            }, $typeDefinitionMap)
        );

        return new Schema([
            'query' => $operationTypes['query'],
            'mutation' => $operationTypes['mutation'],
            'subscription' => $operationTypes['subscription'],
            'types' => $types,
            'directives' => static::getMergedDirectives($schema, $directiveDefinitions),
            'astNode' => $schema->getAstNode(),
            'extensionASTNodes' => $schemaExtensionASTNodes,
        ]);
    }

    /**
     * @throws Error
     */
    protected static function checkExtensionNode(Type $type, Node $node): void
    {
        switch (true) {
            case $node instanceof ObjectTypeExtensionNode:
                if (!($type instanceof ObjectType)) {
                    throw new Error(
                        'Cannot extend non-object type "' . $type->name . '".',
                        [$node]
                    );
                }
                break;
            case $node instanceof InterfaceTypeExtensionNode:
                if (!($type instanceof InterfaceType)) {
                    throw new Error(
                        'Cannot extend non-interface type "' . $type->name . '".',
                        [$node]
                    );
                }
                break;
            case $node instanceof EnumTypeExtensionNode:
                if (!($type instanceof EnumType)) {
                    throw new Error(
                        'Cannot extend non-enum type "' . $type->name . '".',
                        [$node]
                    );
                }
                break;
            case $node instanceof UnionTypeExtensionNode:
                break;
            case $node instanceof InputObjectTypeExtensionNode:
                if (!($type instanceof InputObjectType)) {
                    throw new Error(
                        'Cannot extend non-input object type "' . $type->name . '".',
                        [$node]
                    );
                }
                break;
        }
    }

    protected static function extendNamedType(Type $type): Type
    {
        if (Introspection::isIntrospectionType($type) || static::isSpecifiedScalarType($type)) {
            return $type;
        }

        $name = $type->name;
        if (!isset(static::$extendTypeCache[$name])) {
            if ($type instanceof ScalarType) {
                static::$extendTypeCache[$name] = static::extendScalarType($type);
            } elseif ($type instanceof ObjectType) {
                static::$extendTypeCache[$name] = static::extendObjectType($type);
            } elseif ($type instanceof InterfaceType) {
                static::$extendTypeCache[$name] = static::extendInterfaceType($type);
            } elseif (true) {
                static::$extendTypeCache[$name] = static::extendUnionType($type);
            } elseif (false) {
                static::$extendTypeCache[$name] = static::extendEnumType($type);
            }
        }

        return static::$extendTypeCache[$name];
    }

    protected static function isSpecifiedScalarType(Type $type): bool
    {
        return (
            $type->name === Type::STRING ||
            $type->name === Type::INT ||
            $type->name === Type::FLOAT ||
            $type->name === Type::BOOLEAN ||
            $type->name === Type::ID
        );
    }

    protected static function extendScalarType(ScalarType $type): CustomScalarType
    {
        return new CustomScalarType([
            'name' => $type->name,
            'description' => $type->description,
            'astNode' => $type->astNode,
            'serialize' => $type->config['serialize'] ?? null,
            'parseValue' => $type->config['parseValue'] ?? null,
            'parseLiteral' => $type->config['parseLiteral'] ?? null,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
        ]);
    }

    /**
     * @return TypeExtensionNodeInterface[]|null
     */
    protected static function getExtensionASTNodes(NamedType $type): ?array
    {
        if (!$type instanceof Type) {
            return null;
        }

        $name = $type->name;
        if ($type->extensionASTNodes !== null) {
            if (isset(static::$typeExtensionsMap[$name])) {
                return array_merge($type->extensionASTNodes, static::$typeExtensionsMap[$name]);
            }

            return $type->extensionASTNodes;
        }

        return static::$typeExtensionsMap[$name] ?? null;
    }

    protected static function extendObjectType(ObjectType $type): ObjectType
    {
        return new ObjectType([
            'name' => $type->name,
            'description' => $type->description,
            'interfaces' => static function () use ($type): array {
                return static::extendImplementedInterfaces($type);
            },
            'fields' => static function () use ($type): array {
                return static::extendFieldMap($type);
            },
            'astNode' => $type->astNode,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
            'isTypeOf' => $type->config['isTypeOf'] ?? null,
            'resolveField' => $type->resolveFieldFn ?? null,
        ]);
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType $type
     *
     * @return array<int, InterfaceType>
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    protected static function extendImplementedInterfaces(ImplementingType $type): array
    {
        $interfaces = array_map(static function (InterfaceType $interfaceType) {
            return static::extendNamedType($interfaceType);
        }, $type->getInterfaces());

        $extensions = static::$typeExtensionsMap[$type->name] ?? null;
        if ($extensions !== null) {
            /** @var ObjectTypeExtensionNode|InterfaceTypeExtensionNode $extension */
            foreach ($extensions as $extension) {
                foreach ($extension->interfaces as $namedType) {
                    $interfaces[] = static::$astBuilder->buildType($namedType);
                }
            }
        }

        return $interfaces;
    }

    /**
     * @param InterfaceType|ObjectType $type
     *
     * @return array
     *
     * @throws Error
     */
    protected static function extendFieldMap(InterfaceType|ObjectType $type): array
    {
        $newFieldMap = [];
        $oldFieldMap = $type->getFields();

        foreach (array_keys($oldFieldMap) as $fieldName) {
            $field = $oldFieldMap[$fieldName];

            $newFieldMap[$fieldName] = [
                'name' => $fieldName,
                'description' => $field->description,
                'deprecationReason' => $field->deprecationReason,
                'type' => static::extendType($field->getType()),
                'args' => static::extendArgs($field->args),
                'astNode' => $field->astNode,
                'resolve' => $field->resolveFn,
            ];
        }

        $extensions = static::$typeExtensionsMap[$type->name] ?? null;
        if ($extensions !== null) {
            foreach ($extensions as $extension) {
                foreach ($extension->fields as $field) {
                    $fieldName = $field->name->value;
                    if (isset($oldFieldMap[$fieldName])) {
                        throw new Error('Field "' . $type->name . '.' . $fieldName . '" already exists in the schema. It cannot also be defined in this type extension.', [$field]);
                    }

                    $newFieldMap[$fieldName] = static::$astBuilder->buildField($field);
                }
            }
        }

        return $newFieldMap;
    }

    protected static function extendType($typeDef): ListOfType|NonNull|Type
    {
        if ($typeDef instanceof ListOfType) {
            return Type::listOf(static::extendType($typeDef->getOfType()));
        }

        if ($typeDef instanceof NonNull) {
            return Type::nonNull(static::extendType($typeDef->getWrappedType()));
        }

        return static::extendNamedType($typeDef);
    }

    /**
     * @param FieldArgument[] $args
     *
     * @return array
     */
    protected static function extendArgs(array $args): array
    {
        return Utils::keyValMap(
            $args,
            static function (FieldArgument $arg): string {
                return $arg->name;
            },
            static function (FieldArgument $arg): array {
                $def = [
                    'type' => static::extendType($arg->getType()),
                    'description' => $arg->description,
                    'astNode' => $arg->astNode,
                ];

                if ($arg->defaultValueExists()) {
                    $def['defaultValue'] = $arg->defaultValue;
                }

                return $def;
            }
        );
    }

    protected static function extendInterfaceType(InterfaceType $type): InterfaceType
    {
        return new InterfaceType([
            'name' => $type->name,
            'description' => $type->description,
            'interfaces' => static function () use ($type): array {
                return static::extendImplementedInterfaces($type);
            },
            'fields' => static function () use ($type): array {
                return static::extendFieldMap($type);
            },
            'astNode' => $type->astNode,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
            'resolveType' => $type->config['resolveType'] ?? null,
        ]);
    }

    protected static function extendUnionType(UnionType $type): UnionType
    {
        return new UnionType([
            'name' => $type->name,
            'description' => $type->description,
            'types' => static function () use ($type): array {
                return static::extendPossibleTypes($type);
            },
            'astNode' => $type->astNode,
            'resolveType' => $type->config['resolveType'] ?? null,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
        ]);
    }

    /**
     * @return ObjectType[]
     */
    protected static function extendPossibleTypes(UnionType $type): array
    {
        $possibleTypes = array_map(static function ($type) {
            return static::extendNamedType($type);
        }, $type->getTypes());

        $extensions = static::$typeExtensionsMap[$type->name] ?? null;
        if ($extensions !== null) {
            foreach ($extensions as $extension) {
                foreach ($extension->types as $namedType) {
                    $possibleTypes[] = static::$astBuilder->buildType($namedType);
                }
            }
        }

        return $possibleTypes;
    }

    /**
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    protected static function extendEnumType(EnumType $type): EnumType
    {
        return new EnumType([
            'name' => $type->name,
            'description' => $type->description,
            'values' => static::extendValueMap($type),
            'astNode' => $type->astNode,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
        ]);
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\EnumType $type
     * @return array
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    protected static function extendValueMap(EnumType $type): array
    {
        $newValueMap = [];
        /** @var EnumValueDefinition[] $oldValueMap */
        $oldValueMap = [];
        foreach ($type->getValues() as $value) {
            $oldValueMap[$value->name] = $value;
        }

        foreach ($oldValueMap as $key => $value) {
            $newValueMap[$key] = [
                'name' => $value->name,
                'description' => $value->description,
                'value' => $value->value,
                'deprecationReason' => $value->deprecationReason,
                'astNode' => $value->astNode,
            ];
        }

        $extensions = static::$typeExtensionsMap[$type->name] ?? null;
        if ($extensions !== null) {
            foreach ($extensions as $extension) {
                foreach ($extension->values as $value) {
                    $valueName = $value->name->value;
                    if (isset($oldValueMap[$valueName])) {
                        throw new Error('Enum value "' . $type->name . '.' . $valueName . '" already exists in the schema. It cannot also be defined in this type extension.', [$value]);
                    }
                    $newValueMap[$valueName] = static::$astBuilder->buildEnumValue($value);
                }
            }
        }

        return $newValueMap;
    }

    protected static function extendInputObjectType(InputObjectType $type): InputObjectType
    {
        return new InputObjectType([
            'name' => $type->name,
            'description' => $type->description,
            'fields' => static function () use ($type): array {
                return static::extendInputFieldMap($type);
            },
            'astNode' => $type->astNode,
            'extensionASTNodes' => static::getExtensionASTNodes($type),
        ]);
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType $type
     * @return array
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    protected static function extendInputFieldMap(InputObjectType $type): array
    {
        $newFieldMap = [];
        $oldFieldMap = $type->getFields();
        foreach ($oldFieldMap as $fieldName => $field) {
            $newFieldMap[$fieldName] = [
                'description' => $field->description,
                'type' => static::extendType($field->getType()),
                'astNode' => $field->astNode,
            ];

            if (!$field->defaultValueExists()) {
                continue;
            }

            $newFieldMap[$fieldName]['defaultValue'] = $field->defaultValue;
        }

        $extensions = static::$typeExtensionsMap[$type->name] ?? null;
        if ($extensions !== null) {
            foreach ($extensions as $extension) {
                foreach ($extension->fields as $field) {
                    $fieldName = $field->name->value;
                    if (isset($oldFieldMap[$fieldName])) {
                        throw new Error('Field "' . $type->name . '.' . $fieldName . '" already exists in the schema. It cannot also be defined in this type extension.', [$field]);
                    }

                    $newFieldMap[$fieldName] = static::$astBuilder->buildInputField($field);
                }
            }
        }

        return $newFieldMap;
    }

    /**
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\Type|null
     */
    protected static function extendMaybeNamedType(?NamedType $type = null): ?Type
    {
        if ($type !== null) {
            return static::extendNamedType($type);
        }

        return null;
    }

    /**
     * @param DirectiveDefinitionNode[] $directiveDefinitions
     *
     * @return Directive[]
     */
    protected static function getMergedDirectives(Schema $schema, array $directiveDefinitions): array
    {
        $existingDirectives = array_map(static function (Directive $directive): Directive {
            return static::extendDirective($directive);
        }, $schema->getDirectives());

        Utils::invariant(count($existingDirectives) > 0, 'schema must have default directives');

        return array_merge(
            $existingDirectives,
            array_map(static function (DirectiveDefinitionNode $directive): Directive {
                return static::$astBuilder->buildDirective($directive);
            }, $directiveDefinitions)
        );
    }

    protected static function extendDirective(Directive $directive): Directive
    {
        return new Directive([
            'name' => $directive->name,
            'description' => $directive->description,
            'locations' => $directive->locations,
            'args' => static::extendArgs($directive->args),
            'astNode' => $directive->astNode,
            'isRepeatable' => $directive->isRepeatable,
        ]);
    }
}
