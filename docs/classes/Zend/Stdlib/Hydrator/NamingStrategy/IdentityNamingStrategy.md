***

# IdentityNamingStrategy

* Full name: `\Zend\Stdlib\Hydrator\NamingStrategy\IdentityNamingStrategy`
* Parent
  class: [`\Zend\Hydrator\NamingStrategy\IdentityNamingStrategy`](../../../Hydrator/NamingStrategy/IdentityNamingStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Inherited methods

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
