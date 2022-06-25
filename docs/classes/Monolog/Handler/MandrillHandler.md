***

# MandrillHandler

MandrillHandler uses cURL to send the emails to the Mandrill API

* Full name: `\Monolog\Handler\MandrillHandler`
* Parent class: [`\Monolog\Handler\MailHandler`](./MailHandler.md)

## Properties

### message

```php
protected $message
```

***

### apiKey

```php
protected $apiKey
```

***

## Methods

### __construct

```php
public __construct(string $apiKey, callable|\Swift_Message $message, int $level = Logger::ERROR, bool $bubble = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$apiKey` | **string** | A valid Mandrill API key |
| `$message` | **callable&#124;\Swift_Message** | An example message for real messages, only the body will be replaced |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |

***

### send

Send a mail with the given content

```php
protected send(mixed $content, array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | formatted email body to be sent |
| `$records` | **array** | the array of log records that formed this content |

***

## Inherited methods

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

### send

Send a mail with the given content

```php
protected send(string $content, array $records): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | formatted email body to be sent |
| `$records` | **array** | the array of log records that formed this content |

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

### getHighestRecord

```php
protected getHighestRecord(array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |

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
