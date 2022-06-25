***

# FirePHPHandler

Simple FirePHP Handler (http://www.firephp.org/), which uses the Wildfire protocol.



* Full name: `\Monolog\Handler\FirePHPHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PROTOCOL_URI`|public| |&#039;http://meta.wildfirehq.org/Protocol/JsonStream/0.2&#039;|
|`STRUCTURE_URI`|public| |&#039;http://meta.firephp.org/Wildfire/Structure/FirePHP/FirebugConsole/0.1&#039;|
|`PLUGIN_URI`|public| |&#039;http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3&#039;|
|`HEADER_PREFIX`|public| |&#039;X-Wf&#039;|

## Properties


### initialized

Whether or not Wildfire vendor-specific headers have been generated & sent yet

```php
protected static $initialized
```



* This property is **static**.


***

### messageIndex

Shared static message index between potentially multiple handlers

```php
protected static int $messageIndex
```



* This property is **static**.


***

### sendHeaders



```php
protected static $sendHeaders
```



* This property is **static**.


***

## Methods


### createHeader

Base header creation function used by init headers & record headers

```php
protected createHeader(array $meta, string $message): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$meta` | **array** | Wildfire Plugin, Protocol &amp; Structure Indexes |
| `$message` | **string** | Log message |


**Return Value:**

Complete header string ready for the client as key and message as value



***

### createRecordHeader

Creates message header from record

```php
protected createRecordHeader(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |



**See Also:**

* \Monolog\Handler\createHeader() - 

***

### getDefaultFormatter

{@inheritDoc}

```php
protected getDefaultFormatter(): mixed
```











***

### getInitHeaders

Wildfire initialization headers to enable message parsing

```php
protected getInitHeaders(): array
```










**See Also:**

* \Monolog\Handler\createHeader() - * \Monolog\Handler\sendHeader() - 

***

### sendHeader

Send header string to the client

```php
protected sendHeader(string $header, string $content): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string** |  |
| `$content` | **string** |  |




***

### write

Creates & sends header for a record, ensuring init headers have been sent prior

```php
protected write(array $record): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |



**See Also:**

* \Monolog\Handler\sendHeader() - * \Monolog\Handler\sendInitHeaders() - 

***

### headersAccepted

Verifies if the headers are accepted by the current user agent

```php
protected headersAccepted(): bool
```











***

### __get

BC getter for the sendHeaders property that has been made static

```php
public __get(mixed $property): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |




***

### __set

BC setter for the sendHeaders property that has been made static

```php
public __set(mixed $property, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |
| `$value` | **mixed** |  |




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
