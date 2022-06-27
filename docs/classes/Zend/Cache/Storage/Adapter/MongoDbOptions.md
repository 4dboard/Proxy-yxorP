***

# MongoDbOptions

Unless otherwise marked, all options in this class affect all adapters.

* Full name: `\Zend\Cache\Storage\Adapter\MongoDbOptions`
* Parent class: [`\Zend\Cache\Storage\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### namespaceSeparator

The namespace separator

```php
private string $namespaceSeparator
```

***

### resourceManager

The mongo DB resource manager

```php
private null|\Zend\Cache\Storage\Adapter\MongoDbResourceManager $resourceManager
```

***

### resourceId

The resource id of the resource manager

```php
private string $resourceId
```

***

## Methods

### setNamespaceSeparator

Set namespace separator

```php
public setNamespaceSeparator(string $namespaceSeparator): self
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

### setResourceManager

Set the mongodb resource manager to use

```php
public setResourceManager(null|\Zend\Cache\Storage\Adapter\MongoDbResourceManager $resourceManager = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceManager` | **null&#124;\Zend\Cache\Storage\Adapter\MongoDbResourceManager** |  |

***

### getResourceManager

Get the mongodb resource manager

```php
public getResourceManager(): \Zend\Cache\Storage\Adapter\MongoDbResourceManager
```

***

### getResourceId

Get the mongodb resource id

```php
public getResourceId(): string
```

***

### setResourceId

Set the mongodb resource id

```php
public setResourceId(string $resourceId): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **string** |  |

***

### setServer

Set the mongo DB server

```php
public setServer(string $server): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** |  |

***

### setConnectionOptions

```php
public setConnectionOptions(array $connectionOptions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$connectionOptions` | **array** |  |

***

### setDriverOptions

```php
public setDriverOptions(array $driverOptions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$driverOptions` | **array** |  |

***

### setDatabase

```php
public setDatabase(mixed $database): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **mixed** |  |

***

### setCollection

```php
public setCollection(mixed $collection): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |

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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
