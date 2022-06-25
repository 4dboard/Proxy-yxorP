***

# ChromePHPFormatter

Formats a log message according to the ChromePHP array format

* Full name: `\Monolog\Formatter\ChromePHPFormatter`
* This class implements:
  [`\Monolog\Formatter\FormatterInterface`](./FormatterInterface.md)

## Properties

### logLevels

Translates Monolog log levels to Wildfire levels.

```php
private $logLevels
```

***

## Methods

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

The formatted set of records yxorP::get('REQUEST')
