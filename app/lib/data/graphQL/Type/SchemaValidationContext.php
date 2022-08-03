<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type;

use Exception;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveNode;
use yxorP\app\lib\data\graphQL\Language\AST\EnumValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InputValueDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\InterfaceTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\NamedTypeNode;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\AST\NodeList;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\ObjectTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\TypeDefinitionNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\TypeNodeInterface;
use yxorP\app\lib\data\graphQL\Language\DirectiveLocation;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumType;
use yxorP\app\lib\data\graphQL\Type\Definition\EnumValueDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\FieldDefinition;
use yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectField;
use yxorP\app\lib\data\graphQL\Type\Definition\InputObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\NamedType;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use yxorP\app\lib\data\graphQL\Type\Validation\InputObjectCircularRefs;
use yxorP\app\lib\data\graphQL\Utils\TypeComparators;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function array_filter;
use function array_key_exists;
use function array_merge;
use function count;
use function in_array;
use function is_array;
use function is_object;
use function sprintf;

class SchemaValidationContext
{
    /** @var Error[] */
    private array $errors = [];

    /** @var Schema */
    private Schema $schema;

    /** @var InputObjectCircularRefs */
    private InputObjectCircularRefs $inputObjectCircularRefs;

    #[Pure] public function __construct(Schema $schema)
    {
        $this->schema = $schema;
        $this->inputObjectCircularRefs = new InputObjectCircularRefs($this);
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function validateRootTypes(): void
    {
        $queryType = $this->schema->getQueryType();
        if (!$queryType) {
            $this->reportError(
                'Query root type must be provided.',
                $this->schema->getAstNode()
            );
        } elseif (!$queryType instanceof ObjectType) {
            $this->reportError(
                'Query root type must be Object type, it cannot be ' . Utils::printSafe($queryType) . '.',
                $this->getOperationTypeNode($queryType, 'query')
            );
        }

        $mutationType = $this->schema->getMutationType();
        if ($mutationType && !$mutationType instanceof ObjectType) {
            $this->reportError(
                'Mutation root type must be Object type if provided, it cannot be ' . Utils::printSafe($mutationType) . '.',
                $this->getOperationTypeNode($mutationType, 'mutation')
            );
        }

        $subscriptionType = $this->schema->getSubscriptionType();
        if ($subscriptionType === null || $subscriptionType instanceof ObjectType) {
            return;
        }

        $this->reportError(
            'Subscription root type must be Object type if provided, it cannot be ' . Utils::printSafe($subscriptionType) . '.',
            $this->getOperationTypeNode($subscriptionType, 'subscription')
        );
    }

    /**
     * @param string $message
     * @param Node|Node[]|TypeDefinitionNodeInterface|TypeNodeInterface|null $nodes
     */
    public function reportError(string $message, TypeDefinitionNodeInterface|array|Node|TypeNodeInterface $nodes = null)
    {
        $nodes = array_filter($nodes && is_array($nodes) ? $nodes : [$nodes]);
        $this->addError(new Error($message, $nodes));
    }

    /**
     * @param Error $error
     */
    private function addError(Error $error)
    {
        $this->errors[] = $error;
    }

    /**
     * @param Type $type
     * @param string $operation
     *
     * @return NamedTypeNode|TypeDefinitionNodeInterface|null
     */
    #[Pure] private function getOperationTypeNode(Type $type, string $operation): TypeDefinitionNodeInterface|NamedTypeNode|null
    {
        $astNode = $this->schema->getAstNode();

        $operationTypeNode = null;
        if ($astNode instanceof SchemaDefinitionNode) {
            $operationTypeNode = null;

            foreach ($astNode->operationTypes as $operationType) {
                if ($operationType->operation === $operation) {
                    $operationTypeNode = $operationType;
                    break;
                }
            }
        }

        return $operationTypeNode ? $operationTypeNode->type : ($type?->astNode);
    }

    public function validateDirectives()
    {
        $this->validateDirectiveDefinitions();

        // Validate directives that are used on the schema
        $this->validateDirectivesAtLocation(
            $this->getDirectives($this->schema),
            DirectiveLocation::SCHEMA
        );
    }

    /**
     * @throws Exception
     */
    public function validateDirectiveDefinitions()
    {
        $directiveDefinitions = [];

        $directives = $this->schema->getDirectives();
        foreach ($directives as $directive) {
            // Ensure all directives are in fact GraphQL directives.
            if (!$directive instanceof Directive) {
                $nodes = is_object($directive)
                    ? $directive->astNode
                    : null;

                $this->reportError(
                    'Expected directive but got: ' . Utils::printSafe($directive) . '.',
                    $nodes
                );
                continue;
            }
            $existingDefinitions = $directiveDefinitions[$directive->name] ?? [];
            $existingDefinitions[] = $directive;
            $directiveDefinitions[$directive->name] = $existingDefinitions;

            // Ensure they are named correctly.
            $this->validateName($directive);

            // TODO: Ensure proper locations.

            $argNames = [];
            foreach ($directive->args as $arg) {
                $argName = $arg->name;

                // Ensure they are named correctly.
                $this->validateName($directive);

                if (isset($argNames[$argName])) {
                    $this->reportError(
                        sprintf('Argument @%s(%s:) can only be defined once.', $directive->name, $argName),
                        $this->getAllDirectiveArgNodes($directive, $argName)
                    );
                    continue;
                }

                $argNames[$argName] = true;

                // Ensure the type is an input type.
                if (Type::isInputType($arg->getType())) {
                    continue;
                }

                $this->reportError(
                    sprintf(
                        'The type of @%s(%s:) must be Input Type but got: %s.',
                        $directive->name,
                        $argName,
                        Utils::printSafe($arg->getType())
                    ),
                    $this->getDirectiveArgTypeNode($directive, $argName)
                );
            }
        }
        foreach ($directiveDefinitions as $directiveName => $directiveList) {
            if (count($directiveList) <= 1) {
                continue;
            }

            $nodes = Utils::map(
                $directiveList,
                static function (Directive $directive): ?DirectiveDefinitionNode {
                    return $directive->astNode;
                }
            );
            $this->reportError(
                sprintf('Directive @%s defined multiple times.', $directiveName),
                array_filter($nodes)
            );
        }
    }

    /**
     * @param Directive|EnumValueDefinition|FieldDefinition|InputObjectField|Type $node
     */
    private function validateName(Directive|FieldDefinition|InputObjectField|EnumValueDefinition|Type $node)
    {
        // Ensure names are valid, however introspection types opt out.
        $error = Utils::isValidNameError($node->name, $node->astNode);
        if (!$error || Introspection::isIntrospectionType($node)) {
            return;
        }

        $this->addError($error);
    }

    /**
     * @param Directive $directive
     * @param string $argName
     *
     * @return InputValueDefinitionNode[]
     * @throws Exception
     */
    private function getAllDirectiveArgNodes(Directive $directive, string $argName): array
    {
        $subNodes = $this->getAllSubNodes(
            $directive,
            static function ($directiveNode) {
                return $directiveNode->arguments;
            }
        );

        return Utils::filter(
            (array)$subNodes,
            static function ($argNode) use ($argName): bool {
                return $argNode->name->value === $argName;
            }
        );
    }

    /**
     * @param Directive|EnumType|InterfaceType|ObjectType|Schema|UnionType $obj
     * @param callable $getter
     * @return NodeList
     */
    private function getAllSubNodes(Directive|InterfaceType|Schema|EnumType|UnionType|ObjectType $obj, callable $getter): NodeList
    {
        $result = new NodeList([]);
        foreach ($this->getAllNodes($obj) as $astNode) {
            if (!$astNode) {
                continue;
            }

            $subNodes = $getter($astNode);
            if (!$subNodes) {
                continue;
            }

            $result = $result->merge($subNodes);
        }

        return $result;
    }

    /**
     * @param Directive|EnumType|InputObjectType|InterfaceType|ObjectType|Schema|UnionType $obj
     *
     * @return array
     */
    #[Pure] private function getAllNodes(Directive|InterfaceType|Schema|EnumType|UnionType|ObjectType|InputObjectType $obj): array
    {
        if ($obj instanceof Schema) {
            $astNode = $obj->getAstNode();
        } else {
            $astNode = $obj->astNode;
        }
        $extensionNodes = $obj->extensionASTNodes;

        return $astNode
            ? ($extensionNodes
                ? array_merge([$astNode], $extensionNodes)
                : [$astNode])
            : ($extensionNodes ?? []);
    }

    /**
     * @param Directive $directive
     * @param string $argName
     *
     * @return TypeNodeInterface|null
     * @throws Exception
     */
    private function getDirectiveArgTypeNode(Directive $directive, string $argName): ?TypeNodeInterface
    {
        $argNode = $this->getAllDirectiveArgNodes($directive, $argName)[0];

        return $argNode?->type;
    }

    /**
     * @param NodeList<DirectiveNode> $directives
     * @param string $location
     */
    private function validateDirectivesAtLocation(NodeList $directives, string $location)
    {
        /** @var array<string, array<int, DirectiveNode>> $potentiallyDuplicateDirectives */
        $potentiallyDuplicateDirectives = [];
        $schema = $this->schema;
        foreach ($directives as $directive) {
            $directiveName = $directive->name->value;

            // Ensure directive used is also defined
            $schemaDirective = $schema->getDirective($directiveName);
            if ($schemaDirective === null) {
                $this->reportError(
                    sprintf('No directive @%s defined.', $directiveName),
                    $directive
                );
                continue;
            }

            $includes = Utils::some(
                $schemaDirective->locations,
                static function ($schemaLocation) use ($location): bool {
                    return $schemaLocation === $location;
                }
            );
            if (!$includes) {
                $errorNodes = $schemaDirective->astNode
                    ? [$directive, $schemaDirective->astNode]
                    : [$directive];
                $this->reportError(
                    sprintf('Directive @%s not allowed at %s location.', $directiveName, $location),
                    $errorNodes
                );
            }

            if ($schemaDirective->isRepeatable) {
                continue;
            }

            $existingNodes = $potentiallyDuplicateDirectives[$directiveName] ?? [];
            $existingNodes[] = $directive;
            $potentiallyDuplicateDirectives[$directiveName] = $existingNodes;
        }

        foreach ($potentiallyDuplicateDirectives as $directiveName => $directiveList) {
            if (count($directiveList) <= 1) {
                continue;
            }

            $this->reportError(
                sprintf('Non-repeatable directive @%s used more than once at the same location.', $directiveName),
                $directiveList
            );
        }
    }

    /**
     * @param Schema|Type $object
     *
     * @return NodeList<DirectiveNode>
     */
    private function getDirectives(Schema|Type $object): NodeList
    {
        return $this->getAllSubNodes($object, static function ($node) {
            return $node->directives;
        });
    }

    public function validateTypes(): void
    {
        $typeMap = $this->schema->getTypeMap();
        foreach ($typeMap as $typeName => $type) {
            // Ensure all provided types are in fact GraphQL type.
            if (!$type instanceof NamedType) {
                $this->reportError(
                    'Expected GraphQL named type but got: ' . Utils::printSafe($type) . '.'
                );
                continue;
            }

            $this->validateName($type);

            if ($type instanceof ObjectType) {
                // Ensure fields are valid
                $this->validateFields($type);

                // Ensure objects implement the interfaces they claim to.
                $this->validateInterfaces($type);

                // Ensure directives are valid
                $this->validateDirectivesAtLocation(
                    $this->getDirectives($type),
                    DirectiveLocation::OBJECT
                );
            } elseif ($type instanceof InterfaceType) {
                // Ensure fields are valid.
                $this->validateFields($type);

                // Ensure interfaces implement the interfaces they claim to.
                $this->validateInterfaces($type);

                // Ensure directives are valid
                $this->validateDirectivesAtLocation(
                    $this->getDirectives($type),
                    DirectiveLocation::IFACE
                );
            } elseif ($type instanceof UnionType) {
                // Ensure Unions include valid member types.
                $this->validateUnionMembers($type);

                // Ensure directives are valid
                $this->validateDirectivesAtLocation(
                    $this->getDirectives($type),
                    DirectiveLocation::UNION
                );
            } elseif (false) {
                // Ensure Enums have valid values.
                $this->validateEnumValues($type);

                // Ensure directives are valid
                $this->validateDirectivesAtLocation(
                    $this->getDirectives($type),
                    DirectiveLocation::ENUM
                );
            } elseif (false) {
                // Ensure Input Object fields are valid.
                $this->validateInputFields($type);

                // Ensure directives are valid
                $this->validateDirectivesAtLocation(
                    $this->getDirectives($type),
                    DirectiveLocation::INPUT_OBJECT
                );

                // Ensure Input Objects do not contain non-nullable circular references
                $this->inputObjectCircularRefs->validate($type);
            }
        }
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @throws Exception
     */
    private function validateFields(InterfaceType|ObjectType $type)
    {
        $fieldMap = $type->getFields();

        // Objects and Interfaces both must define one or more fields.
        if ($fieldMap === []) {
            $this->reportError(
                sprintf('Type %s must define one or more fields.', $type->name),
                $this->getAllNodes($type)
            );
        }

        foreach ($fieldMap as $fieldName => $field) {
            // Ensure they are named correctly.
            $this->validateName($field);

            // Ensure they were defined at most once.
            $fieldNodes = $this->getAllFieldNodes($type, $fieldName);
            if ($fieldNodes && count($fieldNodes) > 1) {
                $this->reportError(
                    sprintf('Field %s.%s can only be defined once.', $type->name, $fieldName),
                    $fieldNodes
                );
                continue;
            }

            // Ensure the type is an output type
            if (!Type::isOutputType($field->getType())) {
                $this->reportError(
                    sprintf(
                        'The type of %s.%s must be Output Type but got: %s.',
                        $type->name,
                        $fieldName,
                        Utils::printSafe($field->getType())
                    ),
                    $this->getFieldTypeNode($type, $fieldName)
                );
            }

            // Ensure the arguments are valid
            $argNames = [];
            foreach ($field->args as $arg) {
                $argName = $arg->name;

                // Ensure they are named correctly.
                $this->validateName($arg);

                if (isset($argNames[$argName])) {
                    $this->reportError(
                        sprintf(
                            'Field argument %s.%s(%s:) can only be defined once.',
                            $type->name,
                            $fieldName,
                            $argName
                        ),
                        $this->getAllFieldArgNodes($type, $fieldName, $argName)
                    );
                }
                $argNames[$argName] = true;

                // Ensure the type is an input type
                if (!Type::isInputType($arg->getType())) {
                    $this->reportError(
                        sprintf(
                            'The type of %s.%s(%s:) must be Input Type but got: %s.',
                            $type->name,
                            $fieldName,
                            $argName,
                            Utils::printSafe($arg->getType())
                        ),
                        $this->getFieldArgTypeNode($type, $fieldName, $argName)
                    );
                }

                // Ensure argument definition directives are valid
                if (!isset($arg->astNode, $arg->astNode->directives)) {
                    continue;
                }

                $this->validateDirectivesAtLocation(
                    $arg->astNode->directives,
                    DirectiveLocation::ARGUMENT_DEFINITION
                );
            }

            // Ensure any directives are valid
            if (!isset($field->astNode, $field->astNode->directives)) {
                continue;
            }

            $this->validateDirectivesAtLocation(
                $field->astNode->directives,
                DirectiveLocation::FIELD_DEFINITION
            );
        }
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     *
     * @return FieldDefinitionNode[]
     * @throws Exception
     */
    private function getAllFieldNodes(InterfaceType|ObjectType $type, string $fieldName): array
    {
        $subNodes = $this->getAllSubNodes($type, static function ($typeNode) {
            return $typeNode->fields;
        });

        return Utils::filter((array)$subNodes, static function ($fieldNode) use ($fieldName): bool {
            return $fieldNode->name->value === $fieldName;
        });
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     *
     * @return TypeNodeInterface|null
     */
    private function getFieldTypeNode(InterfaceType|ObjectType $type, string $fieldName): ?TypeNodeInterface
    {
        $fieldNode = $this->getFieldNode($type, $fieldName);

        return $fieldNode?->type;
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     *
     * @return FieldDefinitionNode|null
     * @throws Exception
     */
    private function getFieldNode(InterfaceType|ObjectType $type, string $fieldName): ?FieldDefinitionNode
    {
        $nodes = $this->getAllFieldNodes($type, $fieldName);

        return $nodes[0] ?? null;
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     * @param string $argName
     *
     * @return InputValueDefinitionNode[]
     */
    private function getAllFieldArgNodes(InterfaceType|ObjectType $type, string $fieldName, string $argName): array
    {
        $argNodes = [];
        $fieldNode = $this->getFieldNode($type, $fieldName);
        if ($fieldNode) {
            foreach ($fieldNode->arguments as $node) {
                if ($node->name->value !== $argName) {
                    continue;
                }

                $argNodes[] = $node;
            }
        }

        return $argNodes;
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     * @param string $argName
     *
     * @return TypeNodeInterface|null
     */
    private function getFieldArgTypeNode(InterfaceType|ObjectType $type, string $fieldName, string $argName): ?TypeNodeInterface
    {
        $fieldArgNode = $this->getFieldArgNode($type, $fieldName, $argName);

        return $fieldArgNode?->type;
    }

    /**
     * @param InterfaceType|ObjectType $type
     * @param string $fieldName
     * @param string $argName
     *
     * @return InputValueDefinitionNode|null
     */
    private function getFieldArgNode(InterfaceType|ObjectType $type, string $fieldName, string $argName): ?InputValueDefinitionNode
    {
        $nodes = $this->getAllFieldArgNodes($type, $fieldName, $argName);

        return $nodes[0] ?? null;
    }

    /**
     * @param ImplementingType $type
     * @throws Exception
     */
    private function validateInterfaces(ImplementingType $type): void
    {
        $ifaceTypeNames = [];
        foreach ($type->getInterfaces() as $iface) {
            if (!$iface instanceof InterfaceType) {
                $this->reportError(
                    sprintf(
                        'Type %s must only implement Interface types, it cannot implement %s.',
                        $type->name,
                        Utils::printSafe($iface)
                    ),
                    $this->getImplementsInterfaceNode($type, $iface)
                );
                continue;
            }

            if ($type === $iface) {
                $this->reportError(
                    sprintf(
                        'Type %s cannot implement itself because it would create a circular reference.',
                        $type->name
                    ),
                    $this->getImplementsInterfaceNode($type, $iface)
                );
                continue;
            }

            if (isset($ifaceTypeNames[$iface->name])) {
                $this->reportError(
                    sprintf('Type %s can only implement %s once.', $type->name, $iface->name),
                    $this->getAllImplementsInterfaceNodes($type, $iface)
                );
                continue;
            }
            $ifaceTypeNames[$iface->name] = true;

            $this->validateTypeImplementsAncestors($type, $iface);
            $this->validateTypeImplementsInterface($type, $iface);
        }
    }

    /**
     * @param ImplementingType $type
     * @param Type $shouldBeInterface
     * @return NamedTypeNode|null
     * @throws Exception
     */
    private function getImplementsInterfaceNode(ImplementingType $type, Type $shouldBeInterface): ?NamedTypeNode
    {
        $nodes = $this->getAllImplementsInterfaceNodes($type, $shouldBeInterface);

        return $nodes[0] ?? null;
    }

    /**
     * @param ImplementingType $type
     * @param Type $shouldBeInterface
     * @return array<int, NamedTypeNode>
     * @throws Exception
     */
    private function getAllImplementsInterfaceNodes(ImplementingType $type, Type $shouldBeInterface): array
    {
        $subNodes = $this->getAllSubNodes($type, static function (Node $typeNode): NodeList {
            /** @var ObjectTypeDefinitionNode|ObjectTypeExtensionNode|InterfaceTypeDefinitionNode|InterfaceTypeExtensionNode $typeNode */
            return $typeNode->interfaces;
        });

        return Utils::filter((array)$subNodes, static function (NamedTypeNode $ifaceNode) use ($shouldBeInterface): bool {
            return $ifaceNode->name->value === $shouldBeInterface->name;
        });
    }

    /**
     * @param ImplementingType $type
     * @param InterfaceType $iface
     * @throws Exception
     */
    private function validateTypeImplementsAncestors(ImplementingType $type, InterfaceType $iface): void
    {
        $typeInterfaces = $type->getInterfaces();
        foreach ($iface->getInterfaces() as $transitive) {
            if (in_array($transitive, $typeInterfaces, true)) {
                continue;
            }

            $error = $transitive === $type ?
                sprintf(
                    'Type %s cannot implement %s because it would create a circular reference.',
                    $type->name,
                    $iface->name
                ) :
                sprintf(
                    'Type %s must implement %s because it is implemented by %s.',
                    $type->name,
                    $transitive->name,
                    $iface->name
                );
            $this->reportError(
                $error,
                array_merge(
                    $this->getAllImplementsInterfaceNodes($iface, $transitive),
                    $this->getAllImplementsInterfaceNodes($type, $iface)
                )
            );
        }
    }

    /**
     * @param ImplementingType $type
     * @param InterfaceType $iface
     */
    private function validateTypeImplementsInterface(ImplementingType $type, InterfaceType $iface)
    {
        $typeFieldMap = $type->getFields();
        $ifaceFieldMap = $iface->getFields();

        // Assert each interface field is implemented.
        foreach ($ifaceFieldMap as $fieldName => $ifaceField) {
            $typeField = array_key_exists($fieldName, $typeFieldMap)
                ? $typeFieldMap[$fieldName]
                : null;

            // Assert interface field exists on type.
            if (!$typeField) {
                $this->reportError(
                    sprintf(
                        'Interface field %s.%s expected but %s does not provide it.',
                        $iface->name,
                        $fieldName,
                        $type->name
                    ),
                    array_merge(
                        [$this->getFieldNode($iface, $fieldName)],
                        $this->getAllNodes($type)
                    )
                );
                continue;
            }

            // Assert interface field type is satisfied by type field type, by being
            // a valid subtype. (covariant)
            if (!TypeComparators::isTypeSubTypeOf(
                $this->schema,
                $typeField->getType(),
                $ifaceField->getType()
            )
            ) {
                $this->reportError(
                    sprintf(
                        'Interface field %s.%s expects type %s but %s.%s is type %s.',
                        $iface->name,
                        $fieldName,
                        $ifaceField->getType(),
                        $type->name,
                        $fieldName,
                        Utils::printSafe($typeField->getType())
                    ),
                    [
                        $this->getFieldTypeNode($iface, $fieldName),
                        $this->getFieldTypeNode($type, $fieldName),
                    ]
                );
            }

            // Assert each interface field arg is implemented.
            foreach ($ifaceField->args as $ifaceArg) {
                $argName = $ifaceArg->name;
                $typeArg = null;

                foreach ($typeField->args as $arg) {
                    if ($arg->name === $argName) {
                        $typeArg = $arg;
                        break;
                    }
                }

                // Assert interface field arg exists on type field.
                if (!$typeArg) {
                    $this->reportError(
                        sprintf(
                            'Interface field argument %s.%s(%s:) expected but %s.%s does not provide it.',
                            $iface->name,
                            $fieldName,
                            $argName,
                            $type->name,
                            $fieldName
                        ),
                        [
                            $this->getFieldArgNode($iface, $fieldName, $argName),
                            $this->getFieldNode($type, $fieldName),
                        ]
                    );
                    continue;
                }

                // Assert interface field arg type matches type field arg type.
                // (invariant)
                // TODO: change to contravariant?
                if (!TypeComparators::isEqualType($ifaceArg->getType(), $typeArg->getType())) {
                    $this->reportError(
                        sprintf(
                            'Interface field argument %s.%s(%s:) expects type %s but %s.%s(%s:) is type %s.',
                            $iface->name,
                            $fieldName,
                            $argName,
                            Utils::printSafe($ifaceArg->getType()),
                            $type->name,
                            $fieldName,
                            $argName,
                            Utils::printSafe($typeArg->getType())
                        ),
                        [
                            $this->getFieldArgTypeNode($iface, $fieldName, $argName),
                            $this->getFieldArgTypeNode($type, $fieldName, $argName),
                        ]
                    );
                }
                // TODO: validate default values?
            }

            // Assert additional arguments must not be required.
            foreach ($typeField->args as $typeArg) {
                $argName = $typeArg->name;
                $ifaceArg = null;

                foreach ($ifaceField->args as $arg) {
                    if ($arg->name === $argName) {
                        $ifaceArg = $arg;
                        break;
                    }
                }

                if ($ifaceArg || !$typeArg->isRequired()) {
                    continue;
                }

                $this->reportError(
                    sprintf(
                        'Object field %s.%s includes required argument %s that is missing from the Interface field %s.%s.',
                        $type->name,
                        $fieldName,
                        $argName,
                        $iface->name,
                        $fieldName
                    ),
                    [
                        $this->getFieldArgNode($type, $fieldName, $argName),
                        $this->getFieldNode($iface, $fieldName),
                    ]
                );
            }
        }
    }

    private function validateUnionMembers(UnionType $union)
    {
        $memberTypes = $union->getTypes();

        if (!$memberTypes) {
            $this->reportError(
                sprintf('Union type %s must define one or more member types.', $union->name),
                $this->getAllNodes($union)
            );
        }

        $includedTypeNames = [];

        foreach ($memberTypes as $memberType) {
            if (isset($includedTypeNames[$memberType->name])) {
                $this->reportError(
                    sprintf('Union type %s can only include type %s once.', $union->name, $memberType->name),
                    $this->getUnionMemberTypeNodes($union, $memberType->name)
                );
                continue;
            }
            $includedTypeNames[$memberType->name] = true;
            if ($memberType instanceof ObjectType) {
                continue;
            }

            $this->reportError(
                sprintf(
                    'Union type %s can only include Object types, it cannot include %s.',
                    $union->name,
                    Utils::printSafe($memberType)
                ),
                $this->getUnionMemberTypeNodes($union, Utils::printSafe($memberType))
            );
        }
    }

    /**
     * @param UnionType $union
     * @param string $typeName
     *
     * @return NamedTypeNode[]
     * @throws Exception
     */
    private function getUnionMemberTypeNodes(UnionType $union, string $typeName): array
    {
        $subNodes = $this->getAllSubNodes($union, static function ($unionNode) {
            return $unionNode->types;
        });

        return Utils::filter((array)$subNodes, static function ($typeNode) use ($typeName): bool {
            return $typeNode->name->value === $typeName;
        });
    }

    private function validateEnumValues(EnumType $enumType)
    {
        $enumValues = $enumType->getValues();

        if (!$enumValues) {
            $this->reportError(
                sprintf('Enum type %s must define one or more values.', $enumType->name),
                $this->getAllNodes($enumType)
            );
        }

        foreach ($enumValues as $enumValue) {
            $valueName = $enumValue->name;

            // Ensure no duplicates
            $allNodes = $this->getEnumValueNodes($enumType, $valueName);
            if ($allNodes && count($allNodes) > 1) {
                $this->reportError(
                    sprintf('Enum type %s can include value %s only once.', $enumType->name, $valueName),
                    $allNodes
                );
            }

            // Ensure valid name.
            $this->validateName($enumValue);
            if ($valueName === 'true' || $valueName === 'false' || $valueName === 'null') {
                $this->reportError(
                    sprintf('Enum type %s cannot include value: %s.', $enumType->name, $valueName),
                    $enumValue->astNode
                );
            }

            // Ensure valid directives
            if (!isset($enumValue->astNode, $enumValue->astNode->directives)) {
                continue;
            }

            $this->validateDirectivesAtLocation(
                $enumValue->astNode->directives,
                DirectiveLocation::ENUM_VALUE
            );
        }
    }

    /**
     * @param EnumType $enum
     * @param string $valueName
     *
     * @return EnumValueDefinitionNode[]
     * @throws Exception
     */
    private function getEnumValueNodes(EnumType $enum, string $valueName): array
    {
        $subNodes = $this->getAllSubNodes($enum, static function ($enumNode) {
            return $enumNode->values;
        });

        return Utils::filter((array)$subNodes, static function ($valueNode) use ($valueName): bool {
            return $valueNode->name->value === $valueName;
        });
    }

    private function validateInputFields(InputObjectType $inputObj)
    {
        $fieldMap = $inputObj->getFields();

        if (!$fieldMap) {
            $this->reportError(
                sprintf('Input Object type %s must define one or more fields.', $inputObj->name),
                $this->getAllNodes($inputObj)
            );
        }

        // Ensure the arguments are valid
        foreach ($fieldMap as $fieldName => $field) {
            // Ensure they are named correctly.
            $this->validateName($field);

            // TODO: Ensure they are unique per field.

            // Ensure the type is an input type
            if (!Type::isInputType($field->getType())) {
                $this->reportError(
                    sprintf(
                        'The type of %s.%s must be Input Type but got: %s.',
                        $inputObj->name,
                        $fieldName,
                        Utils::printSafe($field->getType())
                    ),
                    $field->astNode?->type
                );
            }

            // Ensure valid directives
            if (!isset($field->astNode, $field->astNode->directives)) {
                continue;
            }

            $this->validateDirectivesAtLocation(
                $field->astNode->directives,
                DirectiveLocation::INPUT_FIELD_DEFINITION
            );
        }
    }
}
