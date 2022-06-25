***

# FingersCrossedHandler

Buffers all records until a certain level is reached

The advantage of this approach is that you don't get any clutter in your log files. Only requests which actually trigger
an error (or whatever your actionLevel is) will be in the logs, but they will contain all records, not only those above
the level threshold.

You can find the various activation strategies in the Monolog\Handler\FingersCrossed\ namespace.

* Full name: `\Monolog\Handler\FingersCrossedHandler`
* Parent class: [`\Monolog\Handler\AbstractHandler`](./AbstractHandler.md)

## Properties

### handler

```php
protected $handler
```

***

### activationStrategy

```php
protected $activationStrategy
```

***

### buffering

```php
protected $buffering
```

***

### bufferSize

```php
protected $bufferSize
```

***

### buffer

```php
protected $buffer
```

***

### stopBuffering

```php
protected $stopBuffering
```

***

### passthruLevel

```php
protected $passthruLevel
```

***

## Methods

### __construct

```php
public __construct(callable|\Monolog\Handler\HandlerInterface $handler, int|\Monolog\Handler\FingersCrossed\ActivationStrategyInterface $activationStrategy = null, int $bufferSize, bool $bubble = true, bool $stopBuffering = true, int $passthruLevel = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **
callable&#124;\Monolog\Handler\HandlerInterface** | Handler or factory callable($record&amp;#124;null, $fingersCrossedHandler). |
| `$activationStrategy` | **
int&#124;\Monolog\Handler\FingersCrossed\ActivationStrategyInterface** | Strategy which determines when this handler takes action |
| `$bufferSize` | **
int** | How many entries should be buffered at most, beyond that the oldest items are removed from the buffer. |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$stopBuffering` | **bool** | Whether the handler should stop buffering after being triggered (default true) |
| `$passthruLevel` | **int** | Minimum level to always flush to handler on close, even if strategy not triggered |

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

### activate

Manually activate this logger regardless of the activation strategy

```php
public activate(): mixed
```

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

### close

Closes the handler.

```php
public close(): mixed
```

***

### reset

```php
public reset(): mixed
```

***

### clear

Clears the buffer without flushing any messages down to the wrapped handler.

```php
public clear(): mixed
```

It also resets the handler to its initial buffering state.









***

### flushBuffer

Resets the state of the handler. Stops forwarding records to the wrapped handler.

```php
private flushBuffer(): mixed
```

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
| `$bubble` | **
bool** | true means that this handler allows bubbling.<br />false means that bubbling is not permitted. |

***

### getBubble

Gets the bubbling behavior.

```php
public getBubble(): bool
```

**Return Value:**

true means that this handler allows bubbling. false means that bubbling is not permitted.



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

yxorP::get('REQUEST')
