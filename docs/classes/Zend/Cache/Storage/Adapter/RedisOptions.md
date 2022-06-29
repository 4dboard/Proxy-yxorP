***

# RedisOptions

Unless otherwise marked, all options in this class affect all adapters.

* Full name: `\Zend\Cache\Storage\Adapter\RedisOptions`
* Parent class: [`\Zend\Cache\Storage\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### namespaceSeparator

The namespace separator

```php
protected string $namespaceSeparator
```

***

### resourceManager

The redis resource manager

```php
protected null|\Zend\Cache\Storage\Adapter\RedisResourceManager $resourceManager
```

***

### resourceId

The resource id of the resource manager

```php
protected string $resourceId
```

***

## Methods

### setNamespace

Set namespace.

```php
public setNamespace(string $namespace): \Zend\Cache\Storage\Adapter\RedisOptions
```

The option Redis::OPT_PREFIX will be used as the namespace. It can't be longer than 128 characters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | Prefix for each key stored in redis |

**See Also:**

* \Zend\Cache\Storage\Adapter\AdapterOptions::setNamespace() - * \Zend\Cache\Storage\Adapter\RedisOptions::
  setPrefixKey() -

***

### setNamespaceSeparator

Set namespace separator

```php
public setNamespaceSeparator(string $namespaceSeparator): \Zend\Cache\Storage\Adapter\RedisOptions
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

Set the redis resource manager to use

```php
public setResourceManager(null|\Zend\Cache\Storage\Adapter\RedisResourceManager $resourceManager = null): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceManager` | **null&#124;\Zend\Cache\Storage\Adapter\RedisResourceManager** |  |

***

### getResourceManager

Get the redis resource manager

```php
public getResourceManager(): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

***

### getResourceId

Get the redis resource id

```php
public getResourceId(): string
```

***

### setResourceId

Set the redis resource id

```php
public setResourceId(string $resourceId): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **string** |  |

***

### getPersistentId

Get the persistent id

```php
public getPersistentId(): string
```

***

### setPersistentId

Set the persistent id

```php
public setPersistentId(string $persistentId): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistentId` | **string** |  |

***

### setLibOptions

Set redis options

```php
public setLibOptions(array $libOptions): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libOptions` | **array** |  |

**See Also:**

* http://github.com/nicolasff/phpredis#setoption -

***

### getLibOptions

Get redis options

```php
public getLibOptions(): array
```

**See Also:**

* http://github.com/nicolasff/phpredis#setoption -

***

### setServer

Set server

```php
public setServer(string|array $server): \Zend\Cache\Storage\Adapter\RedisOptions
```

Server can be described as follows:

- URI:   /path/to/sock.sock
- Assoc: array('host' => <host>[, 'port' => <port>[, 'timeout' => <timeout>]])
- List:  array(<host>[, <port>, [, <timeout>]])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string&#124;array** |  |

***

### getServer

Get server

```php
public getServer(): array
```

**Return Value:**

array('host' => <host>[, 'port' => <port>[, 'timeout' => <timeout>]])



***

### setDatabase

Set resource database number

```php
public setDatabase(int $database): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$database` | **int** | Database number |

***

### getDatabase

Get resource database number

```php
public getDatabase(): int
```

**Return Value:**

Database number



***

### setPassword

Set resource password

```php
public setPassword(string $password): \Zend\Cache\Storage\Adapter\RedisOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** | Password |

***

### getPassword

Get resource password

```php
public getPassword(): string
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

