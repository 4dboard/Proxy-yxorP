***

# XCacheOptions

These are options specific to the XCache adapter

* Full name: `\Zend\Cache\Storage\Adapter\XCacheOptions`
* Parent class: [`\Zend\Cache\Storage\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### namespaceSeparator

Namespace separator

```php
protected string $namespaceSeparator
```

***

### adminAuth

Handle admin authentication

```php
protected bool $adminAuth
```

***

### adminUser

Username to call admin functions

```php
protected null|string $adminUser
```

***

### adminPass

Password to call admin functions

```php
protected null|string $adminPass
```

***

## Methods

### setNamespaceSeparator

Set namespace separator

```php
public setNamespaceSeparator(string $namespaceSeparator): \Zend\Cache\Storage\Adapter\XCacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaceSeparator` | **string** |  |

***

### getNamespaceSeparator

Get namespace separator

```php
public getNamespaceSeparator(): string
```

***

### setAdminUser

Set username to call admin functions

```php
public setAdminUser(null|string $adminUser): \Zend\Cache\Storage\Adapter\XCacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adminUser` | **null&#124;string** |  |

***

### getAdminUser

Get username to call admin functions

```php
public getAdminUser(): string
```

***

### setAdminAuth

Enable/Disable admin authentication handling

```php
public setAdminAuth(bool $adminAuth): \Zend\Cache\Storage\Adapter\XCacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adminAuth` | **bool** |  |

***

### getAdminAuth

Get admin authentication enabled

```php
public getAdminAuth(): bool
```

***

### setAdminPass

Set password to call admin functions

```php
public setAdminPass(null|string $adminPass): \Zend\Cache\Storage\Adapter\XCacheOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adminPass` | **null&#124;string** |  |

***

### getAdminPass

Get password to call admin functions

```php
public getAdminPass(): string
```

***

## Inherited methods

### setAdapter

Adapter using this instance

```php
public setAdapter(\Zend\Cache\Storage\StorageInterface|null $adapter = null): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Zend\Cache\Storage\StorageInterface&#124;null** |  |

***

### setKeyPattern

Set key pattern

```php
public setKeyPattern(null|string $keyPattern): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyPattern` | **null&#124;string** |  |

***

### getKeyPattern

Get key pattern

```php
public getKeyPattern(): string
```

***

### setNamespace

Set namespace.

```php
public setNamespace(string $namespace): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### getNamespace

Get namespace

```php
public getNamespace(): string
```

***

### setReadable

Enable/Disable reading data from cache.

```php
public setReadable(bool $readable): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readable` | **bool** |  |

***

### getReadable

If reading data from cache enabled.

```php
public getReadable(): bool
```

***

### setTtl

Set time to live.

```php
public setTtl(int|float $ttl): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### getTtl

Get time to live.

```php
public getTtl(): float
```

***

### setWritable

Enable/Disable writing data to cache.

```php
public setWritable(bool $writable): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writable` | **bool** |  |

***

### getWritable

If writing data to cache enabled.

```php
public getWritable(): bool
```

***

### triggerOptionEvent

Triggers an option event if this options instance has a connection to an adapter implements EventsCapableInterface.

```php
protected triggerOptionEvent(string $optionName, mixed $optionValue): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optionName` | **string** |  |
| `$optionValue` | **mixed** |  |

***

### normalizeTtl

Validates and normalize a TTL.

```php
protected normalizeTtl(int|float& $ttl): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setFromArray

Set one or more configuration properties

```php
public setFromArray(array|\Traversable|\Zend\Stdlib\AbstractOptions $options): \Zend\Stdlib\AbstractOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Stdlib\AbstractOptions** |  |

**Return Value:**

Provides fluent interface



***

### toArray

Cast to array

```php
public toArray(): array
```

***

### __set

Set a configuration property

```php
public __set(string $key, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__set() -

***

### __get

Get a configuration property

```php
public __get(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__get() -

***

### __isset

Test if a configuration property is null

```php
public __isset(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__isset() -

***

### __unset

Set a configuration property to NULL

```php
public __unset(string $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__unset() -

***


***

