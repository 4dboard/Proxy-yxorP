***

# HtmlFormatter

Formats incoming records into an HTML table

This is especially useful for html email logging

* Full name: `\Monolog\Formatter\HtmlFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)

## Properties

### logLevels

Translates Monolog log levels to html color priorities.

```php
protected $logLevels
```

***

## Methods

### __construct

```php
public __construct(string $dateFormat = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFormat` | **string** | The format of the timestamp: one supported by DateTime::format |

***

### addRow

Creates an HTML table row

```php
protected addRow(string $th, string $td = &#039; &#039;, bool $escapeTd = true): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$th` | **string** | Row header content |
| `$td` | **string** | Row standard cell content |
| `$escapeTd` | **bool** | false if td content must not be html escaped |

***

### addTitle

Create a HTML h1 tag

```php
protected addTitle(string $title, int $level): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** | Text to be in the h1 |
| `$level` | **int** | Error level |

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

### convertToString

```php
protected convertToString(mixed $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

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
