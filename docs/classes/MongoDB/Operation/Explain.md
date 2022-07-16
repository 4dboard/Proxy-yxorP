***

# Explain

Operation for the explain command.



* Full name: `\MongoDB\Operation\Explain`
* This class implements:
[`\MongoDB\Operation\Executable`](./Executable.md)

**See Also:**

* \MongoDB\Collection::explain() - 
* http://docs.mongodb.org/manual/reference/command/explain/ - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERBOSITY_ALL_PLANS`|public| |&#039;allPlansExecution&#039;|
|`VERBOSITY_EXEC_STATS`|public| |&#039;executionStats&#039;|
|`VERBOSITY_QUERY`|public| |&#039;queryPlanner&#039;|

## Properties


### wireVersionForAggregate



```php
private static int $wireVersionForAggregate
```



* This property is **static**.


***

### wireVersionForDistinct



```php
private static int $wireVersionForDistinct
```



* This property is **static**.


***

### wireVersionForFindAndModify



```php
private static int $wireVersionForFindAndModify
```



* This property is **static**.


***

### databaseName



```php
private string $databaseName
```






***

### explainable



```php
private \MongoDB\Operation\Explainable $explainable
```






***

### options



```php
private array $options
```






***

## Methods


### __construct

Constructs an explain command for explainable operations.

```php
public __construct(string $databaseName, \MongoDB\Operation\Explainable $explainable, array $options = []): mixed
```

Supported options:

* readPreference (MongoDB\Driver\ReadPreference): Read preference.

* session (MongoDB\Driver\Session): Client session.

* typeMap (array): Type map for BSON deserialization. This will be used
  used for the returned command result document.

* verbosity (string): The mode in which the explain command will be run.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$databaseName` | **string** | Database name |
| `$explainable` | **\MongoDB\Operation\Explainable** | Operation to explain |
| `$options` | **array** | Command options |




***

### execute



```php
public execute(\MongoDB\Driver\Server $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **\MongoDB\Driver\Server** |  |




***

### createOptions

Create options for executing the command.

```php
private createOptions(): array
```










**See Also:**

* http://php.net/manual/en/mongodb-driver-server.executecommand.php - 

***

### isFindAndModify



```php
private isFindAndModify(mixed $explainable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$explainable` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
