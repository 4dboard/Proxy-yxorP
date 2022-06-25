***

# ArrayMapNamingStrategy

* Full name: `\Zend\Hydrator\NamingStrategy\ArrayMapNamingStrategy`
* This class implements:
  [`\Zend\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Properties

### extractionMap

```php
private string[] $extractionMap
```

***

### hydrationMap

```php
private string[] $hydrationMap
```

***

## Methods

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
