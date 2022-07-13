***

# Cursor

* Full name: `\MongoLite\Cursor`
* This class implements:
  [`\Iterator`](../Iterator.md)

## Properties

### position

```php
protected $position
```

***

### data

```php
protected $data
```

***

### collection

```php
protected $collection
```

***

### criteria

```php
protected $criteria
```

***

### projection

```php
protected $projection
```

***

### limit

```php
protected $limit
```

***

### skip

```php
protected $skip
```

***

### sort

```php
protected $sort
```

***

## Methods

### __construct

```php
public __construct(mixed $collection, mixed $criteria, mixed $projection = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$criteria` | **mixed** |  |
| `$projection` | **mixed** |  |

***

### count

```php
public count(): mixed
```

***

### limit

```php
public limit(mixed $limit): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |

***

### sort

```php
public sort(mixed $sorts): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sorts` | **mixed** |  |

***

### skip

```php
public skip(mixed $skip): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$skip` | **mixed** |  |

***

### each

```php
public each(mixed $callable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |

***

### rewind

```php
public rewind(): mixed
```

***

### toArray

```php
public toArray(): mixed
```

***

### getData

```php
protected getData(): mixed
```

***

### current

```php
public current(): mixed
```

***

### key

```php
public key(): mixed
```

***

### next

```php
public next(): mixed
```

***

### valid

```php
public valid(): mixed
```

***


***

