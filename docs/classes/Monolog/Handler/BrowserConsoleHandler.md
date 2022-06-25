***

# BrowserConsoleHandler

Handler sending logs to browser's javascript console with no browser extension required

* Full name: `\Monolog\Handler\BrowserConsoleHandler`
* Parent class: [`\Monolog\Handler\AbstractProcessingHandler`](./AbstractProcessingHandler.md)

## Properties

### initialized

```php
protected static $initialized
```

* This property is **static**.

***

### records

```php
protected static $records
```

* This property is **static**.

***

## Methods

### getDefaultFormatter

{@inheritDoc}

```php
protected getDefaultFormatter(): mixed
```

Formatted output may contain some formatting markers to be transferred to `console.log` using the %c format.

Example of formatted string:

    You can do [[blue text]]{color: blue} or [[green background]]{background-color: green; color: white}

***

### write

Writes the record down to the log of the implementing handler

```php
protected write(array $record): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### send

Convert records to javascript console commands and send it to the browser.

```php
public static send(): mixed
```

This method is automatically called on PHP shutdown if output is HTML or Javascript.

* This method is **static**.

***

### close

```php
public close(): mixed
```

***

### reset

```php
public reset(): mixed
```

***

### resetStatic

Forget all logged records

```php
public static resetStatic(): mixed
```

* This method is **static**.

***

### registerShutdownFunction

Wrapper for register_shutdown_function to allow overriding

```php
protected registerShutdownFunction(): mixed
```

***

### writeOutput

Wrapper for echo to allow overriding

```php
protected static writeOutput(string $str): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

***

### getResponseFormat

Checks the format of the response

```php
protected static getResponseFormat(): string
```

If Content-Type is set to application/javascript or text/javascript -> js If Content-Type is set to text/html, or is
unset -> html If Content-Type is anything else -> unknown

* This method is **static**.

**Return Value:**

One of 'js', 'html' or 'unknown'



***

### generateScript

```php
private static generateScript(): mixed
```

* This method is **static**.

***

### handleStyles

```php
private static handleStyles(mixed $formatted): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatted` | **mixed** |  |

***

### handleCustomStyles

```php
private static handleCustomStyles(mixed $style, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **mixed** |  |
| `$string` | **mixed** |  |

***

### dump

```php
private static dump(mixed $title, array $dict): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **mixed** |  |
| `$dict` | **array** |  |

***

### quote

```php
private static quote(mixed $arg): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arg` | **mixed** |  |

***

### call

```php
private static call(): mixed
```

* This method is **static**.

***

### call_array

```php
private static call_array(mixed $method, array $args): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **array** |  |

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
