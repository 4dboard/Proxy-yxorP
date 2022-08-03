<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Error;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;
use ReturnTypeWillChange;
use Throwable;
use Traversable;
use yxorP\app\lib\data\graphQL\Language\AST\Node;
use yxorP\app\lib\data\graphQL\Language\Source;
use yxorP\app\lib\data\graphQL\Language\SourceLocation;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function array_filter;
use function array_map;
use function array_values;
use function count;
use function is_array;
use function iterator_to_array;

/**
 * Describes an Error found during the parse, validate, or
 * execute phases of performing a GraphQL operation. In addition to a message
 * and stack trace, it also includes information about the locations in a
 * GraphQL document and/or execution result that correspond to the Error.
 *
 * When the error was caused by an exception thrown in resolver, original exception
 * is available via `getPrevious()`.
 *
 * Also read related docs on [error handling](error-handling.md)
 *
 * Class extends standard PHP `\Exception`, so all standard methods of base `\Exception` class
 * are available in addition to those listed below.
 */
class Error extends Exception implements JsonSerializable, ClientAwareInterface
{
    const CATEGORY_GRAPHQL = 'graphql';
    const CATEGORY_INTERNAL = 'internal';
    /**
     * An array describing the JSON-path into the execution response which
     * corresponds to this error. Only included for errors during execution.
     *
     * @var array|null
     */
    public $path;
    /**
     * An array of GraphQL AST Nodes corresponding to this error.
     *
     * @var Node[]|null
     */
    public $nodes;
    /** @var string */
    protected $category;
    /** @var array|null */
    protected $extensions;
    /**
     * Lazily initialized.
     *
     * @var SourceLocation[]
     */
    private $locations;
    /**
     * The source GraphQL document for the first location of this error.
     *
     * Note that if this Error represents more than one node, the source may not
     * represent nodes after the first node.
     *
     * @var Source|null
     */
    private $source;
    /** @var int[] */
    private $positions;
    /** @var bool */
    private $isClientSafe;

    /**
     * @param string $message
     * @param Node|Node[]|Traversable|null $nodes
     * @param array $positions
     * @param array|null $path
     * @param Throwable|null $previous
     * @param array $extensions
     */
    public function __construct(
        string    $message = '',
                  $nodes = null,
        ?Source   $source = null,
        array     $positions = [],
        array     $path = null,
        Throwable $previous = null,
        array     $extensions = []
    )
    {
        parent::__construct($message, 0, $previous);

        // Compute list of blame nodes.
        if ($nodes instanceof Traversable) {
            $nodes = iterator_to_array($nodes);
        } elseif ($nodes !== null && !is_array($nodes)) {
            $nodes = [$nodes];
        }

        $this->nodes = $nodes;
        $this->source = $source;
        $this->positions = $positions;
        $this->path = $path;
        $this->extensions = count($extensions) > 0 ? $extensions : (
        $previous instanceof self
            ? $previous->extensions
            : []
        );

        if ($previous instanceof ClientAwareInterface) {
            $this->isClientSafe = $previous->isClientSafe();
            $cat = $previous->getCategory();
            $this->category = $cat === '' || $cat === null ? self::CATEGORY_INTERNAL : $cat;
        } elseif ($previous !== null) {
            $this->isClientSafe = false;
            $this->category = self::CATEGORY_INTERNAL;
        } else {
            $this->isClientSafe = true;
            $this->category = self::CATEGORY_GRAPHQL;
        }
    }

    /**
     * @inheritdoc
     */
    public function isClientSafe()
    {
        return $this->isClientSafe;
    }

    /**
     * @inheritdoc
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Given an arbitrary Error, presumably thrown while attempting to execute a
     * GraphQL operation, produce a new GraphQLError aware of the location in the
     * document responsible for the original Error.
     *
     * @param mixed $error
     * @param Node[]|null $nodes
     * @param array|null $path
     *
     * @return Error
     */
    public static function createLocatedError(mixed $error, array $nodes = null, array $path = null)
    {
        if ($error instanceof self) {
            if ($error->path !== null && $error->nodes !== null && count($error->nodes) !== 0) {
                return $error;
            }

            $nodes = $nodes ?? $error->nodes;
            $path = $path ?? $error->path;
        }

        $source = null;
        $originalError = null;
        $positions = [];
        $extensions = [];

        if ($error instanceof self) {
            $message = $error->getMessage();
            $originalError = $error;
            $nodes = $error->nodes ?? $nodes;
            $source = $error->source;
            $positions = $error->positions;
            $extensions = $error->extensions;
        } elseif ($error instanceof Throwable) {
            $message = $error->getMessage();
            $originalError = $error;
        } else {
            $message = (string)$error;
        }

        return new static(
            $message === '' ? 'An unknown error occurred.' : $message,
            $nodes,
            $source,
            $positions,
            $path,
            $originalError,
            $extensions
        );
    }

    /**
     * @return array
     */
    public static function formatError(Error $error)
    {
        return $error->toSerializableArray();
    }

    /**
     * Returns array representation of error suitable for serialization
     *
     * @return array
     *
     * @throws \Exception
     * @codeCoverageIgnore
     * @deprecated Use FormattedError::createFromException() instead
     */
    #[ArrayShape(['message' => "string", 'extensions' => "mixed", 'path' => "mixed[]|null", 'locations' => "mixed"])] public function toSerializableArray()
    {
        $arr = [
            'message' => $this->getMessage(),
        ];

        $locations = Utils::map(
            $this->getLocations(),
            static function (SourceLocation $loc): array {
                return $loc->toSerializableArray();
            }
        );

        if (count($locations) > 0) {
            $arr['locations'] = $locations;
        }
        if (count($this->path ?? []) > 0) {
            $arr['path'] = $this->path;
        }
        if (count($this->extensions ?? []) > 0) {
            $arr['extensions'] = $this->extensions;
        }

        return $arr;
    }

    /**
     * An array of locations within the source GraphQL document which correspond to this error.
     *
     * Each entry has information about `line` and `column` within source GraphQL document:
     * $location->line;
     * $location->column;
     *
     * Errors during validation often contain multiple locations, for example to
     * point out to field mentioned in multiple fragments. Errors during execution include a
     * single location, the field which produced the error.
     *
     * @return SourceLocation[]
     *
     * @api
     */
    public function getLocations(): array
    {
        if (!isset($this->locations)) {
            $positions = $this->getPositions();
            $source = $this->getSource();
            $nodes = $this->nodes;

            if ($source !== null && count($positions) !== 0) {
                $this->locations = array_map(
                    static function ($pos) use ($source): SourceLocation {
                        return $source->getLocation($pos);
                    },
                    $positions
                );
            } elseif ($nodes !== null && count($nodes) !== 0) {
                $locations = array_filter(
                    array_map(
                        static function ($node): ?SourceLocation {
                            if (isset($node->loc->source)) {
                                return $node->loc->source->getLocation($node->loc->start);
                            }

                            return null;
                        },
                        $nodes
                    )
                );
                $this->locations = array_values($locations);
            } else {
                $this->locations = [];
            }
        }

        return $this->locations;
    }

    /**
     * @return int[]
     */
    public function getPositions(): array
    {
        if (count($this->positions) === 0 && count($this->nodes ?? []) > 0) {
            $positions = array_map(
                static function ($node): ?int {
                    return isset($node->loc) ? $node->loc->start : null;
                },
                $this->nodes
            );

            $positions = array_filter(
                $positions,
                static function ($p): bool {
                    return $p !== null;
                }
            );

            $this->positions = array_values($positions);
        }

        return $this->positions;
    }

    public function getSource(): ?Source
    {
        if ($this->source === null) {
            if (isset($this->nodes[0]) && $this->nodes[0]->loc !== null) {
                $this->source = $this->nodes[0]->loc->source;
            }
        }

        return $this->source;
    }

    /**
     * @return Node[]|null
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Returns an array describing the path from the root value to the field which produced this error.
     * Only included for execution errors.
     *
     * @return array|null
     *
     * @api
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed[] data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toSerializableArray();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return FormattedError::printError($this);
    }
}
