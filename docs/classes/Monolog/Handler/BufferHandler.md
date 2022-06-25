***

# BufferHandler

Buffers all records until closing the handler and then pass them as batch.

This is useful for a MailHandler to send only one mail per request instead of
sending one per log message.

* Full name: `\Monolog\Handler\BufferHandler`
* Parent class: [`\Monolog\Handler\AbstractHandler`](./AbstractHandler.md)



## Properties


### handler



```php
protected $handler
```






***

### bufferSize



```php
protected $bufferSize
```






***

### bufferLimit



```php
protected $bufferLimit
```






***

### flushOnOverflow



```php
protected $flushOnOverflow
```






***

### buffer



```php
protected $buffer
```






***

### initialized



```php
protected $initialized
```






***

## Methods


### __construct



```php
public __construct(\Monolog\Handler\HandlerInterface $handler, int $bufferLimit, int $level = Logger::DEBUG, bool $bubble = true, bool $flushOnOverflow = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\Monolog\Handler\HandlerInterface** | Handler. |
| `$bufferLimit` | **int** | How many entries should be buffered at most, beyond that the oldest items are removed from the buffer. |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$flushOnOverflow` | **bool** | If true, the buffer is flushed when the max size has been reached, by default oldest entries are discarded |




***

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

### flush



```php
public flush(): mixed
```











***

### __destruct



```php
public __destruct(): mixed
```











***

### close

Closes the handler.

```php
public close(): mixed
```











***

### clear

Clears the buffer without flushing any messages down to the wrapped handler.

```php
public clear(): mixed
```











***

### reset



```php
public reset(): mixed
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


## Inherited methods


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
