***

# JsonFormatter

Encodes whatever record data is passed to it as json

This can be useful to log to databases or remote APIs

* Full name: `\Monolog\Formatter\JsonFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`BATCH_MODE_JSON`|public| |1|
|`BATCH_MODE_NEWLINES`|public| |2|

## Properties

### batchMode

```php
protected $batchMode
```

***

### appendNewline

```php
protected $appendNewline
```

***

### includeStacktraces

```php
protected bool $includeStacktraces
```

***

## Methods

### __construct

```php
public __construct(int $batchMode = self::BATCH_MODE_JSON, bool $appendNewline = true, int $maxDepth = 9): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$batchMode` | **int** |  |
| `$appendNewline` | **bool** |  |
| `$maxDepth` | **int** |  |

***

### getBatchMode

The batch mode option configures the formatting style for multiple records. By default, multiple records will be
formatted as a JSON-encoded array. However, for compatibility with some API endpoints, alternative styles are available.

```php
public getBatchMode(): int
```

***

### isAppendingNewlines

True if newlines are appended to every formatted record

```php
public isAppendingNewlines(): bool
```

***

### format

Formats a log record.

```php
public format(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | A record to format |

**Return Value:**

The formatted record



***

### formatBatch

Formats a set of log records.

```php
public formatBatch(array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | A set of records to format |

**Return Value:**

The formatted set of records



***

### includeStacktraces

```php
public includeStacktraces(bool $include = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$include` | **bool** |  |

***

### formatBatchJson

Return a JSON-encoded array of records.

```php
protected formatBatchJson(array $records): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |

***

### formatBatchNewlines

Use new lines to separate records instead of a JSON-encoded array.

```php
protected formatBatchNewlines(array $records): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |

***

### normalize

Normalizes given $data.

```php
protected normalize(mixed $data, mixed $depth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$depth` | **mixed** |  |

***

### normalizeException

Normalizes given exception with or without its own stack trace based on
`includeStacktraces` property.

```php
protected normalizeException(\Exception|\Throwable $e): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception&#124;\Throwable** |  |

***

## Inherited methods

### __construct

```php
public __construct(string $dateFormat = null, int $maxDepth = 9): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFormat` | **string** | The format of the timestamp: one supported by DateTime::format |
| `$maxDepth` | **int** |  |

***

### format

Formats a log record.

```php
public format(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | A record to format |

**Return Value:**

The formatted record



***

### formatBatch

Formats a set of log records.

```php
public formatBatch(array $records): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** | A set of records to format |

**Return Value:**

The formatted set of records



***

### getMaxDepth

```php
public getMaxDepth(): int
```

***

### setMaxDepth

```php
public setMaxDepth(int $maxDepth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxDepth` | **int** |  |

***

### normalize

```php
protected normalize(mixed $data, mixed $depth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$depth` | **mixed** |  |

***

### normalizeException

```php
protected normalizeException(mixed $e): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **mixed** |  |

***

### toJson

Return the JSON representation of a value

```php
protected toJson(mixed $data, bool $ignoreErrors = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$ignoreErrors` | **bool** |  |

yxorP::get('REQUEST')
