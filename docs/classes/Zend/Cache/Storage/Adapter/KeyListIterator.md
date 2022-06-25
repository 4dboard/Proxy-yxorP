***

# KeyListIterator

* Full name: `\Zend\Cache\Storage\Adapter\KeyListIterator`
* This class implements:
  [`\Zend\Cache\Storage\IteratorInterface`](../IteratorInterface.md), [`\Countable`](../../../../Countable.md)

## Properties

### storage

The storage instance

```php
protected \Zend\Cache\Storage\StorageInterface $storage
```

***

### mode

The iterator mode

```php
protected int $mode
```

***

### keys

Keys to iterate over

```php
protected string[] $keys
```

***

### count

Number of keys

```php
protected int $count
```

***

### position

Current iterator position

```php
protected int $position
```

***

## Methods

### __construct

Constructor

```php
public __construct(\Zend\Cache\Storage\StorageInterface $storage, array $keys): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **\Zend\Cache\Storage\StorageInterface** |  |
| `$keys` | **array** |  |

***

### getStorage

Get storage instance

```php
public getStorage(): \Zend\Cache\Storage\StorageInterface
```

***

### getMode

Get iterator mode

```php
public getMode(): int
```

**Return Value:**

Value of IteratorInterface::CURRENT_AS_*



***

### setMode

Set iterator mode

```php
public setMode(int $mode): \Zend\Cache\Storage\Adapter\KeyListIterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **int** |  |

**Return Value:**

Fluent interface



***

### current

Get current key, value or metadata.

```php
public current(): mixed
```

***

### key

Get current key

```php
public key(): string
```

***

### valid

Checks if current position is valid

```php
public valid(): bool
```

***

### next

Move forward to next element

```php
public next(): void
```

***

### rewind

Rewind the Iterator to the first element.

```php
public rewind(): void
```

***

### count

Count number of items

```php
public count(): int
```

yxorP::get('REQUEST')
