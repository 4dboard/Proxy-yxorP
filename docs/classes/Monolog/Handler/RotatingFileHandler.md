***

# RotatingFileHandler

Stores logs to files that are rotated every day and a limited number of files are kept.

This rotation is only intended to be used as a workaround. Using logrotate to handle the rotation is strongly encouraged
when you can use it.

* Full name: `\Monolog\Handler\RotatingFileHandler`
* Parent class: [`\Monolog\Handler\StreamHandler`](./StreamHandler.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FILE_PER_DAY`|public| |&#039;Y-m-d&#039;|
|`FILE_PER_MONTH`|public| |&#039;Y-m&#039;|
|`FILE_PER_YEAR`|public| |&#039;Y&#039;|

## Properties

### filename

```php
protected $filename
```

***

### maxFiles

```php
protected $maxFiles
```

***

### mustRotate

```php
protected $mustRotate
```

***

### nextRotation

```php
protected $nextRotation
```

***

### filenameFormat

```php
protected $filenameFormat
```

***

### dateFormat

```php
protected $dateFormat
```

***

## Methods

### __construct

```php
public __construct(string $filename, int $maxFiles, int $level = Logger::DEBUG, bool $bubble = true, int|null $filePermission = null, bool $useLocking = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$maxFiles` | **int** | The maximal amount of files to keep (0 means unlimited) |
| `$level` | **int** | The minimum logging level at which this handler will be triggered |
| `$bubble` | **bool** | Whether the messages that are handled can bubble up the stack or not |
| `$filePermission` | **int&#124;null** | Optional file permissions (default (0644) are only for owner read/write) |
| `$useLocking` | **bool** | Try to lock log file before doing any writes |

***

### close

{@inheritdoc}

```php
public close(): mixed
```

***

### reset

{@inheritdoc}

```php
public reset(): mixed
```

***

### setFilenameFormat

```php
public setFilenameFormat(mixed $filenameFormat, mixed $dateFormat): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filenameFormat` | **mixed** |  |
| `$dateFormat` | **mixed** |  |

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

### rotate

Rotates the files.

```php
protected rotate(): mixed
```

***

### getTimedFilename

```php
protected getTimedFilename(): mixed
```

***

### getGlobPattern

```php
protected getGlobPattern(): mixed
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

### close

Closes the handler.

```php
public close(): mixed
```

This will be called automatically when the object is destroyed









***

### getStream

Return the currently active stream if it is open

```php
public getStream(): resource|null
```

***

### getUrl

Return the stream URL if it was configured with a URL and not an active resource

```php
public getUrl(): string|null
```

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

### streamWrite

Write to stream

```php
protected streamWrite(resource $stream, array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** |  |
| `$record` | **array** |  |

***

### streamSetChunkSize

```php
protected streamSetChunkSize(): mixed
```

***

### customErrorHandler

```php
private customErrorHandler(mixed $code, mixed $msg): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$msg` | **mixed** |  |

***

### getDirFromStream

```php
private getDirFromStream(string $stream): null|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **string** |  |

***

### createDir

```php
private createDir(): mixed
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
