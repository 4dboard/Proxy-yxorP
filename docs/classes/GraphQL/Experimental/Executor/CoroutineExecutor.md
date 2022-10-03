***

# CoroutineExecutor





* Full name: `\GraphQL\Experimental\Executor\CoroutineExecutor`
* This class implements:
[`\GraphQL\Experimental\Executor\Runtime`](./Runtime.md), [`\GraphQL\Executor\ExecutorImplementation`](../../Executor/ExecutorImplementation.md)



## Properties


### undefined



```php
private static object $undefined
```



* This property is **static**.


***

### schema



```php
private \GraphQL\Type\Schema $schema
```






***

### fieldResolver



```php
private callable $fieldResolver
```






***

### promiseAdapter



```php
private \GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter
```






***

### rootValue



```php
private mixed|null $rootValue
```






***

### contextValue



```php
private mixed|null $contextValue
```






***

### rawVariableValues



```php
private mixed|null $rawVariableValues
```






***

### variableValues



```php
private mixed|null $variableValues
```






***

### documentNode



```php
private \GraphQL\Language\AST\DocumentNode $documentNode
```






***

### operationName



```php
private string|null $operationName
```






***

### collector



```php
private \GraphQL\Experimental\Executor\Collector|null $collector
```






***

### errors



```php
private \GraphQL\Error\Error[] $errors
```






***

### queue



```php
private \SplQueue $queue
```






***

### schedule



```php
private \SplQueue $schedule
```






***

### rootResult



```php
private \stdClass|null $rootResult
```






***

### pending



```php
private int|null $pending
```






***

### doResolve



```php
private callable $doResolve
```






***

## Methods


### __construct



```php
public __construct(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed $rootValue, mixed $contextValue, mixed $rawVariableValues, ?string $operationName, callable $fieldResolver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$rawVariableValues` | **mixed** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **callable** |  |




***

### create



```php
public static create(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed $rootValue, mixed $contextValue, mixed $variableValues, ?string $operationName, callable $fieldResolver): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed** |  |
| `$contextValue` | **mixed** |  |
| `$variableValues` | **mixed** |  |
| `$operationName` | **?string** |  |
| `$fieldResolver` | **callable** |  |




***

### resultToArray



```php
private static resultToArray(mixed $value, mixed $emptyObjectAsStdClass = true): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$emptyObjectAsStdClass` | **mixed** |  |




***

### doExecute

Returns promise of {@link ExecutionResult}. Promise should always resolve, never reject.

```php
public doExecute(): \GraphQL\Executor\Promise\Promise
```











***

### finishExecute



```php
private finishExecute(object|null $value, \GraphQL\Error\Error[] $errors): \GraphQL\Executor\ExecutionResult
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **object&#124;null** |  |
| `$errors` | **\GraphQL\Error\Error[]** |  |




***

### run



```php
private run(): mixed
```











***

### done



```php
private done(): mixed
```











***

### spawn



```php
private spawn(\GraphQL\Experimental\Executor\CoroutineContext $ctx): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |




***

### findFieldDefinition



```php
private findFieldDefinition(\GraphQL\Experimental\Executor\CoroutineContext $ctx): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |




***

### completeValueFast



```php
private completeValueFast(\GraphQL\Experimental\Executor\CoroutineContext $ctx, \GraphQL\Type\Definition\Type $type, mixed $value, string[] $path, mixed& $returnValue): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$value` | **mixed** |  |
| `$path` | **string[]** |  |
| `$returnValue` | **mixed** |  |




***

### completeValue



```php
private completeValue(\GraphQL\Experimental\Executor\CoroutineContext $ctx, \GraphQL\Type\Definition\Type $type, mixed $value, string[] $path, string[]|null $nullFence): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$value` | **mixed** |  |
| `$path` | **string[]** |  |
| `$nullFence` | **string[]&#124;null** |  |




***

### mergeSelectionSets



```php
private mergeSelectionSets(\GraphQL\Experimental\Executor\CoroutineContext $ctx): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |




***

### resolveTypeSlow



```php
private resolveTypeSlow(\GraphQL\Experimental\Executor\CoroutineContext $ctx, mixed $value, \GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\UnionType $abstractType): \Generator|\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\Type|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ctx` | **\GraphQL\Experimental\Executor\CoroutineContext** |  |
| `$value` | **mixed** |  |
| `$abstractType` | **\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\UnionType** |  |




***

### isPromise



```php
private isPromise(mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***

