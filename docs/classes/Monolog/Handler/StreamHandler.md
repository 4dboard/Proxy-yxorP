***

# StreamHandler

Stores to any stream resource

Can be used to store into php://stderr, remote and local files, etc.

* Full name: `\Monolog\Handler\StreamHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CHUNK_SIZE`|public| |524288|

## Properties


### stream



```php
protected resource|null $stream
```






***

### url



```php
protected $url
```






***

### errorMessage



```php
private $errorMessage
```






***

### filePermission



```php
protected $filePermission
```






***

### useLocking



```php
protected $useLocking
```






***

### dirCreated



```php
private $dirCreated
```






***

## Methods


### __construct



```php
public __construct(resource|string $stream, int $level = Logger::DEBUG, bool $bubble = true, int|null $filePermission = null, bool $useLocking = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource&#124;string** |  |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$filePermission` | **int&#124;null** | Optional file permissions (default (0644) are only for owner read/write) |
| `$useLocking` | **bool** | Try to lock log file before doing any writes |




***

### close

{@inheritdoc}

```php
public close(): mixed
```











***

### getStream

Return the currently active stream if it is open

```php
public getStream(): resource|null
```











***

### getUrl

Return the stream URL if it was configured with a URL and not an active resource

```php
public getUrl(): string|null
```











***

### write

Writes the record down to the log of the implementing handler

```php
protected write(array $record): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### streamWrite

Write to stream

```php
protected streamWrite(resource $stream, array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** |  |
| `$record` | **array** |  |




***

### streamSetChunkSize



```php
protected streamSetChunkSize(): mixed
```











***

### customErrorHandler



```php
private customErrorHandler(mixed $code, mixed $msg): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$msg` | **mixed** |  |




***

### getDirFromStream



```php
private getDirFromStream(string $stream): null|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **string** |  |




***

### createDir



```php
private createDir(): mixed
```











***


## Inherited methods


### handle

{@inheritdoc}

```php
public handle(array $record): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### write

Writes the record down to the log of the implementing handler

```php
protected write(array $record): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### processRecord

Processes a record.

```php
protected processRecord(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### __construct



```php
public __construct(int|string $level = Logger::DEBUG, bool $bubble = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int&#124;string** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |




***

### isHandling

Checks whether the given record will be handled by this handler.

```php
public isHandling(array $record): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | Partial log record containing only a level key |




***

### handleBatch

Handles a set of records at once.

```php
public handleBatch(array $records): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | The records to handle (an array of record arrays) |




***

### close

Closes the handler.

```php
public close(): mixed
```

This will be called automatically when the object is destroyed









***

### pushProcessor

Adds a processor in the stack.

```php
public pushProcessor(mixed $callback): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** |  |




***

### popProcessor

Removes the processor on top of the stack and returns it.

```php
public popProcessor(): callable
```











***

### setFormatter

Sets the formatter.

```php
public setFormatter(\Monolog\Formatter\FormatterInterface $formatter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Monolog\Formatter\FormatterInterface** |  |




***

### getFormatter

Gets the formatter.

```php
public getFormatter(): \Monolog\Formatter\FormatterInterface
```











***

### setLevel

Sets minimum logging level at which this handler will be triggered.

```php
public setLevel(int|string $level): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int&#124;string** | Level or level name |




***

### getLevel

Gets minimum logging level at which this handler will be triggered.

```php
public getLevel(): int
```











***

### setBubble

Sets the bubbling behavior.

```php
public setBubble(bool $bubble): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bubble` | **bool** | true means that this handler allows bubbling.<br />false means that bubbling is not permitted. |




***

### getBubble

Gets the bubbling behavior.

```php
public getBubble(): bool
```









**Return Value:**

true means that this handler allows bubbling.
false means that bubbling is not permitted.



***

### __destruct



```php
public __destruct(): mixed
```











***

### reset



```php
public reset(): mixed
```











***

### getDefaultFormatter

Gets the default formatter.

```php
protected getDefaultFormatter(): \Monolog\Formatter\FormatterInterface
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
