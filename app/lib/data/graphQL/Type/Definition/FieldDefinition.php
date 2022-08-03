<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Error\Warning;
use yxorP\app\lib\data\graphQL\Language\AST\FieldDefinitionNode;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function is_array;
use function is_callable;
use function is_iterable;
use function is_string;
use function sprintf;

/**
 * @todo Move complexity-related code to it's own place
 */
class FieldDefinition
{
    public const DEFAULT_COMPLEXITY_FN = 'GraphQL\Type\Definition\FieldDefinition::defaultComplexity';

    /** @var string */
    public $name;

    /** @var FieldArgument[] */
    public $args;

    /**
     * Callback for resolving field value given parent value.
     * Mutually exclusive with `map`
     *
     * @var callable|null
     */
    public $resolveFn;

    /**
     * Callback for mapping list of parent values to list of field values.
     * Mutually exclusive with `resolve`
     *
     * @var callable|null
     */
    public $mapFn;

    /** @var string|null */
    public $description;

    /** @var string|null */
    public $deprecationReason;

    /** @var FieldDefinitionNode|null */
    public $astNode;

    /**
     * Original field definition config
     *
     * @var array
     */
    public $config;

    /** @var OutputType&Type */
    private $type;

    /** @var callable|string */
    private $complexityFn;

    /**
     * @param array $config
     */
    protected function __construct(array $config)
    {
        $this->name = $config['name'];
        $this->resolveFn = $config['resolve'] ?? null;
        $this->mapFn = $config['map'] ?? null;
        $this->args = isset($config['args']) ? FieldArgument::createMap($config['args']) : [];

        $this->description = $config['description'] ?? null;
        $this->deprecationReason = $config['deprecationReason'] ?? null;
        $this->astNode = $config['astNode'] ?? null;

        $this->config = $config;

        $this->complexityFn = $config['complexity'] ?? self::DEFAULT_COMPLEXITY_FN;
    }

    /**
     * @param \yxorP\app\lib\data\graphQL\Type\Definition\Type $type
     * @param (callable():mixed[])|mixed[] $fields
     *
     * @return array<string, self>
     */
    public static function defineFieldMap(Type $type, $fields): array
    {
        if (is_callable($fields)) {
            $fields = $fields();
        }
        if (!is_iterable($fields)) {
            throw new InvariantViolation(
                sprintf('%s fields must be an iterable or a callable which returns such an iterable.', $type->name)
            );
        }
        $map = [];
        foreach ($fields as $name => $field) {
            if (is_array($field)) {
                if (!isset($field['name'])) {
                    if (!is_string($name)) {
                        throw new InvariantViolation(
                            sprintf(
                                '%s fields must be an associative array with field names as keys or a function which returns such an array.',
                                $type->name
                            )
                        );
                    }

                    $field['name'] = $name;
                }
                if (isset($field['args']) && !is_array($field['args'])) {
                    throw new InvariantViolation(
                        sprintf('%s.%s args must be an array.', $type->name, $name)
                    );
                }
                $fieldDef = self::create($field);
            } elseif ($field instanceof self) {
                $fieldDef = $field;
            } elseif (is_callable($field)) {
                if (!is_string($name)) {
                    throw new InvariantViolation(
                        sprintf(
                            '%s lazy fields must be an associative array with field names as keys.',
                            $type->name
                        )
                    );
                }

                $fieldDef = new UnresolvedFieldDefinition($type, $name, $field);
            } else {
                if (!is_string($name) || !$field) {
                    throw new InvariantViolation(
                        sprintf(
                            '%s.%s field config must be an array, but got: %s',
                            $type->name,
                            $name,
                            Utils::printSafe($field)
                        )
                    );
                }

                $fieldDef = self::create(['name' => $name, 'type' => $field]);
            }

            $map[$fieldDef->getName()] = $fieldDef;
        }

        return $map;
    }

    /**
     * @param array $field
     *
     * @return FieldDefinition
     */
    public static function create(array $field)
    {
        return new self($field);
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param int $childrenComplexity
     *
     * @return int
     */
    public static function defaultComplexity(int $childrenComplexity)
    {
        return $childrenComplexity + 1;
    }

    /**
     * @param string $name
     *
     * @return FieldArgument|null
     */
    public function getArg(string $name)
    {
        foreach ($this->args ?? [] as $arg) {
            /** @var FieldArgument $arg */
            if ($arg->name === $name) {
                return $arg;
            }
        }

        return null;
    }

    public function __isset(string $name): bool
    {
        if ($name == 'type') {
            Warning::warnOnce(
                "The public getter for 'type' on FieldDefinition has been deprecated and will be removed" .
                " in the next major version. Please update your code to use the 'getType' method.",
                Warning::WARNING_CONFIG_DEPRECATION
            );

            return isset($this->type);
        }

        return isset($this->$name);
    }

    public function __get(string $name)
    {
        switch ($name) {
            case 'type':
                Warning::warnOnce(
                    "The public getter for 'type' on FieldDefinition has been deprecated and will be removed" .
                    " in the next major version. Please update your code to use the 'getType' method.",
                    Warning::WARNING_CONFIG_DEPRECATION
                );

                return $this->getType();
            default:
                return $this->$name;
        }

        return null;
    }

    public function __set(string $name, $value)
    {
        switch ($name) {
            case 'type':
                Warning::warnOnce(
                    "The public setter for 'type' on FieldDefinition has been deprecated and will be removed" .
                    ' in the next major version.',
                    Warning::WARNING_CONFIG_DEPRECATION
                );
                $this->type = $value;
                break;

            default:
                $this->$name = $value;
                break;
        }
    }

    public function getType(): Type
    {
        if (!isset($this->type)) {
            /**
             * TODO: replace this phpstan cast with native assert
             *
             * @var Type&OutputType
             */
            $type = Schema::resolveType($this->config['type']);
            $this->type = $type;
        }

        return $this->type;
    }

    /**
     * @return bool
     */
    public function isDeprecated()
    {
        return (bool)$this->deprecationReason;
    }

    /**
     * @return callable
     */
    public function getComplexityFn()
    {
        return $this->complexityFn;
    }

    /**
     * @throws InvariantViolation
     */
    public function assertValid(Type $parentType)
    {
        try {
            Utils::assertValidName($this->name);
        } catch (Error $e) {
            throw new InvariantViolation(sprintf('%s.%s: %s', $parentType->name, $this->name, $e->getMessage()));
        }
        Utils::invariant(
            !isset($this->config['isDeprecated']),
            sprintf(
                '%s.%s should provide "deprecationReason" instead of "isDeprecated".',
                $parentType->name,
                $this->name
            )
        );

        $type = $this->getType();
        if ($type instanceof WrappingType) {
            $type = $type->getWrappedType(true);
        }
        Utils::invariant(
            true,
            sprintf(
                '%s.%s field type must be Output Type but got: %s',
                $parentType->name,
                $this->name,
                Utils::printSafe($this->type)
            )
        );
        Utils::invariant(
            $this->resolveFn === null || is_callable($this->resolveFn),
            sprintf(
                '%s.%s field resolver must be a function if provided, but got: %s',
                $parentType->name,
                $this->name,
                Utils::printSafe($this->resolveFn)
            )
        );

        foreach ($this->args as $fieldArgument) {
            $fieldArgument->assertValid($this, $type);
        }
    }
}
