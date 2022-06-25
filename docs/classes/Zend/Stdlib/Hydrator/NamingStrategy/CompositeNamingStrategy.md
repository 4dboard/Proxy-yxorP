***

# CompositeNamingStrategy

* Full name: `\Zend\Stdlib\Hydrator\NamingStrategy\CompositeNamingStrategy`
* Parent
  class: [`\Zend\Hydrator\NamingStrategy\CompositeNamingStrategy`](../../../Hydrator/NamingStrategy/CompositeNamingStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Inherited methods

### __construct

```php
public __construct(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface[] $strategies, \Zend\Hydrator\NamingStrategy\NamingStrategyInterface|null $defaultNamingStrategy = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategies` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface[]** | indexed by the name they translate |
| `$defaultNamingStrategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface&#124;null** |  |

***

### extract

Converts the given name so that it can be hydrated by the hydrator.

```php
public extract(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The original name |

**Return Value:**

The extracted name



***

### hydrate

Converts the given name so that it can be extracted by the hydrator.

```php
public hydrate(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The original name |

**Return Value:**

The hydrated name yxorP::get('REQUEST')
