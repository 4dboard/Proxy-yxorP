***

# FilterHandler

Simple handler wrapper that filters records based on a list of levels

It can be configured with an exact list of levels to allow, or a min/max level.

* Full name: `\Monolog\Handler\FilterHandler`
* Parent class: [`\Monolog\Handler\AbstractHandler`](./AbstractHandler.md)



## Properties


### handler

Handler or factory callable($record, $this)

```php
protected callable|\Monolog\Handler\HandlerInterface $handler
```






***

### acceptedLevels

Minimum level for logs that are passed to handler

```php
protected int[] $acceptedLevels
```






***

### bubble

Whether the messages that are handled can bubble up the stack or not

```php
protected bool $bubble
```






***

## Methods


### __construct



```php
public __construct(callable|\Monolog\Handler\HandlerInterface $handler, int|array $minLevelOrList = Logger::DEBUG, int $maxLevel = Logger::EMERGENCY, bool $bubble = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable&#124;\Monolog\Handler\HandlerInterface** | Handler or factory callable($record&amp;#124;null, $filterHandler). |
| `$minLevelOrList` | **int&#124;array** | A list of levels to accept or a minimum level if maxLevel is provided |
| `$maxLevel` | **int** | Maximum level to accept, only used if $minLevelOrList is not an array |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |




***

### getAcceptedLevels



```php
public getAcceptedLevels(): array
```











***

### setAcceptedLevels



```php
public setAcceptedLevels(int|string|array $minLevelOrList = Logger::DEBUG, int|string $maxLevel = Logger::EMERGENCY): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minLevelOrList` | **int&#124;string&#124;array** | A list of levels to accept or a minimum level or level name if maxLevel is provided |
| `$maxLevel` | **int&#124;string** | Maximum level or level name to accept, only used if $minLevelOrList is not an array |




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

### getHandler

Return the nested handler

```php
public getHandler(array $record = null): \Monolog\Handler\HandlerInterface
```

If the handler was provided as a factory callable, this will trigger the handler's instantiation.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




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
