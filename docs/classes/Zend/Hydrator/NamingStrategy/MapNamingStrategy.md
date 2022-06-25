***

# MapNamingStrategy

* Full name: `\Zend\Hydrator\NamingStrategy\MapNamingStrategy`
* This class implements:
  [`\Zend\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Properties

### mapping

Map for hydrate name conversion.

```php
protected array $mapping
```

***

### reverse

Reversed map for extract name conversion.

```php
protected array $reverse
```

***

## Methods

### __construct

Initialize.

```php
public __construct(array $mapping, array $reverse = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mapping` | **array** | Map for name conversion on hydration |
| `$reverse` | **array** | Reverse map for name conversion on extraction |

***

### flipMapping

Safelly flip mapping array.

```php
protected flipMapping(array $array): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | Array to flip |

**Return Value:**

Flipped array



***

### hydrate

Converts the given name so that it can be extracted by the hydrator.

```php
public hydrate(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The original name |

**Return Value:**

The hydrated name



***

### extract

Converts the given name so that it can be hydrated by the hydrator.

```php
public extract(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The original name |

**Return Value:**

The extracted name yxorP::get('REQUEST')
