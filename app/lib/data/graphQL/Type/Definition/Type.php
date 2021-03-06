<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;
use ReflectionClass;
use ReturnTypeWillChange;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\TypeDefinitionNodeInterface;
use yxorP\app\lib\data\graphQL\Language\AST\TypeExtensionNodeInterface;
use yxorP\app\lib\data\graphQL\Type\Introspection;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function array_keys;
use function array_merge;
use function assert;
use function implode;
use function in_array;
use function preg_replace;
use function trigger_error;
use const E_USER_DEPRECATED;

/**
 * Registry of standard GraphQL types
 * and a base class for all other types.
 */
abstract class Type extends UnionType implements JsonSerializable, CompositeType, CompositeType, CompositeType, NullableType
{
    public const STRING = 'String';
    public const INT = 'Int';
    public const BOOLEAN = 'Boolean';
    public const FLOAT = 'Float';
    public const ID = 'ID';

    /** @var array<string, ScalarType> */
    protected static $standardTypes;

    /** @var Type[] */
    private static array $builtInTypes;

    /** @var string */
    public $name;

    /** @var string|null */
    public $description;

    /** @var TypeDefinitionNodeInterface|null */
    public $astNode;

    /** @var array */
    public $config;

    /** @var TypeExtensionNodeInterface[] */
    public $extensionASTNodes;

    /**
     * @api
     */
    public static function listOf(Type $wrappedType): ListOfType
    {
        return new ListOfType($wrappedType);
    }

    /**
     * @param callable|NullableType $wrappedType
     *
     * @api
     */
    public static function nonNull($wrappedType): NonNull
    {
        return new NonNull($wrappedType);
    }

    /**
     * Checks if the type is a builtin type
     */
    public static function isBuiltInType(Type $type): bool
    {
        return in_array($type->name, array_keys(self::getAllBuiltInTypes()), true);
    }

    /**
     * Returns all builtin in types including base scalar and
     * introspection types
     *
     * @return Type[]
     */
    public static function getAllBuiltInTypes(): array
    {
        if (self::$builtInTypes === null) {
            self::$builtInTypes = array_merge(
                Introspection::getTypes(),
                self::getStandardTypes()
            );
        }

        return self::$builtInTypes;
    }

    /**
     * Returns all builtin scalar types
     *
     * @return ScalarType[]
     */
    #[ArrayShape([self::ID => "\yxorP\app\lib\data\graphQL\Type\Definition\ScalarType", self::STRING => "\yxorP\app\lib\data\graphQL\Type\Definition\ScalarType", self::FLOAT => "\yxorP\app\lib\data\graphQL\Type\Definition\ScalarType", self::INT => "\yxorP\app\lib\data\graphQL\Type\Definition\ScalarType", self::BOOLEAN => "\yxorP\app\lib\data\graphQL\Type\Definition\ScalarType"])] public static function getStandardTypes(): array
    {
        return [
            self::ID => static::id(),
            self::STRING => static::string(),
            self::FLOAT => static::float(),
            self::INT => static::int(),
            self::BOOLEAN => static::boolean(),
        ];
    }

    /**
     * @api
     */
    public static function id(): ScalarType
    {
        if (!isset(static::$standardTypes[self::ID])) {
            static::$standardTypes[self::ID] = new IDType();
        }

        return static::$standardTypes[self::ID];
    }

    /**
     * @api
     */
    public static function string(): ScalarType
    {
        if (!isset(static::$standardTypes[self::STRING])) {
            static::$standardTypes[self::STRING] = new StringType();
        }

        return static::$standardTypes[self::STRING];
    }

    /**
     * @api
     */
    public static function float(): ScalarType
    {
        if (!isset(static::$standardTypes[self::FLOAT])) {
            static::$standardTypes[self::FLOAT] = new FloatType();
        }

        return static::$standardTypes[self::FLOAT];
    }

    /**
     * @api
     */
    public static function int(): ScalarType
    {
        if (!isset(static::$standardTypes[self::INT])) {
            static::$standardTypes[self::INT] = new IntType();
        }

        return static::$standardTypes[self::INT];
    }

    /**
     * @api
     */
    public static function boolean(): ScalarType
    {
        if (!isset(static::$standardTypes[self::BOOLEAN])) {
            static::$standardTypes[self::BOOLEAN] = new BooleanType();
        }

        return static::$standardTypes[self::BOOLEAN];
    }

    /**
     * @return Type[]
     *
     * @codeCoverageIgnore
     * @deprecated Use method getStandardTypes() instead
     *
     */
    public static function getInternalTypes(): array
    {
        trigger_error(__METHOD__ . ' is deprecated. Use Type::getStandardTypes() instead', E_USER_DEPRECATED);

        return self::getStandardTypes();
    }

    /**
     * @param array<string, ScalarType> $types
     */
    public static function overrideStandardTypes(array $types)
    {
        $standardTypes = self::getStandardTypes();
        foreach ($types as $type) {
            Utils::invariant(
                $type instanceof Type,
                'Expecting instance of %s, got %s',
                self::class,
                Utils::printSafe($type)
            );
            Utils::invariant(
                isset($type->name, $standardTypes[$type->name]),
                'Expecting one of the following names for a standard type: %s, got %s',
                implode(', ', array_keys($standardTypes)),
                Utils::printSafe($type->name ?? null)
            );
            static::$standardTypes[$type->name] = $type;
        }
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function isInputType($type): bool
    {
        return self::getNamedType($type) instanceof InputType;
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function getNamedType($type): ?Type
    {
        if ($type === null) {
            return null;
        }
        while ($type instanceof WrappingType) {
            $type = $type->getWrappedType();
        }

        return $type;
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function isOutputType($type): bool
    {
        return self::getNamedType($type) instanceof OutputType;
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function isLeafType($type): bool
    {
        return $type instanceof LeafType;
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function isCompositeType($type): bool
    {
        return $type instanceof CompositeType;
    }

    /**
     * @param Type $type
     *
     * @api
     */
    public static function isAbstractType($type): bool
    {
        return $type instanceof AbstractType;
    }

    /**
     * @param mixed $type
     */
    public static function assertType($type): Type
    {
        assert($type instanceof Type, new InvariantViolation('Expected ' . Utils::printSafe($type) . ' to be a GraphQL type.'));

        return $type;
    }

    /**
     * @api
     */
    public static function getNullableType(Type $type): Type
    {
        return $type instanceof NonNull
            ? $type->getWrappedType()
            : $type;
    }

    /**
     * @throws \yxorP\app\lib\data\graphQL\Error\Error
     */
    public function assertValid()
    {
        Utils::assertValidName($this->name);
    }

    /**
     * @return string
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): string
    {
        return $this->toString();
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return string|null
     */
    protected function tryInferName(): ?string
    {
        if ($this->name) {
            return $this->name;
        }

        // If class is extended - infer name from className
        // QueryType -> Type
        // SomeOtherType -> SomeOther
        $tmp = new ReflectionClass($this);
        $name = $tmp->getShortName();

        if ($tmp->getNamespaceName() !== __NAMESPACE__) {
            return preg_replace('~Type$~', '', $name);
        }

        return null;
    }
}
