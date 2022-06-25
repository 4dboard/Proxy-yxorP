***

# ClosureStrategy

* Full name: `\Zend\Stdlib\Hydrator\Strategy\ClosureStrategy`
* Parent class: [`\Zend\Hydrator\Strategy\ClosureStrategy`](../../../Hydrator/Strategy/ClosureStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)

## Inherited methods

### __construct

You can describe how your values will extract and hydrate, like this:

```php
public __construct(callable $extractFunc = null, callable $hydrateFunc = null): mixed
```

<code>
$hydrator->addStrategy('category', new ClosureStrategy(
    function (Category $value) {
        return (int) $value->id;
    },
    function ($value) {
        return new Category((int) $value);
    }
));
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractFunc` | **callable** | - anonymous function, that extract values<br />from object |
| `$hydrateFunc` | **callable** | - anonymous function, that hydrate values<br />into object |

***

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(mixed $value, array $object = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |
| `$object` | **array** | The object is optionally provided as context. |

**Return Value:**

Returns the value that should be extracted.



***

### hydrate

Converts the given value so that it can be hydrated by the hydrator.

```php
public hydrate(mixed $value, array $data = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |
| `$data` | **array** | The whole data is optionally provided as context. |

**Return Value:**

Returns the value that should be hydrated. yxorP::get('REQUEST')
