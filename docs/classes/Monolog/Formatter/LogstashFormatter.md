***

# LogstashFormatter

Serializes a log message to Logstash Event Format



* Full name: `\Monolog\Formatter\LogstashFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)

**See Also:**

* http://logstash.net/ - 
* https://github.com/logstash/logstash/blob/master/lib/logstash/event.rb - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`V0`|public| |0|
|`V1`|public| |1|

## Properties


### systemName



```php
protected string $systemName
```






***

### applicationName



```php
protected string $applicationName
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

### version



```php
protected int $version
```






***

## Methods


### __construct



```php
public __construct(string $applicationName, string $systemName = null, string $extraPrefix = null, string $contextPrefix = &#039;ctxt_&#039;, int $version = self::V0): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$applicationName` | **string** | the application that sends the data, used as the &quot;type&quot; field of logstash |
| `$systemName` | **string** | the system/machine name, used as the &quot;source&quot; field of logstash, defaults to the hostname of the machine |
| `$extraPrefix` | **string** | prefix for extra keys inside logstash &quot;fields&quot; |
| `$contextPrefix` | **string** | prefix for context keys inside logstash &quot;fields&quot;, defaults to ctxt_ |
| `$version` | **int** | the logstash format version to use, defaults to 0 |




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

### formatV0



```php
protected formatV0(array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### formatV1



```php
protected formatV1(array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




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
