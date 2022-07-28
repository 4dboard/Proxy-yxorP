***

# Executor

Implements the "Evaluating requests" section of the GraphQL specification.



* Full name: `\GraphQL\Executor\Executor`



## Properties


### defaultFieldResolver



```php
private static callable $defaultFieldResolver
```



* This property is **static**.


***

### defaultPromiseAdapter



```php
private static \GraphQL\Executor\Promise\PromiseAdapter $defaultPromiseAdapter
```



* This property is **static**.


***

### implementationFactory



```php
private static callable $implementationFactory
```



* This property is **static**.


***

## Methods


### getDefaultFieldResolver



```php
public static getDefaultFieldResolver(): callable
```



* This method is **static**.







***

### setDefaultFieldResolver

Set a custom default resolve function.

```php
public static setDefaultFieldResolver(callable $fieldResolver): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldResolver` | **callable** |  |




***

### getPromiseAdapter



```php
public static getPromiseAdapter(): \GraphQL\Executor\Promise\PromiseAdapter
```



* This method is **static**.







***

### setPromiseAdapter

Set a custom default promise adapter.

```php
public static setPromiseAdapter(?\GraphQL\Executor\Promise\PromiseAdapter $defaultPromiseAdapter = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultPromiseAdapter` | **?\GraphQL\Executor\Promise\PromiseAdapter** |  |




***

### getImplementationFactory



```php
public static getImplementationFactory(): callable
```



* This method is **static**.







***

### setImplementationFactory

Set a custom executor implementation factory.

```php
public static setImplementationFactory(callable $implementationFactory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$implementationFactory` | **callable** |  |




***

### execute

Executes DocumentNode against given $schema.

```php
public static execute(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed|null $rootValue = null, mixed|null $contextValue = null, array|\ArrayAccess|null $variableValues = null, string|null $operationName = null, ?callable $fieldResolver = null): \GraphQL\Executor\ExecutionResult|\GraphQL\Executor\Promise\Promise
```

Always returns ExecutionResult and never throws.
All errors which occur during operation execution are collected in `$result->errors`.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed&#124;null** |  |
| `$contextValue` | **mixed&#124;null** |  |
| `$variableValues` | **array&#124;\ArrayAccess&#124;null** |  |
| `$operationName` | **string&#124;null** |  |
| `$fieldResolver` | **?callable** |  |




***

### promiseToExecute

Same as execute(), but requires promise adapter and returns a promise which is always
fulfilled with an instance of ExecutionResult and never rejected.

```php
public static promiseToExecute(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter, \GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentNode, mixed|null $rootValue = null, mixed|null $contextValue = null, array|null $variableValues = null, string|null $operationName = null, ?callable $fieldResolver = null): \GraphQL\Executor\Promise\Promise
```

Useful for async PHP platforms.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentNode` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$rootValue` | **mixed&#124;null** |  |
| `$contextValue` | **mixed&#124;null** |  |
| `$variableValues` | **array&#124;null** |  |
| `$operationName` | **string&#124;null** |  |
| `$fieldResolver` | **?callable** |  |




***

### defaultFieldResolver

If a resolve function is not given, then a default resolve behavior is used
which takes the property of the root value of the same name as the field
and returns it as the result, or if it's a function, returns the result
of calling that function while passing along args and context.

```php
public static defaultFieldResolver(mixed $objectValue, array&lt;string,mixed&gt; $args, mixed|null $contextValue, \GraphQL\Type\Definition\ResolveInfo $info): mixed|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectValue` | **mixed** |  |
| `$args` | **array<string,mixed>** |  |
| `$contextValue` | **mixed&#124;null** |  |
| `$info` | **\GraphQL\Type\Definition\ResolveInfo** |  |




***


***

