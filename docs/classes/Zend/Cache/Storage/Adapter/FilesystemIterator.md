***

# FilesystemIterator

* Full name: `\Zend\Cache\Storage\Adapter\FilesystemIterator`
* This class implements:
  [`\Zend\Cache\Storage\IteratorInterface`](../IteratorInterface.md)

## Properties

### storage

The Filesystem storage instance

```php
protected \Zend\Cache\Storage\Adapter\Filesystem $storage
```

***

### mode

The iterator mode

```php
protected int $mode
```

***

### globIterator

The GlobIterator instance

```php
protected \GlobIterator $globIterator
```

***

### prefix

The namespace sprefix

```php
protected string $prefix
```

***

### prefixLength

String length of namespace prefix

```php
protected int $prefixLength
```

***

## Methods

### __construct

Constructor

```php
public __construct(\Zend\Cache\Storage\Adapter\Filesystem $storage, string $path, string $prefix): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **\Zend\Cache\Storage\Adapter\Filesystem** |  |
| `$path` | **string** |  |
| `$prefix` | **string** |  |

***

### getStorage

Get storage instance

```php
public getStorage(): \Zend\Cache\Storage\Adapter\Filesystem
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
public setMode(int $mode): \Zend\Cache\Storage\Adapter\FilesystemIterator
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

### next

Move forward to next element

```php
public next(): void
```

***

### valid

Checks if current position is valid

```php
public valid(): bool
```

***

### rewind

Rewind the Iterator to the first element.

```php
public rewind(): bool
```

**Return Value:**

false if the operation failed. yxorP::get('REQUEST')
