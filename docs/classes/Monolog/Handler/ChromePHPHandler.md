***

# ChromePHPHandler

Handler sending logs to the ChromePHP extension (http://www.chromephp.com/)

This also works out of the box with Firefox 43+

* Full name: `\Monolog\Handler\ChromePHPHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;4.0&#039;|
|`HEADER_NAME`|public| |&#039;X-ChromeLogger-Data&#039;|
|`USER_AGENT_REGEX`|public| |&#039;{\\b(?:Chrome/\\d+(?:\\.\\d+)*|HeadlessChrome|Firefox/(?:4[3-9]|[5-9]\\d|\\d{3,})(?:\\.\\d)*)\\b}&#039;|

## Properties

### initialized

```php
protected static $initialized
```

* This property is **static**.

***

### overflowed

Tracks whether we sent too much data

```php
protected static bool $overflowed
```

Chrome limits the headers to 4KB, so when we sent 3KB we stop sending

* This property is **static**.

***

### json

```php
protected static $json
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

### __construct

```php
public __construct(int $level = Logger::DEBUG, bool $bubble = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |

***

### handleBatch

{@inheritdoc}

```php
public handleBatch(array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |

***

### getDefaultFormatter

{@inheritDoc}

```php
protected getDefaultFormatter(): mixed
```

***

### write

Creates & sends header for a record

```php
protected write(array $record): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

**See Also:**

* \Monolog\Handler\sendHeader() - * \Monolog\Handler\send() -

***

### send

Sends the log header

```php
protected send(): mixed
```

**See Also:**

* \Monolog\Handler\sendHeader() -

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
