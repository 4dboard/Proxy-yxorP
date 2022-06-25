***

# Parameters

* Full name: `\Zend\Stdlib\Parameters`
* Parent class: [`ArrayObject`](../../ArrayObject.md)
* This class implements:
  [`\Zend\Stdlib\ParametersInterface`](./ParametersInterface.md)

## Methods

### __construct

Constructor

```php
public __construct(array $values = null): mixed
```

Enforces that we have an array, and enforces parameter access to array elements.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |

***

### fromArray

Populate from native PHP array

```php
public fromArray(array $values): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |

***

### fromString

Populate from query string

```php
public fromString(string $string): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### toArray

Serialize to native PHP array

```php
public toArray(): array
```

***

### toString

Serialize to query string

```php
public toString(): string
```

***

### offsetGet

Retrieve by key

```php
public offsetGet(string $name): mixed
```

Returns null if the key does not exist.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### get

Get

```php
public get(string $name, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$default` | **mixed** | optional default value |

***

### set

Set

```php
public set(string $name, mixed $value): \Zend\Stdlib\Parameters
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |

yxorP::get('REQUEST')
