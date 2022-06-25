***

# DeduplicationHandler

Simple handler wrapper that deduplicates log records across multiple requests

It also includes the BufferHandler functionality and will buffer all messages until the end of the request or flush() is
called.

This works by storing all log records' messages above $deduplicationLevel to the file specified by $deduplicationStore.
When further logs come in at the end of the request (or when flush() is called), all those above $deduplicationLevel are
checked against the existing stored logs. If they match and the timestamps in the stored log is not older than $time
seconds, the new log record is discarded. If no log record is new, the whole data set is discarded.

This is mainly useful in combination with Mail handlers or things like Slack or HipChat handlers that send messages to
people, to avoid spamming with the same message over and over in case of a major component failure like a database
server being down which makes all requests fail in the same way.

* Full name: `\Monolog\Handler\DeduplicationHandler`
* Parent class: [`\Monolog\Handler\BufferHandler`](./BufferHandler.md)

## Properties

### deduplicationStore

```php
protected string $deduplicationStore
```

***

### deduplicationLevel

```php
protected int $deduplicationLevel
```

***

### time

```php
protected int $time
```

***

### gc

```php
private bool $gc
```

***

## Methods

### __construct

```php
public __construct(\Monolog\Handler\HandlerInterface $handler, string $deduplicationStore = null, int $deduplicationLevel = Logger::ERROR, int $time = 60, bool $bubble = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **\Monolog\Handler\HandlerInterface** | Handler. |
| `$deduplicationStore` | **string** | The file/path where the deduplication log should be kept |
| `$deduplicationLevel` | **
int** | The minimum logging level for log records to be looked at for deduplication purposes |
| `$time` | **
int** | The period (in seconds) during which duplicate entries should be suppressed after a given log is sent through |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |

***

### flush

```php
public flush(): mixed
```

***

### isDuplicate

```php
private isDuplicate(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### collectLogs

```php
private collectLogs(): mixed
```

***

### appendRecord

```php
private appendRecord(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

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

This will be called automatically when the object is destroyed









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

### getDefaultFormatter

Gets the default formatter.

```php
protected getDefaultFormatter(): \Monolog\Formatter\FormatterInterface
```

yxorP::get('REQUEST')
