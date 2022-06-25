***

# GelfMessageFormatter

Serializes a log message to GELF



* Full name: `\Monolog\Formatter\GelfMessageFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)

**See Also:**

* http://www.graylog2.org/about/gelf - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_MAX_LENGTH`|public| |32766|

## Properties


### systemName



```php
protected string $systemName
```






***

### extraPrefix



```php
protected string $extraPrefix
```






***

### contextPrefix



```php
protected string $contextPrefix
```






***

### maxLength



```php
protected int $maxLength
```






***

### logLevels

Translates Monolog log levels to Graylog2 log priorities.

```php
private $logLevels
```






***

## Methods


### __construct



```php
public __construct(mixed $systemName = null, mixed $extraPrefix = null, mixed $contextPrefix = &#039;ctxt_&#039;, mixed $maxLength = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$systemName` | **mixed** |  |
| `$extraPrefix` | **mixed** |  |
| `$contextPrefix` | **mixed** |  |
| `$maxLength` | **mixed** |  |




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


## Inherited methods


### __construct



```php
public __construct(string $dateFormat = null, int $maxDepth = 9): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFormat` | **string** | The format of the timestamp: one supported by DateTime::format |
| `$maxDepth` | **int** |  |




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

### getMaxDepth



```php
public getMaxDepth(): int
```











***

### setMaxDepth



```php
public setMaxDepth(int $maxDepth): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxDepth` | **int** |  |




***

### normalize



```php
protected normalize(mixed $data, mixed $depth): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$depth` | **mixed** |  |




***

### normalizeException



```php
protected normalizeException(mixed $e): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **mixed** |  |




***

### toJson

Return the JSON representation of a value

```php
protected toJson(mixed $data, bool $ignoreErrors = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$ignoreErrors` | **bool** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
