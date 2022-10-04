***

# Client

* Full name: `\MongoHybrid\Client`

## Properties

### driver

```php
protected \MongoHybrid\Mongo|\MongoHybrid\MongoLite $driver
```

***

### type

```php
public ?string $type
```

***

## Methods

### __construct

```php
public __construct(string $server, array $options = [], array $driverOptions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string** |  |
| `$options` | **array** |  |
| `$driverOptions` | **array** |  |

***

### dropCollection

```php
public dropCollection(string $name, ?string $db = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$db` | **?string** |  |

***

### renameCollection

```php
public renameCollection(string $name, string $newname, ?string $db = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$newname` | **string** |  |
| `$db` | **?string** |  |

***

### save

```php
public save(string $collection, array& $data): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$data` | **array** |  |

***

### insert

```php
public insert(string $collection, array& $doc): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$doc` | **array** |  |

***

### findTerm

```php
public findTerm(string $collection, string $term, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$term` | **string** |  |
| `$options` | **array** |  |

***

### getKey

Get value for specific key

```php
public getKey(string $collection, string $key, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$default` | **mixed** |  |

***

### setKey

Set value for specific key

```php
public setKey(string $collection, string $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### removeKey

Delete Key(s)

```php
public removeKey(string $collection, string $key): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### keyExists

Check if key exists

```php
public keyExists(string $collection, string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |

***

### incrKey

Increment value by x

```php
public incrKey(string $collection, string $key, int $by = 1): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$by` | **int** |  |

***

### decrKey

Decrement value by x

```php
public decrKey(string $collection, string $key, int $by = 1): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$by` | **int** |  |

***

### rpush

Add item to a value (right)

```php
public rpush(string $collection, string $key, mixed $value): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### lpush

Add item to a value (left)

```php
public lpush(string $collection, string $key, mixed $value): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** | @param  string $collection |
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### lset

Set the value of an element in a list by its index

```php
public lset(string $collection, string $key, int $index, mixed $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$index` | **int** |  |
| `$value` | **mixed** |  |

***

### lindex

Get an element from a list by its index

```php
public lindex(string $collection, string $key, int $index): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$index` | **int** |  |

***

### hset

Set the string value of a hash field

```php
public hset(string $collection, string $key, string $field, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$value` | **mixed** |  |

***

### hget

Get the value of a hash field

```php
public hget(string $collection, string $key, string $field, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$default` | **mixed** |  |

***

### hgetall

Get all the fields and values in a hash

```php
public hgetall(string $collection, string $key): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hexists

Determine if a hash field exists

```php
public hexists(string $collection, string $key, string $field): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |

***

### hkeys

Get all the fields in a hash

```php
public hkeys(string $collection, string $key): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hvals

Get all the values in a hash

```php
public hvals(string $collection, string $key): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hlen

Get the number of fields in a hash

```php
public hlen(string $collection, string $key): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hdel

Delete one or more hash fields

```php
public hdel(string $collection, string $key): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hincrby

Increment the integer value of a hash field by the given number

```php
public hincrby(string $collection, string $key, string $field, int $by = 1): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |
| `$field` | **string** |  |
| `$by` | **int** |  |

***

### hmget

Get the values of all the given hash fields

```php
public hmget(string $collection, string $key): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### hmset

Set multiple hash fields to multiple values

```php
public hmset(string $collection, string $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **string** |  |
| `$key` | **string** |  |

***

### __call

```php
public __call(mixed $method, mixed $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |

***


***

