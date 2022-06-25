***

# DateTimeFormatterStrategy

* Full name: `\Zend\Hydrator\Strategy\DateTimeFormatterStrategy`
* This class implements:
  [`\Zend\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Properties

### format

```php
private string $format
```

***

### timezone

```php
private \DateTimeZone|null $timezone
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $format = DateTime::RFC3339, \DateTimeZone|null $timezone = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$timezone` | **\DateTimeZone&#124;null** |  |

***

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(mixed|\DateTime $value): mixed|string
```

Converts to date time string

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed&#124;\DateTime** |  |

***

### hydrate

Converts date time string to DateTime instance for injecting to object

```php
public hydrate(mixed|string $value): mixed|\DateTime
```

{@inheritDoc}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed&#124;string** |  |

yxorP::get('REQUEST')
