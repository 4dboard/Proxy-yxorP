<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor;

use yxorP\app\lib\data\graphQL\Error\Error;
use yxorP\app\lib\data\graphQL\Executor\Promise\PromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Language\AST\FragmentDefinitionNode;
use yxorP\app\lib\data\graphQL\Language\AST\OperationDefinitionNode;
use yxorP\app\lib\data\graphQL\Type\Schema;

/**
 * Data that must be available at all points during query execution.
 *
 * Namely, schema of the type system that is currently executing,
 * and the fragments defined in the query document.
 *
 * @internal
 */
class ExecutionContext
{
    /** @var Schema */
    public Schema $schema;

    /** @var FragmentDefinitionNode[] */
    public array $fragments;

    /** @var mixed */
    public mixed $rootValue;

    /** @var mixed */
    public mixed $contextValue;

    /** @var OperationDefinitionNode */
    public OperationDefinitionNode $operation;

    /** @var array */
    public array $variableValues;

    /** @var callable */
    public $fieldResolver;

    /** @var Error[] */
    public array $errors;

    /** @var PromiseAdapterInterface */
    public PromiseAdapterInterface $promiseAdapter;

    public function __construct(
        $schema,
        $fragments,
        $rootValue,
        $contextValue,
        $operation,
        $variableValues,
        $errors,
        $fieldResolver,
        $promiseAdapter
    )
    {
        $this->schema = $schema;
        $this->fragments = $fragments;
        $this->rootValue = $rootValue;
        $this->contextValue = $contextValue;
        $this->operation = $operation;
        $this->variableValues = $variableValues;
        $this->errors = $errors ?? [];
        $this->fieldResolver = $fieldResolver;
        $this->promiseAdapter = $promiseAdapter;
    }

    public function addError(Error $error): static
    {
        $this->errors[] = $error;

        return $this;
    }
}
