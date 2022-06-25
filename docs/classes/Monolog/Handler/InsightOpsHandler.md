***

# InsightOpsHandler

Inspired on LogEntriesHandler.

* Full name: `\Monolog\Handler\InsightOpsHandler`
* Parent class: [`\Monolog\Handler\SocketHandler`](./SocketHandler.md)

## Properties

### logToken

```php
protected string $logToken
```

***

## Methods

### __construct

```php
public __construct(string $token, string $region = &#039;us&#039;, bool $useSSL = true, int $level = Logger::DEBUG, bool $bubble = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Log token supplied by InsightOps |
| `$region` | **string** | Region where InsightOps account is hosted. Could be &#039;us&#039; or &#039;eu&#039;. |
| `$useSSL` | **bool** | Whether or not SSL encryption should be used |
| `$level` | **int** | The minimum logging level to trigger this handler |
| `$bubble` | **bool** | Whether or not messages that are handled should bubble up the stack. |

***

### generateDataStream

```php
protected generateDataStream(array $record): string
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

### close

Closes the handler.

```php
public close(): mixed
```

This will be called automatically when the object is destroyed









***

### closeSocket

Close socket, if open

```php
public closeSocket(): mixed
```

***

### setPersistent

Set socket connection to nbe persistent. It only has effect before the connection is initiated.

```php
public setPersistent(bool $persistent): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistent` | **bool** |  |

***

### setConnectionTimeout

Set connection timeout. Only has effect before we connect.

```php
public setConnectionTimeout(float $seconds): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |

**See Also:**

* http://php.net/manual/en/function.fsockopen.php -

***

### setTimeout

Set write timeout. Only has effect before we connect.

```php
public setTimeout(float $seconds): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** |  |

**See Also:**

* http://php.net/manual/en/function.stream-set-timeout.php -

***

### setWritingTimeout

Set writing timeout. Only has effect during connection in the writing cycle.

```php
public setWritingTimeout(float $seconds): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seconds` | **float** | 0 for no timeout |

***

### setChunkSize

Set chunk size. Only has effect during connection in the writing cycle.

```php
public setChunkSize(float $bytes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytes` | **float** |  |

***

### getConnectionString

Get current connection string

```php
public getConnectionString(): string
```

***

### isPersistent

Get persistent setting

```php
public isPersistent(): bool
```

***

### getConnectionTimeout

Get current connection timeout setting

```php
public getConnectionTimeout(): float
```

***

### getTimeout

Get current in-transfer timeout

```php
public getTimeout(): float
```

***

### getWritingTimeout

Get current local writing timeout

```php
public getWritingTimeout(): float
```

***

### getChunkSize

Get current chunk size

```php
public getChunkSize(): float
```

***

### isConnected

Check to see if the socket is currently available.

```php
public isConnected(): bool
```

UDP might appear to be connected but might fail when writing. See http://php.net/fsockopen for details.









***

### pfsockopen

Wrapper to allow mocking

```php
protected pfsockopen(): mixed
```

***

### fsockopen

Wrapper to allow mocking

```php
protected fsockopen(): mixed
```

***

### streamSetTimeout

Wrapper to allow mocking

```php
protected streamSetTimeout(): mixed
```

**See Also:**

* http://php.net/manual/en/function.stream-set-timeout.php -

***

### streamSetChunkSize

Wrapper to allow mocking

```php
protected streamSetChunkSize(): mixed
```

**See Also:**

* http://php.net/manual/en/function.stream-set-chunk-size.php -

***

### fwrite

Wrapper to allow mocking

```php
protected fwrite(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### streamGetMetadata

Wrapper to allow mocking

```php
protected streamGetMetadata(): mixed
```

***

### validateTimeout

```php
private validateTimeout(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### connectIfNotConnected

```php
private connectIfNotConnected(): mixed
```

***

### generateDataStream

```php
protected generateDataStream(mixed $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **mixed** |  |

***

### getResource

```php
protected getResource(): resource|null
```

***

### connect

```php
private connect(): mixed
```

***

### createSocketResource

```php
private createSocketResource(): mixed
```

***

### setSocketTimeout

```php
private setSocketTimeout(): mixed
```

***

### setStreamChunkSize

```php
private setStreamChunkSize(): mixed
```

***

### writeToSocket

```php
private writeToSocket(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

***

### writingIsTimedOut

```php
private writingIsTimedOut(mixed $sent): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sent` | **mixed** |  |

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
