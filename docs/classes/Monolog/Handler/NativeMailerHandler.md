***

# NativeMailerHandler

NativeMailerHandler uses the mail() function to send the emails

* Full name: `\Monolog\Handler\NativeMailerHandler`
* Parent class: [`\Monolog\Handler\MailHandler`](./MailHandler.md)

## Properties

### to

The email addresses to which the message will be sent

```php
protected array $to
```

***

### subject

The subject of the email

```php
protected string $subject
```

***

### headers

Optional headers for the message

```php
protected array $headers
```

***

### parameters

Optional parameters for the message

```php
protected array $parameters
```

***

### maxColumnWidth

The wordwrap length for the message

```php
protected int $maxColumnWidth
```

***

### contentType

The Content-type for the message

```php
protected string $contentType
```

***

### encoding

The encoding for the message

```php
protected string $encoding
```

***

## Methods

### __construct

```php
public __construct(string|array $to, string $subject, string $from, int $level = Logger::ERROR, bool $bubble = true, int $maxColumnWidth = 70): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **string&#124;array** | The receiver of the mail |
| `$subject` | **string** | The subject of the mail |
| `$from` | **string** | The sender of the mail |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$maxColumnWidth` | **int** | The maximum column width that the message lines will have |

***

### addHeader

Add headers to the message

```php
public addHeader(string|array $headers): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **string&#124;array** | Custom added headers |

***

### addParameter

Add parameters to the message

```php
public addParameter(string|array $parameters): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parameters` | **string&#124;array** | Custom added parameters |

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

### getContentType

```php
public getContentType(): string
```

**Return Value:**

$contentType



***

### getEncoding

```php
public getEncoding(): string
```

**Return Value:**

$encoding



***

### setContentType

```php
public setContentType(string $contentType): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contentType` | **
string** | The content type of the email - Defaults to text/plain. Use text/html for HTML<br />messages. |

***

### setEncoding

```php
public setEncoding(string $encoding): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string** |  |

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
