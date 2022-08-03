<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Type\Definition;

use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Language\AST\DirectiveDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\DirectiveLocation;
use function array_key_exists;
use function is_array;

class Directive
{
    public const DEFAULT_DEPRECATION_REASON = 'No longer supported';

    public const INCLUDE_NAME = 'include';
    public const IF_ARGUMENT_NAME = 'if';
    public const SKIP_NAME = 'skip';
    public const DEPRECATED_NAME = 'deprecated';
    public const REASON_ARGUMENT_NAME = 'reason';

    /** @var Directive[]|null */
    public static ?array $internalDirectives;

    // Schema Definitions

    /** @var string */
    public mixed $name;

    /** @var string|null */
    public mixed $description;

    /** @var FieldArgument[] */
    public array $args = [];

    /** @var bool */
    public mixed $isRepeatable;

    /** @var string[] */
    public array $locations;

    /** @var DirectiveDefinitionNode|null */
    public mixed $astNode;

    /** @var array */
    public array $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        if (!isset($config['name'])) {
            throw new InvariantViolation('Directive must be named.');
        }
        $this->name = $config['name'];

        $this->description = $config['description'] ?? null;

        if (isset($config['args'])) {
            $args = [];
            foreach ($config['args'] as $name => $arg) {
                if (is_array($arg)) {
                    $args[] = new FieldArgument($arg + ['name' => $name]);
                } else {
                    $args[] = $arg;
                }
            }
            $this->args = $args;
        }

        if (!isset($config['locations']) || !is_array($config['locations'])) {
            throw new InvariantViolation('Must provide locations for directive.');
        }
        $this->locations = $config['locations'];

        $this->isRepeatable = $config['isRepeatable'] ?? false;
        $this->astNode = $config['astNode'] ?? null;

        $this->config = $config;
    }

    /**
     * @return Directive
     */
    public static function includeDirective(): Directive
    {
        $internal = self::getInternalDirectives();

        return $internal['include'];
    }

    /**
     * @return Directive[]
     */
    public static function getInternalDirectives(): array
    {
        if (self::$internalDirectives === null) {
            self::$internalDirectives = [
                'include' => new self([
                    'name' => self::INCLUDE_NAME,
                    'description' => 'Directs the executor to include this field or fragment only when the `if` argument is true.',
                    'locations' => [
                        DirectiveLocation::FIELD,
                        DirectiveLocation::FRAGMENT_SPREAD,
                        DirectiveLocation::INLINE_FRAGMENT,
                    ],
                    'args' => [new FieldArgument([
                        'name' => self::IF_ARGUMENT_NAME,
                        'type' => Type::nonNull(Type::boolean()),
                        'description' => 'Included when true.',
                    ]),
                    ],
                ]),
                'skip' => new self([
                    'name' => self::SKIP_NAME,
                    'description' => 'Directs the executor to skip this field or fragment when the `if` argument is true.',
                    'locations' => [
                        DirectiveLocation::FIELD,
                        DirectiveLocation::FRAGMENT_SPREAD,
                        DirectiveLocation::INLINE_FRAGMENT,
                    ],
                    'args' => [new FieldArgument([
                        'name' => self::IF_ARGUMENT_NAME,
                        'type' => Type::nonNull(Type::boolean()),
                        'description' => 'Skipped when true.',
                    ]),
                    ],
                ]),
                'deprecated' => new self([
                    'name' => self::DEPRECATED_NAME,
                    'description' => 'Marks an element of a GraphQL schema as no longer supported.',
                    'locations' => [
                        DirectiveLocation::FIELD_DEFINITION,
                        DirectiveLocation::ENUM_VALUE,
                    ],
                    'args' => [new FieldArgument([
                        'name' => self::REASON_ARGUMENT_NAME,
                        'type' => Type::string(),
                        'description' =>
                            'Explains why this element was deprecated, usually also including a ' .
                            'suggestion for how to access supported similar data. Formatted using ' .
                            'the Markdown syntax (as specified by [CommonMark](https://commonmark.org/).',
                        'defaultValue' => self::DEFAULT_DEPRECATION_REASON,
                    ]),
                    ],
                ]),
            ];
        }

        return self::$internalDirectives;
    }

    /**
     * @return Directive
     */
    public static function skipDirective(): Directive
    {
        $internal = self::getInternalDirectives();

        return $internal['skip'];
    }

    /**
     * @return Directive
     */
    public static function deprecatedDirective(): Directive
    {
        $internal = self::getInternalDirectives();

        return $internal['deprecated'];
    }

    /**
     * @param Directive $directive
     * @return bool
     */
    public static function isSpecifiedDirective(Directive $directive): bool
    {
        return array_key_exists($directive->name, self::getInternalDirectives());
    }
}
