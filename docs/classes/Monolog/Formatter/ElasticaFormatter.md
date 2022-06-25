***

# ElasticaFormatter

Format a log message into an Elastica Document

* Full name: `\Monolog\Formatter\ElasticaFormatter`
* Parent class: [`\Monolog\Formatter\NormalizerFormatter`](./NormalizerFormatter.md)

## Properties

### index

```php
protected string $index
```

***

### type

```php
protected string $type
```

***

## Methods

### __construct

```php
public __construct(string $index, string $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string** | Elastic Search index name |
| `$type` | **string** | Elastic Search document type |

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

### getIndex

Getter index

```php
public getIndex(): string
```

***

### getType

Getter type

```php
public getType(): string
```

***

### getDocument

Convert a log message into an Elastica Document

```php
protected getDocument(array $record): \Elastica\Document
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** | Log message |

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
