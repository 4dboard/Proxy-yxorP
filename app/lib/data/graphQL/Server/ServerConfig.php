<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Server;

use yxorP\app\lib\data\graphQL\Error\DebugFlag;
use yxorP\app\lib\data\graphQL\Error\InvariantViolation;
use yxorP\app\lib\data\graphQL\Executor\Promise\PromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Type\Schema;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use yxorP\app\lib\data\graphQL\Validator\Rules\ValidationRule;
use function is_array;
use function is_callable;
use function method_exists;
use function sprintf;
use function ucfirst;

/**
 * Server configuration class.
 * Could be passed directly to server constructor. List of options accepted by **create** method is
 * [described in docs](executing-queries.md#server-configuration-options).
 *
 * Usage example:
 *
 *     $config = GraphQL\Server\ServerConfig::create()
 *         ->setSchema($mySchema)
 *         ->setContext($myContext);
 *
 *     $server = new GraphQL\Server\StandardServer($config);
 */
class ServerConfig
{
    /** @var Schema|null */
    private ?Schema $schema;
    /** @var mixed|callable */
    private $context;
    /** @var mixed|callable */
    private $rootValue;
    /** @var callable|null */
    private $errorFormatter;
    /** @var callable|null */
    private $errorsHandler;
    /** @var int */
    private int $debugFlag = DebugFlag::NONE;
    /** @var bool */
    private bool $queryBatching = false;
    /** @var ValidationRule[]|callable|null */
    private $validationRules;
    /** @var callable|null */
    private $fieldResolver;
    /** @var PromiseAdapterInterface|null */
    private ?PromiseAdapterInterface $promiseAdapter;
    /** @var callable|null */
    private $persistentQueryLoader;

    /**
     * Converts an array of options to instance of ServerConfig
     * (or just returns empty config when array is not passed).
     *
     * @param array $config
     *
     * @return ServerConfig
     *
     * @api
     */
    public static function create(array $config = []): ServerConfig
    {
        $instance = new static();
        foreach ($config as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (!method_exists($instance, $method)) {
                throw new InvariantViolation(sprintf('Unknown server config option "%s"', $key));
            }
            $instance->$method($value);
        }

        return $instance;
    }

    /**
     * @return mixed
     */
    public function getContext(): mixed
    {
        return $this->context;
    }

    /**
     * @param mixed|callable $context
     *
     * @return self
     *
     * @api
     */
    public function setContext(mixed $context): static
    {
        $this->context = $context;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRootValue(): mixed
    {
        return $this->rootValue;
    }

    /**
     * @param mixed|callable $rootValue
     *
     * @return self
     *
     * @api
     */
    public function setRootValue(mixed $rootValue): static
    {
        $this->rootValue = $rootValue;

        return $this;
    }

    /**
     * @return Schema|null
     */
    public function getSchema(): ?Schema
    {
        return $this->schema;
    }

    /**
     * @param Schema $schema
     * @return self
     *
     * @api
     */
    public function setSchema(Schema $schema): static
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return callable|null
     */
    public function getErrorFormatter(): ?callable
    {
        return $this->errorFormatter;
    }

    /**
     * Expects function(Throwable $e) : array
     *
     * @param callable $errorFormatter
     * @return self
     *
     * @api
     */
    public function setErrorFormatter(callable $errorFormatter): static
    {
        $this->errorFormatter = $errorFormatter;

        return $this;
    }

    /**
     * @return callable|null
     */
    public function getErrorsHandler(): ?callable
    {
        return $this->errorsHandler;
    }

    /**
     * Expects function(array $errors, callable $formatter) : array
     *
     * @param callable $handler
     * @return self
     *
     * @api
     */
    public function setErrorsHandler(callable $handler): static
    {
        $this->errorsHandler = $handler;

        return $this;
    }

    /**
     * @return PromiseAdapterInterface|null
     */
    public function getPromiseAdapter(): ?PromiseAdapterInterface
    {
        return $this->promiseAdapter;
    }

    /**
     * @param PromiseAdapterInterface $promiseAdapter
     * @return self
     *
     * @api
     */
    public function setPromiseAdapter(PromiseAdapterInterface $promiseAdapter): static
    {
        $this->promiseAdapter = $promiseAdapter;

        return $this;
    }

    /**
     * @return ValidationRule[]|callable|null
     */
    public function getValidationRules(): callable|array|null
    {
        return $this->validationRules;
    }

    /**
     * Set validation rules for this server.
     *
     * @param callable|ValidationRule[]|null $validationRules
     *
     * @return self
     *
     * @api
     */
    public function setValidationRules(callable|array|null $validationRules): static
    {
        if (!is_callable($validationRules) && !is_array($validationRules) && $validationRules !== null) {
            throw new InvariantViolation(
                'Server config expects array of validation rules or callable returning such array, but got ' .
                Utils::printSafe($validationRules)
            );
        }

        $this->validationRules = $validationRules;

        return $this;
    }

    /**
     * @return callable|null
     */
    public function getFieldResolver(): ?callable
    {
        return $this->fieldResolver;
    }

    /**
     * @param callable $fieldResolver
     * @return self
     *
     * @api
     */
    public function setFieldResolver(callable $fieldResolver): static
    {
        $this->fieldResolver = $fieldResolver;

        return $this;
    }

    /**
     * @return callable|null
     */
    public function getPersistentQueryLoader(): ?callable
    {
        return $this->persistentQueryLoader;
    }

    /**
     * Expects function($queryId, OperationParams $params) : string|DocumentNode
     *
     * This function must return query string or valid DocumentNode.
     *
     * @param callable $persistentQueryLoader
     * @return self
     *
     * @api
     */
    public function setPersistentQueryLoader(callable $persistentQueryLoader): static
    {
        $this->persistentQueryLoader = $persistentQueryLoader;

        return $this;
    }

    public function getDebugFlag(): int
    {
        return $this->debugFlag;
    }

    /**
     * Set response debug flags. @see \GraphQL\Error\DebugFlag class for a list of all available flags
     *
     * @api
     */
    public function setDebugFlag(int $debugFlag = DebugFlag::INCLUDE_DEBUG_MESSAGE): self
    {
        $this->debugFlag = $debugFlag;

        return $this;
    }

    /**
     * @return bool
     */
    public function getQueryBatching(): bool
    {
        return $this->queryBatching;
    }

    /**
     * Allow batching queries (disabled by default)
     *
     * @api
     */
    public function setQueryBatching(bool $enableBatching): self
    {
        $this->queryBatching = $enableBatching;

        return $this;
    }
}
