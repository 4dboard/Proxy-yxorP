***

# NormalizerFormatter

Normalizes incoming records to remove objects/resources so it's easier to dump to various targets



* Full name: `\Monolog\Formatter\NormalizerFormatter`
* This class implements:
[`\Monolog\Formatter\FormatterInterface`](./FormatterInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SIMPLE_DATE`|public| |&quot;Y-m-d H:i:s&quot;|

## Properties


### dateFormat



```php
protected $dateFormat
```






***

### maxDepth



```php
protected $maxDepth
```






***

## Methods


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
