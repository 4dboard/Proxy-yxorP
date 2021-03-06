<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type;

use Generator;
use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Traversable;
use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\GraphQL;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\SchemaTypeExtensionNode;
use yxorP\app\lib\data\graphQL\Type\Definition\AbstractType;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType;
use yxorP\app\lib\data\graphQL\Type\Definition\InterfaceType;
use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Definition\UnionType;
use yxorP\app\lib\data\graphQL\Utils\InterfaceImplementations;
use yxorP\app\lib\data\graphQL\Utils\TypeInfo;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function array_map;
use function get_class;
use function implode;
use function is_array;
use function is_callable;
use function sprintf;

/**
 * Schema Definition (see [related docs](type-system/schema.md))
 *
 * A Schema is created by supplying the root types of each type of operation:
 * query, mutation (optional) and subscription (optional). A schema definition is
 * then supplied to the validator and executor. Usage Example:
 *
 *     $schema = new GraphQL\Type\Schema([
 *       'query' => $MyAppQueryRootType,
 *       'mutation' => $MyAppMutationRootType,
 *     ]);
 *
 * Or using Schema Config instance:
 *
 *     $config = GraphQL\Type\SchemaConfig::create()
 *         ->setQuery($MyAppQueryRootType)
 *         ->setMutation($MyAppMutationRootType);
 *
 *     $schema = new GraphQL\Type\Schema($config);
 */
class Schema
{
    /** @var SchemaTypeExtensionNode[] */
    public array $extensionASTNodes = [];
    /** @var SchemaConfig */
    private array|SchemaConfig $config;
    /**
     * Contains currently resolved schema types
     *
     * @var Type[]
     */
    private array $resolvedTypes = [];
    /**
     * Lazily initialised.
     *
     * @var array<string, InterfaceImplementations>
     */
    private array $implementationsMap;
    /**
     * True when $resolvedTypes contain all possible schema types
     *
     * @var bool
     */
    private bool $fullyLoaded = false;
    /** @var Error[] */
    private array $validationErrors;

    /**
     * @param array|SchemaConfig $config
     *
     * @api
     */
    public function __construct(SchemaConfig|array $config)
    {
        if (is_array($config)) {
            $config = SchemaConfig::create($config);
        }

        // If this schema was built from a source known to be valid, then it may be
        // marked with assumeValid to avoid an additional type system validation.
        if ($config->getAssumeValid()) {
            $this->validationErrors = [];
        } else {
            // Otherwise check for common mistakes during construction to produce
            // clear and early error messages.
            Utils::invariant(
                $config instanceof SchemaConfig,
                'Schema constructor expects instance of GraphQL\Type\SchemaConfig or an array with keys: %s; but got: %s',
                implode(
                    ', ',
                    [
                        'query',
                        'mutation',
                        'subscription',
                        'types',
                        'directives',
                        'typeLoader',
                    ]
                ),
                Utils::getVariableType($config)
            );
            Utils::invariant(
                !$config->types || is_array($config->types) || is_callable($config->types),
                '"types" must be array or callable if provided but got: ' . Utils::getVariableType($config->types)
            );
            Utils::invariant(
                $config->directives === null || is_array($config->directives),
                '"directives" must be Array if provided but got: ' . Utils::getVariableType($config->directives)
            );
        }

        $this->config = $config;
        $this->extensionASTNodes = $config->extensionASTNodes;

        if ($config->query !== null) {
            $this->resolvedTypes[$config->query->name] = $config->query;
        }
        if ($config->mutation !== null) {
            $this->resolvedTypes[$config->mutation->name] = $config->mutation;
        }
        if ($config->subscription !== null) {
            $this->resolvedTypes[$config->subscription->name] = $config->subscription;
        }
        if (is_array($this->config->types)) {
            foreach ($this->resolveAdditionalTypes() as $type) {
                if (isset($this->resolvedTypes[$type->name])) {
                    Utils::invariant(
                        $type === $this->resolvedTypes[$type->name],
                        sprintf(
                            'Schema must contain unique named types but contains multiple types named "%s" (see https://webonyx.github.io/graphql-php/type-system/#type-registry).',
                            $type
                        )
                    );
                }
                $this->resolvedTypes[$type->name] = $type;
            }
        }
        $this->resolvedTypes += Type::getStandardTypes() + Introspection::getTypes();

        if ($this->config->typeLoader) {
            return;
        }

        // Perform full scan of the schema
        $this->getTypeMap();
    }

    /**
     * @return Generator
     */
    private function resolveAdditionalTypes(): Generator
    {
        $types = $this->config->types ?? [];

        if (is_callable($types)) {
            $types = $types();
        }

        if (!is_array($types) && !$types instanceof Traversable) {
            throw new InvariantViolation(sprintf(
                'Schema types callable must return array or instance of Traversable but got: %s',
                Utils::getVariableType($types)
            ));
        }

        foreach ($types as $index => $type) {
            $type = self::resolveType($type);
            yield $type;
        }
    }

    /**
     * @param callable():Type|Type $type
     */
    public static function resolveType(callable|Type $type): Type
    {
        if ($type instanceof Type) {
            return $type;
        }

        return $type();
    }

    /**
     * Returns array of all types in this schema. Keys of this array represent type names, values are instances
     * of corresponding type definitions
     *
     * This operation requires full schema scan. Do not use in production environment.
     *
     * @return array<string, Type>
     *
     * @api
     */
    public function getTypeMap(): array
    {
        if (!$this->fullyLoaded) {
            $this->resolvedTypes = $this->collectAllTypes();
            $this->fullyLoaded = true;
        }

        return $this->resolvedTypes;
    }

    /**
     * @return Type[]
     */
    private function collectAllTypes(): array
    {
        $typeMap = [];
        foreach ($this->resolvedTypes as $type) {
            $typeMap = TypeInfo::extractTypes($type, $typeMap);
        }
        foreach ($this->getDirectives() as $directive) {
            if (!($directive instanceof Directive)) {
                continue;
            }

            $typeMap = TypeInfo::extractTypesFromDirectives($directive, $typeMap);
        }
        // When types are set as array they are resolved in constructor
        if (is_callable($this->config->types)) {
            foreach ($this->resolveAdditionalTypes() as $type) {
                $typeMap = TypeInfo::extractTypes($type, $typeMap);
            }
        }

        return $typeMap;
    }

    /**
     * Returns a list of directives supported by this schema
     *
     * @return Directive[]
     *
     * @api
     */
    public function getDirectives(): array
    {
        return $this->config->directives ?? GraphQL::getStandardDirectives();
    }

    /**
     * @param string $operation
     *
     * @return ObjectType|null
     */
    #[Pure] public function getOperationType(string $operation): ObjectType|Type|null
    {
        return match ($operation) {
            'query' => $this->getQueryType(),
            'mutation' => $this->getMutationType(),
            'subscription' => $this->getSubscriptionType(),
            default => null,
        };
    }

    /**
     * Returns schema query type
     *
     * @return \yxorP\app\lib\data\graphQL\Type\Definition\Type|null
     *
     * @api
     */
    public function getQueryType(): ?Type
    {
        return $this->config->query;
    }

    /**
     * Returns schema mutation type
     *
     * @return ObjectType|null
     *
     * @api
     */
    public function getMutationType(): ?Type
    {
        return $this->config->mutation;
    }

    /**
     * Returns schema subscription
     *
     * @return ObjectType|null
     *
     * @api
     */
    public function getSubscriptionType(): ?Type
    {
        return $this->config->subscription;
    }

    /**
     * @return SchemaConfig
     *
     * @api
     */
    public function getConfig(): SchemaConfig|array
    {
        return $this->config;
    }

    public function hasType(string $name): bool
    {
        return $this->getType($name) !== null;
    }

    /**
     * Returns type by its name
     *
     * @api
     */
    public function getType(string $name): ?Type
    {
        if (!isset($this->resolvedTypes[$name])) {
            $type = $this->loadType($name);

            if (!$type) {
                return null;
            }
            $this->resolvedTypes[$name] = self::resolveType($type);
        }

        return $this->resolvedTypes[$name];
    }

    private function loadType(string $typeName): ?Type
    {
        $typeLoader = $this->config->typeLoader;

        if (!isset($typeLoader)) {
            return $this->defaultTypeLoader($typeName);
        }

        $type = $typeLoader($typeName);

        if (!$type instanceof Type) {
            // Unless you know what you're doing, kindly resist the temptation to refactor or simplify this block. The
            // twisty logic here is tuned for performance, and meant to prioritize the "happy path" (the result returned
            // from the type loader is already a Type), and only checks for callable if that fails. If the result is
            // neither a Type nor a callable, then we throw an exception.

            if (is_callable($type)) {
                $type = $type();

                if (!$type instanceof Type) {
                    $this->throwNotAType($type, $typeName);
                }
            } else {
                $this->throwNotAType($type, $typeName);
            }
        }

        if ($type->name !== $typeName) {
            throw new InvariantViolation(
                sprintf('Type loader is expected to return type "%s", but it returned "%s"', $typeName, $type->name)
            );
        }

        return $type;
    }

    private function defaultTypeLoader(string $typeName): ?Type
    {
        // Default type loader simply falls back to collecting all types
        $typeMap = $this->getTypeMap();

        return $typeMap[$typeName] ?? null;
    }

    protected function throwNotAType($type, string $typeName)
    {
        throw new InvariantViolation(
            sprintf(
                'Type loader is expected to return a callable or valid type "%s", but it returned %s',
                $typeName,
                Utils::printSafe($type)
            )
        );
    }

    /**
     * Returns all possible concrete types for given abstract type
     * (implementations for interfaces and members of union type for unions)
     *
     * This operation requires full schema scan. Do not use in production environment.
     *
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\Type $abstractType
     *
     * @return array
     *
     * @api
     */
    public function getPossibleTypes(Type $abstractType): array
    {
        return $abstractType->getTypes();
    }

    /**
     * Returns all types that implement a given interface type.
     *
     * This operations requires full schema scan. Do not use in production environment.
     *
     * @api
     */
    public function getImplementations(InterfaceType $abstractType): InterfaceImplementations
    {
        return $this->collectImplementations()[$abstractType->name];
    }

    /**
     * @return array<string, InterfaceImplementations>
     */
    private function collectImplementations(): array
    {
        if (!isset($this->implementationsMap)) {
            /** @var array<string, array<string, Type>> $foundImplementations */
            $foundImplementations = [];
            foreach ($this->getTypeMap() as $type) {
                if ($type instanceof InterfaceType) {
                    if (!isset($foundImplementations[$type->name])) {
                        $foundImplementations[$type->name] = ['objects' => [], 'interfaces' => []];
                    }

                    foreach ($type->getInterfaces() as $iface) {
                        if (!isset($foundImplementations[$iface->name])) {
                            $foundImplementations[$iface->name] = ['objects' => [], 'interfaces' => []];
                        }
                        $foundImplementations[$iface->name]['interfaces'][] = $type;
                    }
                } elseif ($type instanceof ObjectType) {
                    foreach ($type->getInterfaces() as $iface) {
                        if (!isset($foundImplementations[$iface->name])) {
                            $foundImplementations[$iface->name] = ['objects' => [], 'interfaces' => []];
                        }
                        $foundImplementations[$iface->name]['objects'][] = $type;
                    }
                }
            }
            $this->implementationsMap = array_map(
                static function (array $implementations): InterfaceImplementations {
                    return new InterfaceImplementations($implementations['objects'], $implementations['interfaces']);
                },
                $foundImplementations
            );
        }

        return $this->implementationsMap;
    }

    /**
     * @deprecated as of 14.4.0 use isSubType instead, will be removed in 15.0.0.
     *
     * Returns true if object type is concrete type of given abstract type
     * (implementation for interfaces and members of union type for unions)
     *
     * @api
     * @codeCoverageIgnore
     */
    public function isPossibleType(AbstractType $abstractType, ObjectType $possibleType): bool
    {
        return $this->isSubType($abstractType, $possibleType);
    }

    /**
     * Returns true if the given type is a sub type of the given abstract type.
     *
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\AbstractType $abstractType
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\ImplementingType $maybeSubType
     *
     * @return bool
     * @api
     */
    public function isSubType(AbstractType $abstractType, ImplementingType $maybeSubType): bool
    {
        if ($abstractType instanceof InterfaceType) {
            return $maybeSubType->implementsInterface($abstractType);
        }

        if ($abstractType instanceof UnionType) {
            return $abstractType->isPossibleType($maybeSubType);
        }

        throw new InvalidArgumentException(sprintf('$abstractType must be of type UnionType|InterfaceType got: %s.', get_class($abstractType)));
    }

    /**
     * Returns instance of directive by name
     *
     * @api
     */
    public function getDirective(string $name): ?Directive
    {
        foreach ($this->getDirectives() as $directive) {
            if ($directive->name === $name) {
                return $directive;
            }
        }

        return null;
    }

    #[Pure] public function getAstNode(): ?SchemaDefinitionNode
    {
        return $this->config->getAstNode();
    }

    /**
     * Validates schema.
     *
     * This operation requires full schema scan. Do not use in production environment.
     *
     * @throws InvariantViolation
     *
     * @api
     */
    public function assertValid()
    {
        $errors = $this->validate();

        if ($errors) {
            throw new InvariantViolation(implode("\n\n", $this->validationErrors));
        }

        $internalTypes = Type::getStandardTypes() + Introspection::getTypes();
        foreach ($this->getTypeMap() as $name => $type) {
            if (isset($internalTypes[$name])) {
                continue;
            }

            $type->assertValid();

            // Make sure type loader returns the same instance as registered in other places of schema
            if (!$this->config->typeLoader) {
                continue;
            }

            Utils::invariant(
                $this->loadType($name) === $type,
                sprintf(
                    'Type loader returns different instance for %s than field/argument definitions. Make sure you always return the same instance for the same type name.',
                    $name
                )
            );
        }
    }

    /**
     * Validates schema.
     *
     * This operation requires full schema scan. Do not use in production environment.
     *
     * @return InvariantViolation[]|Error[]
     *
     * @api
     */
    public function validate(): array
    {
        // If this Schema has already been validated, return the previous results.
        if ($this->validationErrors !== null) {
            return $this->validationErrors;
        }
        // Validate the schema, producing a list of errors.
        $context = new SchemaValidationContext($this);
        $context->validateRootTypes();
        $context->validateDirectives();
        $context->validateTypes();

        // Persist the results of validation before returning to ensure validation
        // does not run multiple times for this schema.
        $this->validationErrors = $context->getErrors();

        return $this->validationErrors;
    }
}
