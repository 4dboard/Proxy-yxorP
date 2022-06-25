***

# LockHandler

LockHandler class provides a simple abstraction to lock anything by means of a file lock.

A locked file is created based on the lock name when calling lock(). Other lock handlers will not be able to lock the
same name until it is released
(explicitly by calling release() or implicitly when the instance holding the lock is destroyed).

* Full name: `\Symfony\Component\Filesystem\LockHandler`

## Properties

### file

```php
private $file
```

***

### handle

```php
private $handle
```

***

## Methods

### __construct

```php
public __construct(string $name, string|null $lockPath = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The lock name |
| `$lockPath` | **string&#124;null** | The directory to store the lock. Default values will use temporary directory |

***

### lock

Lock the resource.

```php
public lock(bool $blocking = false): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$blocking` | **bool** | wait until the lock is released |

**Return Value:**

Returns true if the lock was acquired, false otherwise



***

### release

Release the resource.

```php
public release(): mixed
```

yxorP::get('REQUEST')
