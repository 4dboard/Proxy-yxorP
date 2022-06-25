***

# StrategyChain

* Full name: `\Zend\Stdlib\Hydrator\Strategy\StrategyChain`
* Parent class: [`\Zend\Hydrator\Strategy\StrategyChain`](../../../Hydrator/Strategy/StrategyChain.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Inherited methods

### __construct

Constructor

```php
public __construct(array|\Traversable $extractionStrategies): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractionStrategies` | **array&#124;\Traversable** |  |

***

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
