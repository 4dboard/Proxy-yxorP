***

# ArrayMapNamingStrategy

* Full name: `\Zend\Stdlib\Hydrator\NamingStrategy\ArrayMapNamingStrategy`
* Parent
  class: [`\Zend\Hydrator\NamingStrategy\ArrayMapNamingStrategy`](../../../Hydrator/NamingStrategy/ArrayMapNamingStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Inherited methods

### __construct

Constructor

```php
public __construct(array $extractionMap): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractionMap` | **
array** | A map of string keys and values for symmetric translation of hydrated<br />and extracted field names |

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

The hydrated name



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

The extracted name yxorP::get('REQUEST')
