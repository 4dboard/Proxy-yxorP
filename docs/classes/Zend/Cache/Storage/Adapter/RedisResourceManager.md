***

# RedisResourceManager

This is a resource manager for redis

* Full name: `\Zend\Cache\Storage\Adapter\RedisResourceManager`

## Properties

### resources

Registered resources

```php
protected array $resources
```

***

## Methods

### hasResource

Check if a resource exists

```php
public hasResource(string $id): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getMajorVersion

Get redis server version

```php
public getMajorVersion(string $id): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getMayorVersion

Get redis server version

```php
public getMayorVersion(string $id): int
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getDatabase

Get redis resource database

```php
public getDatabase(string $id): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getPassword

Get redis resource password

```php
public getPassword(string $id): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getResource

Gets a redis resource

```php
public getResource(string $id): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getServer

Get server

```php
public getServer(string $id): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

**Return Value:**

array('host' => <host>[, 'port' => <port>[, 'timeout' => <timeout>]])



***

### normalizeServer

Normalize one server into the following format:
array('host' => <host>[, 'port' => <port>[, 'timeout' => <timeout>]])

```php
protected normalizeServer(string|array& $server): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string&#124;array** |  |

***

### extractPassword

Extract password to be used on connection

```php
protected extractPassword(mixed $resource, mixed $serverUri): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |
| `$serverUri` | **mixed** |  |

***

### connect

Connects to redis server

```php
protected connect(array& $resource): null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **array** |  |

***

### setResource

Set a resource

```php
public setResource(string $id, array|\Traversable|\Redis $resource): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$resource` | **array&#124;\Traversable&#124;\Redis** |  |

**Return Value:**

Fluent interface



***

### removeResource

Remove a resource

```php
public removeResource(string $id): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

**Return Value:**

Fluent interface



***

### setPersistentId

Set the persistent id

```php
public setPersistentId(string $id, string $persistentId): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$persistentId` | **string** |  |

**Return Value:**

Fluent interface



***

### getPersistentId

Get the persistent id

```php
public getPersistentId(string $id): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### normalizePersistentId

Normalize the persistent id

```php
protected normalizePersistentId(string& $persistentId): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistentId` | **string** |  |

***

### setLibOptions

Set Redis options

```php
public setLibOptions(string $id, array $libOptions): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$libOptions` | **array** |  |

**Return Value:**

Fluent interface



***

### getLibOptions

Get Redis options

```php
public getLibOptions(string $id): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### setLibOption

Set one Redis option

```php
public setLibOption(string $id, string|int $key, mixed $value): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$key` | **string&#124;int** |  |
| `$value` | **mixed** |  |

**Return Value:**

Fluent interface



***

### getLibOption

Get one Redis option

```php
public getLibOption(string $id, string|int $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$key` | **string&#124;int** |  |

***

### normalizeLibOptions

Normalize Redis options

```php
protected normalizeLibOptions(array|\Traversable& $libOptions): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libOptions` | **array&#124;\Traversable** |  |

***

### normalizeLibOptionKey

Convert option name into it's constant value

```php
protected normalizeLibOptionKey(string|int& $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string&#124;int** |  |

***

### setServer

Set server

```php
public setServer(string $id, string|array $server): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

Server can be described as follows:

- URI:   /path/to/sock.sock
- Assoc: array('host' => <host>[, 'port' => <port>[, 'timeout' => <timeout>]])
- List:  array(<host>[, <port>, [, <timeout>]])

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$server` | **string&#124;array** |  |

***

### setPassword

Set redis password

```php
public setPassword(string $id, string $password): \Redis
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$password` | **string** |  |

***

### setDatabase

Set redis database number

```php
public setDatabase(string $id, int $database): \Zend\Cache\Storage\Adapter\RedisResourceManager
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$database` | **int** |  |

yxorP::get('REQUEST')
