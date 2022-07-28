***

# ServerConfig

Server configuration class.

Could be passed directly to server constructor. List of options accepted by **create** method is
[described in docs](executing-queries.md#server-configuration-options).

Usage example:

    $config = GraphQL\Server\ServerConfig::create()
        ->setSchema($mySchema)
        ->setContext($myContext);

    $server = new GraphQL\Server\StandardServer($config);

* Full name: `\GraphQL\Server\ServerConfig`



## Properties


### schema



```php
private \GraphQL\Type\Schema|null $schema
```






***

### context



```php
private mixed|callable $context
```






***

### rootValue



```php
private mixed|callable $rootValue
```






***

### errorFormatter



```php
private callable|null $errorFormatter
```






***

### errorsHandler



```php
private callable|null $errorsHandler
```






***

### debugFlag



```php
private int $debugFlag
```






***

### queryBatching



```php
private bool $queryBatching
```






***

### validationRules



```php
private \GraphQL\Validator\Rules\ValidationRule[]|callable|null $validationRules
```






***

### fieldResolver



```php
private callable|null $fieldResolver
```






***

### promiseAdapter



```php
private \GraphQL\Executor\Promise\PromiseAdapter|null $promiseAdapter
```






***

### persistentQueryLoader



```php
private callable|null $persistentQueryLoader
```






***

## Methods


### create

Converts an array of options to instance of ServerConfig
(or just returns empty config when array is not passed).

```php
public static create(array $config = []): \GraphQL\Server\ServerConfig
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### setSchema



```php
public setSchema(\GraphQL\Type\Schema $schema): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |




***

### setContext



```php
public setContext(mixed|callable $context): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **mixed&#124;callable** |  |




***

### setRootValue



```php
public setRootValue(mixed|callable $rootValue): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rootValue` | **mixed&#124;callable** |  |




***

### setErrorFormatter

Expects function(Throwable $e) : array

```php
public setErrorFormatter(callable $errorFormatter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorFormatter` | **callable** |  |




***

### setErrorsHandler

Expects function(array $errors, callable $formatter) : array

```php
public setErrorsHandler(callable $handler): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |




***

### setValidationRules

Set validation rules for this server.

```php
public setValidationRules(\GraphQL\Validator\Rules\ValidationRule[]|callable|null $validationRules): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$validationRules` | **\GraphQL\Validator\Rules\ValidationRule[]&#124;callable&#124;null** |  |




***

### setFieldResolver



```php
public setFieldResolver(callable $fieldResolver): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldResolver` | **callable** |  |




***

### setPersistentQueryLoader

Expects function($queryId, OperationParams $params) : string|DocumentNode

```php
public setPersistentQueryLoader(callable $persistentQueryLoader): self
```

This function must return query string or valid DocumentNode.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistentQueryLoader` | **callable** |  |




***

### setDebugFlag

Set response debug flags.

```php
public setDebugFlag(int $debugFlag = DebugFlag::INCLUDE_DEBUG_MESSAGE): self
```

 @see \GraphQL\Error\DebugFlag class for a list of all available flags






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debugFlag` | **int** |  |




***

### setQueryBatching

Allow batching queries (disabled by default)

```php
public setQueryBatching(bool $enableBatching): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enableBatching` | **bool** |  |




***

### setPromiseAdapter



```php
public setPromiseAdapter(\GraphQL\Executor\Promise\PromiseAdapter $promiseAdapter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$promiseAdapter` | **\GraphQL\Executor\Promise\PromiseAdapter** |  |




***

### getContext



```php
public getContext(): mixed|callable
```











***

### getRootValue



```php
public getRootValue(): mixed|callable
```











***

### getSchema



```php
public getSchema(): \GraphQL\Type\Schema|null
```











***

### getErrorFormatter



```php
public getErrorFormatter(): callable|null
```











***

### getErrorsHandler



```php
public getErrorsHandler(): callable|null
```











***

### getPromiseAdapter



```php
public getPromiseAdapter(): \GraphQL\Executor\Promise\PromiseAdapter|null
```











***

### getValidationRules



```php
public getValidationRules(): \GraphQL\Validator\Rules\ValidationRule[]|callable|null
```











***

### getFieldResolver



```php
public getFieldResolver(): callable|null
```











***

### getPersistentQueryLoader



```php
public getPersistentQueryLoader(): callable|null
```











***

### getDebugFlag



```php
public getDebugFlag(): int
```











***

### getQueryBatching



```php
public getQueryBatching(): bool
```











***


***

