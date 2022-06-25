***

# AbstractHydrator

* Full name: `\Zend\Hydrator\AbstractHydrator`
* This class implements:
  [`\Zend\Hydrator\HydratorInterface`](./HydratorInterface.md)
  , [`\Zend\Hydrator\StrategyEnabledInterface`](./StrategyEnabledInterface.md)
  , [`\Zend\Hydrator\FilterEnabledInterface`](./FilterEnabledInterface.md)
  , [`\Zend\Hydrator\NamingStrategyEnabledInterface`](./NamingStrategyEnabledInterface.md)
* This class is an **Abstract class**

## Properties

### strategies

The list with strategies that this hydrator has.

```php
protected \ArrayObject $strategies
```

***

### namingStrategy

An instance of NamingStrategy\NamingStrategyInterface

```php
protected \Zend\Hydrator\NamingStrategy\NamingStrategyInterface $namingStrategy
```

***

### filterComposite

Composite to filter the methods, that need to be hydrated

```php
protected \Zend\Hydrator\Filter\FilterComposite $filterComposite
```

***

## Methods

### __construct

Initializes a new instance of this class.

```php
public __construct(): mixed
```

***

### getStrategy

Gets the strategy with the given name.

```php
public getStrategy(string $name): \Zend\Hydrator\Strategy\StrategyInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to get. |

***

### hasStrategy

Checks if the strategy with the given name exists.

```php
public hasStrategy(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to check for. |

***

### addStrategy

Adds the given strategy under the given name.

```php
public addStrategy(string $name, \Zend\Hydrator\Strategy\StrategyInterface $strategy): \Zend\Hydrator\HydratorInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to register. |
| `$strategy` | **\Zend\Hydrator\Strategy\StrategyInterface** | The strategy to register. |

***

### removeStrategy

Removes the strategy with the given name.

```php
public removeStrategy(string $name): \Zend\Hydrator\HydratorInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to remove. |

***

### extractValue

Converts a value for extraction. If no strategy exists the plain value is returned.

```php
public extractValue(string $name, mixed $value, mixed $object = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$object` | **mixed** | The object is optionally provided as context. |

***

### hydrateValue

Converts a value for hydration. If no strategy exists the plain value is returned.

```php
public hydrateValue(string $name, mixed $value, array $data = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$data` | **array** | The whole data is optionally provided as context. |

***

### extractName

Convert a name for extraction. If no naming strategy exists, the plain value is returned.

```php
public extractName(string $name, null $object = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$object` | **null** | The object is optionally provided as context. |

***

### hydrateName

Converts a value for hydration. If no naming strategy exists, the plain value is returned.

```php
public hydrateName(string $name, array $data = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$data` | **array** | The whole data is optionally provided as context. |

***

### getFilter

Get the filter instance

```php
public getFilter(): \Zend\Hydrator\Filter\FilterComposite
```

***

### addFilter

Add a new filter to take care of what needs to be hydrated.

```php
public addFilter(string $name, callable|\Zend\Hydrator\Filter\FilterInterface $filter, int $condition = FilterFilterComposite::CONDITION_OR): \Zend\Hydrator\Filter\FilterComposite
```

To exclude e.g. the method getServiceLocator:

<code>
$composite->addFilter("servicelocator",
    function ($property) {
        list($class, $method) = explode('::', $property);
        if ($method === 'getServiceLocator') {
            return false;
        }
        return true;
    }, FilterComposite::CONDITION_AND
);
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |
| `$filter` | **callable&#124;\Zend\Hydrator\Filter\FilterInterface** |  |
| `$condition` | **int** |  |

***

### hasFilter

Check whether a specific filter exists at key $name or not

```php
public hasFilter(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |

***

### removeFilter

Remove a filter from the composition.

```php
public removeFilter( $name): \Zend\Hydrator\Filter\FilterComposite
```

To not extract "has" methods, you simply need to unregister it

<code>
$filterComposite->removeFilter('has');
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |

***

### setNamingStrategy

Adds the given naming strategy

```php
public setNamingStrategy(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface $strategy): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface** | The naming to register. |

***

### getNamingStrategy

Gets the naming strategy.

```php
public getNamingStrategy(): \Zend\Hydrator\NamingStrategy\NamingStrategyInterface
```

***

### hasNamingStrategy

Checks if a naming strategy exists.

```php
public hasNamingStrategy(): bool
```

***

### removeNamingStrategy

Removes the naming strategy

```php
public removeNamingStrategy(): self
```

yxorP::get('REQUEST')
