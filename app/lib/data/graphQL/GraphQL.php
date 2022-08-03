<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Executor\ExecutionResult;
use yxorP\app\lib\data\graphQL\Executor\Executor;
use yxorP\app\lib\data\graphQL\Executor\Promise\Adapter\SyncPromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Executor\Promise\Promise;
use yxorP\app\lib\data\graphQL\Executor\Promise\PromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Executor\ReferenceInterfaceExecutor;
use yxorP\app\lib\data\graphQL\Experimental\Executor\CoroutineInterfaceExecutor;
use yxorP\app\lib\data\graphQL\Language\AST\DocumentNode;
use yxorP\app\lib\data\graphQL\Language\Parser;
use yxorP\app\lib\data\graphQL\Language\Source;
use yxorP\app\lib\data\graphQL\Type\Definition\Directive;
use yxorP\app\lib\data\graphQL\Type\Definition\ScalarType;
use yxorP\app\lib\data\graphQL\Type\Definition\Type;
use yxorP\app\lib\data\graphQL\Type\Schema as SchemaType;
use yxorP\app\lib\data\graphQL\Validator\DocumentValidator;
use yxorP\app\lib\data\graphQL\Validator\Rules\QueryComplexity;
use yxorP\app\lib\data\graphQL\Validator\Rules\ValidationRule;
use function array_values;
use function count;
use function trigger_error;
use const E_USER_DEPRECATED;

/**
 * This is the primary facade for fulfilling GraphQL operations.
 * See [related documentation](executing-queries.md).
 */
class GraphQL
{
    /**
     * Executes graphql query.
     *
     * More sophisticated GraphQL servers, such as those which persist queries,
     * may wish to separate the validation and execution phases to a static time
     * tooling step, and a server runtime step.
     *
     * Available options:
     *
     * schema:
     *    The GraphQL type system to use when validating and executing a query.
     * source:
     *    A GraphQL language formatted string representing the requested operation.
     * rootValue:
     *    The value provided as the first argument to resolver functions on the top
     *    level type (e.g. the query object type).
     * contextValue:
     *    The context value is provided as an argument to resolver functions after
     *    field arguments. It is used to pass shared information useful at any point
     *    during executing this query, for example the currently logged in user and
     *    connections to databases or other services.
     * variableValues:
     *    A mapping of variable name to runtime value to use for all variables
     *    defined in the requestString.
     * operationName:
     *    The name of the operation to use if requestString contains multiple
     *    possible operations. Can be omitted if requestString contains only
     *    one operation.
     * fieldResolver:
     *    A resolver function to use when one is not provided by the schema.
     *    If not provided, the default field resolver is used (which looks for a
     *    value on the source value with the field's name).
     * validationRules:
     *    A set of rules for query validation step. Default value is all available rules.
     *    Empty array would allow to skip query validation (may be convenient for persisted
     *    queries which are validated before persisting and assumed valid during execution)
     *
     * @param SchemaType $schema
     * @param string|DocumentNode $source
     * @param mixed|null $rootValue
     * @param mixed|null $contextValue
     * @param array|null $variableValues
     * @param string|null $operationName
     * @param callable|null $fieldResolver
     * @param ValidationRule[] $validationRules
     *
     * @return ExecutionResult
     * @throws \Exception
     * @api
     */
    public static function executeQuery(
        SchemaType          $schema,
        DocumentNode|string $source,
        mixed               $rootValue = null,
        mixed               $contextValue = null,
        array               $variableValues = null,
        ?string             $operationName = null,
        ?callable           $fieldResolver = null,
        ?array              $validationRules = null
    ): ExecutionResult
    {
        $promiseAdapter = new SyncPromiseAdapterInterface();

        $promise = self::promiseToExecute(
            $promiseAdapter,
            $schema,
            $source,
            $rootValue,
            $contextValue,
            $variableValues,
            $operationName,
            $fieldResolver,
            $validationRules
        );

        return $promiseAdapter->wait($promise);
    }

    /**
     * Same as executeQuery(), but requires PromiseAdapter and always returns a Promise.
     * Useful for Async PHP platforms.
     *
     * @param PromiseAdapterInterface $promiseAdapter
     * @param SchemaType $schema
     * @param string|DocumentNode $source
     * @param mixed|null $rootValue
     * @param mixed|null $context
     * @param array|null $variableValues
     * @param string|null $operationName
     * @param callable|null $fieldResolver
     * @param ValidationRule[]|null $validationRules
     *
     * @return Promise
     * @throws \Exception
     * @api
     */
    public static function promiseToExecute(
        PromiseAdapterInterface $promiseAdapter,
        SchemaType              $schema,
        DocumentNode|string     $source,
        mixed                   $rootValue = null,
        mixed                   $context = null,
        array                   $variableValues = null,
        ?string                 $operationName = null,
        ?callable               $fieldResolver = null,
        ?array                  $validationRules = null
    ): Promise
    {
        try {
            if ($source instanceof DocumentNode) {
                $documentNode = $source;
            } else {
                $documentNode = Parser::parse(new Source($source ?? '', 'GraphQL'));
            }

            // FIXME
            if (count($validationRules ?? []) === 0) {
                /** @var QueryComplexity $queryComplexity */
                $queryComplexity = DocumentValidator::getRule(QueryComplexity::class);
                $queryComplexity->setRawVariableValues($variableValues);
            } else {
                foreach ($validationRules as $rule) {
                    if (!($rule instanceof QueryComplexity)) {
                        continue;
                    }

                    $rule->setRawVariableValues($variableValues);
                }
            }

            $validationErrors = DocumentValidator::validate($schema, $documentNode, $validationRules);

            if (count($validationErrors) > 0) {
                return $promiseAdapter->createFulfilled(
                    new ExecutionResult(null, $validationErrors)
                );
            }

            return Executor::promiseToExecute(
                $promiseAdapter,
                $schema,
                $documentNode,
                $rootValue,
                $context,
                $variableValues,
                $operationName,
                $fieldResolver
            );
        } catch (Error $e) {
            return $promiseAdapter->createFulfilled(
                new ExecutionResult(null, [$e])
            );
        }
    }

    /**
     * @param SchemaType $schema
     * @param string|DocumentNode $source
     * @param mixed|null $rootValue
     * @param mixed|null $contextValue
     * @param array|null $variableValues
     * @param string|null $operationName
     * @return Promise|array
     *
     * @codeCoverageIgnore
     * @deprecated Use executeQuery()->toArray() instead
     */
    public static function execute(
        SchemaType          $schema,
        DocumentNode|string $source,
        mixed               $rootValue = null,
        mixed               $contextValue = null,
        array               $variableValues = null,
        ?string             $operationName = null
    ): array|Promise
    {
        trigger_error(
            __METHOD__ . ' is deprecated, use yxorP\app\lib\data\graphQL::executeQuery()->toArray() as a quick replacement',
            E_USER_DEPRECATED
        );

        $promiseAdapter = Executor::getPromiseAdapter();
        try {
            $result = self::promiseToExecute(
                $promiseAdapter,
                $schema,
                $source,
                $rootValue,
                $contextValue,
                $variableValues,
                $operationName
            );
        } catch (\Exception $e) {
        }

        if ($promiseAdapter instanceof SyncPromiseAdapterInterface) {
            $result = $promiseAdapter->wait($result)->toArray();
        } else {
            $result = $result->then(static function (ExecutionResult $r): array {
                return $r->toArray();
            });
        }

        return $result;
    }

    /**
     * @param SchemaType $schema
     * @param string|DocumentNode $source
     * @param mixed|null $rootValue
     * @param mixed|null $contextValue
     * @param array|null $variableValues
     * @param string|null $operationName
     * @return ExecutionResult|Promise
     *
     * @codeCoverageIgnore
     * @deprecated renamed to executeQuery()
     */
    public static function executeAndReturnResult(
        SchemaType          $schema,
        DocumentNode|string $source,
        mixed               $rootValue = null,
        mixed               $contextValue = null,
        array               $variableValues = null,
        ?string             $operationName = null
    ): Promise|ExecutionResult
    {
        trigger_error(
            __METHOD__ . ' is deprecated, use yxorP\app\lib\data\graphQL::executeQuery() as a quick replacement',
            E_USER_DEPRECATED
        );

        $promiseAdapter = Executor::getPromiseAdapter();
        try {
            $result = self::promiseToExecute(
                $promiseAdapter,
                $schema,
                $source,
                $rootValue,
                $contextValue,
                $variableValues,
                $operationName
            );
        } catch (\Exception $e) {
        }

        if ($promiseAdapter instanceof SyncPromiseAdapterInterface) {
            $result = $promiseAdapter->wait($result);
        }

        return $result;
    }

    /**
     * Returns types defined in GraphQL spec
     *
     * @return Type[]
     *
     * @api
     */
    public static function getStandardTypes(): array
    {
        return array_values(Type::getStandardTypes());
    }

    /**
     * Replaces standard types with types from this list (matching by name)
     * Standard types not listed here remain untouched.
     *
     * @param array<string, ScalarType> $types
     *
     * @api
     */
    public static function overrideStandardTypes(array $types)
    {
        Type::overrideStandardTypes($types);
    }

    /**
     * Returns standard validation rules implementing GraphQL spec
     *
     * @return ValidationRule[]
     *
     * @api
     */
    public static function getStandardValidationRules(): array
    {
        return array_values(DocumentValidator::defaultRules());
    }

    /**
     * Set default resolver implementation
     *
     * @api
     */
    public static function setDefaultFieldResolver(callable $fn): void
    {
        Executor::setDefaultFieldResolver($fn);
    }

    public static function setPromiseAdapter(?PromiseAdapterInterface $promiseAdapter = null): void
    {
        Executor::setPromiseAdapter($promiseAdapter);
    }

    /**
     * Experimental: Switch to the new executor
     */
    public static function useExperimentalExecutor()
    {
        trigger_error(
            'Experimental Executor is deprecated and will be removed in the next major version',
            E_USER_DEPRECATED
        );
        Executor::setImplementationFactory([CoroutineInterfaceExecutor::class, 'create']);
    }

    /**
     * Experimental: Switch back to the default executor
     */
    public static function useReferenceExecutor()
    {
        Executor::setImplementationFactory([ReferenceInterfaceExecutor::class, 'create']);
    }

    /**
     * Returns directives defined in GraphQL spec
     *
     * @return Directive[]
     *
     * @codeCoverageIgnore
     * @deprecated Renamed to getStandardDirectives
     *
     */
    public static function getInternalDirectives(): array
    {
        return self::getStandardDirectives();
    }

    /**
     * Returns directives defined in GraphQL spec
     *
     * @return Directive[]
     *
     * @api
     */
    public static function getStandardDirectives(): array
    {
        return array_values(Directive::getInternalDirectives());
    }
}
