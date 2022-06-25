***

# SyslogUdpHandler

A Handler for logging to a remote syslogd server.

* Full name: `\Monolog\Handler\SyslogUdpHandler`
* Parent class: [`\Monolog\Handler\AbstractSyslogHandler`](./AbstractSyslogHandler.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`RFC3164`|public| |0|
|`RFC5424`|public| |1|

## Properties

### dateFormats

```php
private $dateFormats
```

***

### socket

```php
protected $socket
```

***

### ident

```php
protected $ident
```

***

### rfc

```php
protected $rfc
```

***

## Methods

### __construct

```php
public __construct(string $host, int $port = 514, mixed $facility = LOG_USER, int $level = Logger::DEBUG, bool $bubble = true, string $ident = &#039;php&#039;, int $rfc = self::RFC5424): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** |  |
| `$port` | **int** |  |
| `$facility` | **mixed** |  |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$ident` | **string** | Program name or tag for each log message. |
| `$rfc` | **int** | RFC to format the message for. |

***

### write

```php
protected write(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### close

```php
public close(): mixed
```

***

### splitMessageIntoLines

```php
private splitMessageIntoLines(mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |

***

### makeCommonSyslogHeader

Make common syslog header (see rfc5424 or rfc3164)

```php
protected makeCommonSyslogHeader(mixed $severity): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$severity` | **mixed** |  |

***

### getDateTime

```php
protected getDateTime(): mixed
```

***

### setSocket

Inject your own socket, mainly used for testing

```php
public setSocket(mixed $socket): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$socket` | **mixed** |  |

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

### getDefaultFormatter

Gets the default formatter.

```php
protected getDefaultFormatter(): \Monolog\Formatter\FormatterInterface
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

yxorP::get('REQUEST')
