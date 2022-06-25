***

# LineFormatter

Formats incoming records into a one-line string

This is especially useful for logging to files

* Full name: `\Monolog\Formatter\LineFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SIMPLE_FORMAT`|public| |&quot;[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n&quot;|

## Properties


### format



```php
protected $format
```






***

### allowInlineLineBreaks



```php
protected $allowInlineLineBreaks
```






***

### ignoreEmptyContextAndExtra



```php
protected $ignoreEmptyContextAndExtra
```






***

### includeStacktraces



```php
protected $includeStacktraces
```






***

## Methods


### __construct



```php
public __construct(string $format = null, string $dateFormat = null, bool $allowInlineLineBreaks = false, bool $ignoreEmptyContextAndExtra = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format of the message |
| `$dateFormat` | **string** | The format of the timestamp: one supported by DateTime::format |
| `$allowInlineLineBreaks` | **bool** | Whether to allow inline line breaks in log entries |
| `$ignoreEmptyContextAndExtra` | **bool** |  |




***

### includeStacktraces



```php
public includeStacktraces(mixed $include = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$include` | **mixed** |  |




***

### allowInlineLineBreaks



```php
public allowInlineLineBreaks(mixed $allow = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **mixed** |  |




***

### ignoreEmptyContextAndExtra



```php
public ignoreEmptyContextAndExtra(mixed $ignore = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignore` | **mixed** |  |




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

### stringify



```php
public stringify(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




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

### convertToString



```php
protected convertToString(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### replaceNewlines



```php
protected replaceNewlines(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




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
