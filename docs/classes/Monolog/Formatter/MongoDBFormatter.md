***

# MongoDBFormatter

Formats a record for use with the MongoDBHandler.



* Full name: `\Monolog\Formatter\MongoDBFormatter`
* This class implements:
[`\Monolog\Formatter\FormatterInterface`](./FormatterInterface.md)



## Properties


### exceptionTraceAsString



```php
private $exceptionTraceAsString
```






***

### maxNestingLevel



```php
private $maxNestingLevel
```






***

## Methods


### __construct



```php
public __construct(int $maxNestingLevel = 3, bool $exceptionTraceAsString = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxNestingLevel` | **int** | 0 means infinite nesting, the $record itself is level 1, $record[&#039;context&#039;] is 2 |
| `$exceptionTraceAsString` | **bool** | set to false to log exception traces as a sub documents instead of strings |




***

### format

Formats a log record.

```php
public format(array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | A record to format |


**Return Value:**

The formatted record



***

### formatBatch

Formats a set of log records.

```php
public formatBatch(array $records): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | A set of records to format |


**Return Value:**

The formatted set of records



***

### formatArray



```php
protected formatArray(array $record, mixed $nestingLevel): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |
| `$nestingLevel` | **mixed** |  |




***

### formatObject



```php
protected formatObject(mixed $value, mixed $nestingLevel): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$nestingLevel` | **mixed** |  |




***

### formatException



```php
protected formatException(\Exception $exception, mixed $nestingLevel): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |
| `$nestingLevel` | **mixed** |  |




***

### formatDate



```php
protected formatDate(\DateTime $value, mixed $nestingLevel): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\DateTime** |  |
| `$nestingLevel` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
