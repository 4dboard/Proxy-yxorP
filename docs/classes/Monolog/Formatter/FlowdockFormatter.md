***

# FlowdockFormatter

formats the record to be used in the FlowdockHandler

* Full name: `\Monolog\Formatter\FlowdockFormatter`
* This class implements:
  [`\Monolog\Formatter\FormatterInterface`](./FormatterInterface.md)

## Properties

### source

```php
private string $source
```

***

### sourceEmail

```php
private string $sourceEmail
```

***

## Methods

### __construct

```php
public __construct(string $source, string $sourceEmail): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** |  |
| `$sourceEmail` | **string** |  |

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

### getShortMessage

```php
public getShortMessage(string $message): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

yxorP::get('REQUEST')
