***

# ezcDocumentRstStack

RST document stack

* Full name: `\ezcDocumentRstStack`
* This class implements:
  [`\ArrayAccess`](./ArrayAccess.md), [`\Countable`](./Countable.md)

## Properties

### data

Data container for the document stack implementation

```php
protected array $data
```

***

### count

Number of elements on the stack

```php
protected int $count
```

We are caching this value for faster access performance, and because we are only using a very limited internal methods
which actually modify the satck.




***

## Methods

### __construct

Construct stack from array

```php
public __construct(array $array = array()): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |

***

### unshift

Prepend element to the document stack

```php
public unshift(mixed $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **mixed** |  |

***

### push

Prepend element to the document stack

```php
public push(mixed $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **mixed** |  |

***

### shift

Get element from the beginning of the stack

```php
public shift(): mixed
```

***

### prepend

Prepend another array to the stack

```php
public prepend(array $data): void
```

Prepends an array with tokens to the current stack. Equivalent to calling $array = array_merge( $data, $array ); with
common array functions.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |

***

### asArray

Get stack contents as plain PHP array

```php
public asArray(mixed $limit = null): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |

***

### offsetExists

Returns if the given offset exists.

```php
public offsetExists(string $key): bool
```

This method is part of the ArrayAccess interface to allow access to the data of this object as if it was an array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### offsetGet

Returns the element with the given offset.

```php
public offsetGet(string $key): mixed
```

This method is part of the ArrayAccess interface to allow access to the data of this object as if it was an array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### offsetSet

Set the element with the given offset.

```php
public offsetSet(string $key, mixed $value): void
```

This method is part of the ArrayAccess interface to allow access to the data of this object as if it was an array.

Setting of not yet existing offsets in the stack is not allowed and will return a ezcBaseValueException.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### offsetUnset

Unset the element with the given offset.

```php
public offsetUnset(string $key): void
```

This method is part of the ArrayAccess interface to allow access to the

Is not permitted for this stack implementation.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

***

### rewind

Selects the very first dataset and returns it.

```php
public rewind(): mixed
```

This method is part of the Iterator interface to allow access to the datasets of this row by iterating over it like an
array (e.g. using foreach).









***

### count

Returns the number of datasets in the row.

```php
public count(): int
```

This method is part of the Countable interface to allow the usage of PHP's count() function to check how many datasets
exist.

yxorP::get('REQUEST')
