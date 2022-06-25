***

# DateTimeFormatterStrategy

* Full name: `\Zend\Stdlib\Hydrator\Strategy\DateTimeFormatterStrategy`
* Parent
  class: [`\Zend\Hydrator\Strategy\DateTimeFormatterStrategy`](../../../Hydrator/Strategy/DateTimeFormatterStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Inherited methods

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
