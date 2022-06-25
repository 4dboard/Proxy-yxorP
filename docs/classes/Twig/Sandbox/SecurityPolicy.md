***

# SecurityPolicy

Represents a security policy which need to be enforced when sandbox mode is enabled.

* Full name: `\Twig\Sandbox\SecurityPolicy`
* This class implements:
  [`\Twig\Sandbox\SecurityPolicyInterface`](./SecurityPolicyInterface.md)

## Properties

### allowedTags

```php
protected $allowedTags
```

***

### allowedFilters

```php
protected $allowedFilters
```

***

### allowedMethods

```php
protected $allowedMethods
```

***

### allowedProperties

```php
protected $allowedProperties
```

***

### allowedFunctions

```php
protected $allowedFunctions
```

***

## Methods

### __construct

```php
public __construct(array $allowedTags = [], array $allowedFilters = [], array $allowedMethods = [], array $allowedProperties = [], array $allowedFunctions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowedTags` | **array** |  |
| `$allowedFilters` | **array** |  |
| `$allowedMethods` | **array** |  |
| `$allowedProperties` | **array** |  |
| `$allowedFunctions` | **array** |  |

***

### setAllowedTags

```php
public setAllowedTags(array $tags): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **array** |  |

***

### setAllowedFilters

```php
public setAllowedFilters(array $filters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filters` | **array** |  |

***

### setAllowedMethods

```php
public setAllowedMethods(array $methods): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methods` | **array** |  |

***

### setAllowedProperties

```php
public setAllowedProperties(array $properties): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |

***

### setAllowedFunctions

```php
public setAllowedFunctions(array $functions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **array** |  |

***

### checkSecurity

```php
public checkSecurity(mixed $tags, mixed $filters, mixed $functions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **mixed** |  |
| `$filters` | **mixed** |  |
| `$functions` | **mixed** |  |

***

### checkMethodAllowed

```php
public checkMethodAllowed(mixed $obj, mixed $method): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$method` | **mixed** |  |

***

### checkPropertyAllowed

```php
public checkPropertyAllowed(mixed $obj, mixed $property): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$property` | **mixed** |  |

yxorP::get('REQUEST')
