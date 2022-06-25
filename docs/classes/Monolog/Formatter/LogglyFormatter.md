***

# LogglyFormatter

Encodes message information into JSON in a format compatible with Loggly.

* Full name: `\Monolog\Formatter\LogglyFormatter`
* Parent class: [`\Monolog\Formatter\JsonFormatter`](./JsonFormatter.md)

## Methods

### __construct

Overrides the default batch mode to new lines for compatibility with the Loggly bulk API.

```php
public __construct(int $batchMode = self::BATCH_MODE_NEWLINES, mixed $appendNewline = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$batchMode` | **int** |  |
| `$appendNewline` | **mixed** |  |

***

### format

Appends the 'timestamp' parameter for indexing by Loggly.

```php
public format(array $record): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | A record to format |

**Return Value:**

The formatted record

**See Also:**

* https://www.loggly.com/docs/automated-parsing/#json - * \Monolog\Formatter\JsonFormatter::format() -

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
