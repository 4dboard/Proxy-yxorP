***

# PsrLogMessageProcessor

Processes a record's message according to PSR-3 rules

It replaces {foo} with the value from $context['foo']

* Full name: `\Monolog\Processor\PsrLogMessageProcessor`
* This class implements:
  [`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SIMPLE_DATE`|public| |&quot;Y-m-d\\TH:i:s.uP&quot;|

## Properties

### dateFormat

```php
private string|null $dateFormat
```

***

### removeUsedContextFields

```php
private bool $removeUsedContextFields
```

***

## Methods

### __construct

```php
public __construct(string|null $dateFormat = null, bool $removeUsedContextFields = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateFormat` | **string&#124;null** | The format of the timestamp: one supported by DateTime::format |
| `$removeUsedContextFields` | **bool** | If set to true the fields interpolated into message gets unset |

***

### __invoke

```php
public __invoke(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

yxorP::get('REQUEST')
