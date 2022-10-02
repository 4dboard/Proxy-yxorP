***

# EnumMap

A specialized map implementation for use with enum type keys.

All of the keys in an enum map must come from a single enum type that is specified, when the map is created. Enum
maps are represented internally as arrays. This representation is extremely compact and efficient.

Enum maps are maintained in the natural order of their keys (the order in which the enum constants are declared).
This is reflected in the iterators returned by the collection views {@see} and
{@see}.

Iterators returned by the collection views are not consistent: They may or may not show the effects of modifications
to the map that occur while the iteration is in progress.

* Full name: `\DASPRiD\Enum\EnumMap`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Serializable`](../../Serializable.md), [`\IteratorAggregate`](../../IteratorAggregate.md)
* This class is a **Final class**

## Properties

### keyType

The class name of the key.

```php
private string $keyType
```

***

### valueType

The type of the value.

```php
private string $valueType
```

***

### allowNullValues

```php
private bool $allowNullValues
```

***

### keyUniverse

All of the constants comprising the enum, cached for performance.

```php
private array&lt;int,\DASPRiD\Enum\AbstractEnum&gt; $keyUniverse
```

***

### values

Array representation of this map. The ith element is the value to which universe[i] is currently mapped, or null
if it isn't mapped to anything, or NullValue if it's mapped to null.

```php
private array&lt;int,mixed&gt; $values
```

***

### size

```php
private int $size
```

***

## Methods

### __construct

Creates a new enum map.

```php
public __construct(string $keyType, string $valueType, bool $allowNullValues): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** | the type of the keys, must extend AbstractEnum |
| `$valueType` | **string** | the type of the values |
| `$allowNullValues` | **bool** | whether to allow null values |

***

### expect

Checks whether the map types match the supplied ones.

```php
public expect(string $keyType, string $valueType, bool $allowNullValues): void
```

You should call this method when an EnumMap is passed to you and you want to ensure that it's made up of the
correct types.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** |  |
| `$valueType` | **string** |  |
| `$allowNullValues` | **bool** |  |

***

### size

Returns the number of key-value mappings in this map.

```php
public size(): int
```

***

### containsValue

Returns true if this map maps one or more keys to the specified value.

```php
public containsValue(mixed $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### containsKey

Returns true if this map contains a mapping for the specified key.

```php
public containsKey(\DASPRiD\Enum\AbstractEnum $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\DASPRiD\Enum\AbstractEnum** |  |

***

### get

Returns the value to which the specified key is mapped, or null if this map contains no mapping for the key.

```php
public get(\DASPRiD\Enum\AbstractEnum $key): mixed
```

More formally, if this map contains a mapping from a key to a value, then this method returns the value;
otherwise it returns null (there can be at most one such mapping).

A return value of null does not necessarily indicate that the map contains no mapping for the key; it's also
possible that hte map explicitly maps the key to null. The {@see} operation may be used to
distinguish these two cases.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\DASPRiD\Enum\AbstractEnum** |  |

***

### put

Associates the specified value with the specified key in this map.

```php
public put(\DASPRiD\Enum\AbstractEnum $key, mixed $value): mixed
```

If the map previously contained a mapping for this key, the old value is replaced.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\DASPRiD\Enum\AbstractEnum** |  |
| `$value` | **mixed** |  |

**Return Value:**

the previous value associated with the specified key, or null if there was no mapping for the key.
(a null return can also indicate that the map previously associated null with the specified key.)



***

### remove

Removes the mapping for this key frm this map if present.

```php
public remove(\DASPRiD\Enum\AbstractEnum $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\DASPRiD\Enum\AbstractEnum** |  |

**Return Value:**

the previous value associated with the specified key, or null if there was no mapping for the key.
(a null return can also indicate that the map previously associated null with the specified key.)



***

### clear

Removes all mappings from this map.

```php
public clear(): void
```

***

### equals

Compares the specified map with this map for quality.

```php
public equals(self $other): bool
```

Returns true if the two maps represent the same mappings.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$other` | **self** |  |

***

### values

Returns the values contained in this map.

```php
public values(): array
```

The array will contain the values in the order their corresponding keys appear in the map, which is their natural
order (the order in which the num constants are declared).









***

### serialize

```php
public serialize(): string
```

***

### unserialize

```php
public unserialize(mixed $serialized): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serialized` | **mixed** |  |

***

### getIterator

```php
public getIterator(): \Traversable
```

***

### maskNull

```php
private maskNull(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### unmaskNull

```php
private unmaskNull(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### checkKeyType

```php
private checkKeyType(\DASPRiD\Enum\AbstractEnum $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\DASPRiD\Enum\AbstractEnum** |  |

***

### isValidValue

```php
private isValidValue(mixed $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***


***

