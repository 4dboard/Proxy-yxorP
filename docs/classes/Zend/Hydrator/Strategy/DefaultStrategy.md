***

# DefaultStrategy

* Full name: `\Zend\Hydrator\Strategy\DefaultStrategy`
* This class implements:
  [`\Zend\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Methods

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |

**Return Value:**

Returns the value that should be extracted.



***

### hydrate

Converts the given value so that it can be hydrated by the hydrator.

```php
public hydrate(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |

**Return Value:**

Returns the value that should be hydrated. yxorP::get('REQUEST')
