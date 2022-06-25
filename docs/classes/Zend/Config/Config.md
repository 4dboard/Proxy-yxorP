***

# Config

Provides a property based interface to an array.

The data are read-only unless $allowModifications is set to true on construction.

Implements Countable, Iterator and ArrayAccess to facilitate easy access to the data.

* Full name: `\Zend\Config\Config`
* This class implements:
  [`\Countable`](../../Countable.md), [`\Iterator`](../../Iterator.md), [`\ArrayAccess`](../../ArrayAccess.md)

## Properties

### allowModifications

Whether modifications to configuration data are allowed.

```php
protected bool $allowModifications
```

***

### data

Data within the configuration.

```php
protected array $data
```

***

### skipNextIteration

Used when unsetting values during iteration to ensure we do not skip the next element.

```php
protected bool $skipNextIteration
```

***

## Methods

### __construct

Constructor.

```php
public __construct(array $array, bool $allowModifications = false): mixed
```

Data is read-only unless $allowModifications is set to true on construction.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |
| `$allowModifications` | **bool** |  |

***

### get

Retrieve a value and return $default if there is no element set.

```php
public get(string $name, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$default` | **mixed** |  |

***

### __get

Magic function so that $obj->value will work.

```php
public __get(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### __set

Set a value in the config.

```php
public __set(string $name, mixed $value): void
```

Only allow setting of a property if $allowModifications was set to true on construction. Otherwise, throw an exception.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |

***

### __clone

Deep clone of this instance to ensure that nested Zend\Configs are also cloned.

```php
public __clone(): void
```

***

### toArray

Return an associative array of the stored data.

```php
public toArray(): array
```

***

### __isset

isset() overloading

```php
public __isset(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### __unset

unset() overloading

```php
public __unset(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### count

count(): defined by Countable interface.

```php
public count(): int
```

**See Also:**

* \Countable::count() -

***

### current

current(): defined by Iterator interface.

```php
public current(): mixed
```

**See Also:**

* \Iterator::current() -

***

### key

key(): defined by Iterator interface.

```php
public key(): mixed
```

**See Also:**

* \Iterator::key() -

***

### next

next(): defined by Iterator interface.

```php
public next(): void
```

**See Also:**

* \Iterator::next() -

***

### rewind

rewind(): defined by Iterator interface.

```php
public rewind(): void
```

**See Also:**

* \Iterator::rewind() -

***

### valid

valid(): defined by Iterator interface.

```php
public valid(): bool
```

**See Also:**

* \Iterator::valid() -

***

### offsetExists

offsetExists(): defined by ArrayAccess interface.

```php
public offsetExists(mixed $offset): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \ArrayAccess::offsetExists() -

***

### offsetGet

offsetGet(): defined by ArrayAccess interface.

```php
public offsetGet(mixed $offset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \ArrayAccess::offsetGet() -

***

### offsetSet

offsetSet(): defined by ArrayAccess interface.

```php
public offsetSet(mixed $offset, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$value` | **mixed** |  |

**See Also:**

* \ArrayAccess::offsetSet() -

***

### offsetUnset

offsetUnset(): defined by ArrayAccess interface.

```php
public offsetUnset(mixed $offset): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |

**See Also:**

* \ArrayAccess::offsetUnset() -

***

### merge

Merge another Config with this one.

```php
public merge(\Zend\Config\Config $merge): \Zend\Config\Config
```

For duplicate keys, the following will be performed:

- Nested Configs will be recursively merged.
- Items in $merge with INTEGER keys will be appended.
- Items in $merge with STRING keys will overwrite current values.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$merge` | **\Zend\Config\Config** |  |

***

### setReadOnly

Prevent any more modifications being made to this instance.

```php
public setReadOnly(): void
```

Useful after merge() has been used to merge multiple Config objects into one object which should then not be modified
again.









***

### isReadOnly

Returns whether this Config object is read only or not.

```php
public isReadOnly(): bool
```

yxorP::get('REQUEST')
