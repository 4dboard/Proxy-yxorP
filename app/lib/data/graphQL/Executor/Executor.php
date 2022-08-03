<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor;

use ArrayAccess;
use Closure;
use yxorP\app\lib\data\graphQL\Executor\Promise\Adapter\SyncPromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Executor\Promise\Promise;
use yxorP\app\lib\data\graphQL\Executor\Promise\PromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Type\Definition\ResolveInfo;
use yxorP\app\lib\data\graphQL\Type\Schema;
use function is_array;
use function is_object;

/**
 * Implements the "Evaluating requests" section of the GraphQL specification.
 */
class Executor
{
    /** @var callable */
    private static $defaultFieldResolver = [self::class, 'defaultFieldResolver'];

    /** @var PromiseAdapterInterface */
    private static PromiseAdapterInterface $defaultPromiseAdapter;

    /** @var callable */
    private static $implementationFactory = [ReferenceInterfaceExecutor::class, 'create'];

    public static function getDefaultFieldResolver(): callable
    {
        return self::$defaultFieldResolver;
    }

    /**
     * Set a custom default resolve function.
     */
    public static function setDefaultFieldResolver(callable $fieldResolver)
    {
        self::$defaultFieldResolver = $fieldResolver;
    }

    /**
     * Set a custom default promise adapter.
     */
    public static function setPromiseAdapter(?PromiseAdapterInterface $defaultPromiseAdapter = null)
    {
        self::$defaultPromiseAdapter = $defaultPromiseAdapter;
    }

    public static function getImplementationFactory(): callable
    {
        return self::$implementationFactory;
    }

    /**
     * Set a custom executor implementation factory.
     */
    public static function setImplementationFactory(callable $implementationFactory)
    {
        self::$implementationFactory = $implementationFactory;
    }

    /**
     * Executes DocumentNode against given $schema.
     *
     * Always returns ExecutionResult and never throws.
     * All errors which occur during operation execution are collected in `$result->errors`.
     *
     * @param mixed|null $rootValue
     * @param mixed|null $contextValue
     * @param ArrayAccess|array|null $variableValues
     * @param string|null $operationName
     *
     * @return ExecutionResult|Promise
     *
     * @api
     */
    public static function execute(
        Schema            $schema,
        DocumentNode      $documentNode,
        mixed             $rootValue = null,
        mixed             $contextValue = null,
        ArrayAccess|array $variableValues = null,
        string            $operationName = null,
        ?callable         $fieldResolver = null
    )
    {
        // TODO: deprecate (just always use SyncAdapter here) and have `promiseToExecute()` for other cases

        $promiseAdapter = static::getPromiseAdapter();

        $result = static::promiseToExecute(
            $promiseAdapter,
            $schema,
            $documentNode,
            $rootValue,
            $contextValue,
            $variableValues,
            $operationName,
            $fieldResolver
        );

        if ($promiseAdapter instanceof SyncPromiseAdapterInterface) {
            $result = $promiseAdapter->wait($result);
        }

        return $result;
    }

    public static function getPromiseAdapter(): PromiseAdapterInterface
    {
        return self::$defaultPromiseAdapter ?? (self::$defaultPromiseAdapter = new SyncPromiseAdapterInterface());
    }

    /**
     * Same as execute(), but requires promise adapter and returns a promise which is always
     * fulfilled with an instance of ExecutionResult and never rejected.
     *
     * Useful for async PHP platforms.
     *
     * @param mixed|null $rootValue
     * @param mixed|null $contextValue
     * @param array|null $variableValues
     * @param string|null $operationName
     *
     * @return Promise
     *
     * @api
     */
    public static function promiseToExecute(
        PromiseAdapterInterface $promiseAdapter,
        Schema                  $schema,
        DocumentNode            $documentNode,
        mixed                   $rootValue = null,
        mixed                   $contextValue = null,
        array                   $variableValues = null,
        string                  $operationName = null,
        ?callable               $fieldResolver = null
    )
    {
        $factory = self::$implementationFactory;

        /** @var ExecutorImplementationInterface $executor */
        $executor = $factory(
            $promiseAdapter,
            $schema,
            $documentNode,
            $rootValue,
            $contextValue,
            $variableValues,
            $operationName,
            $fieldResolver ?? self::$defaultFieldResolver
        );

        return $executor->doExecute();
    }

    /**
     * If a resolve function is not given, then a default resolve behavior is used
     * which takes the property of the root value of the same name as the field
     * and returns it as the result, or if it's a function, returns the result
     * of calling that function while passing along args and context.
     *
     * @param mixed $objectValue
     * @param array<string, mixed> $args
     * @param mixed|null $contextValue
     *
     * @return mixed|null
     */
    public static function defaultFieldResolver(mixed $objectValue, array $args, mixed $contextValue, ResolveInfo $info)
    {
        $fieldName = $info->fieldName;
        $property = null;

        if (is_array($objectValue) || $objectValue instanceof ArrayAccess) {
            if (isset($objectValue[$fieldName])) {
                $property = $objectValue[$fieldName];
            }
        } elseif (is_object($objectValue)) {
            if (isset($objectValue->{$fieldName})) {
                $property = $objectValue->{$fieldName};
            }
        }

        return $property instanceof Closure
            ? $property($objectValue, $args, $contextValue, $info)
            : $property;
    }
}
