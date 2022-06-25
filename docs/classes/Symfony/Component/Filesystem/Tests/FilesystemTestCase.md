***

# FilesystemTestCase

* Full name: `\Symfony\Component\Filesystem\Tests\FilesystemTestCase`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)

## Properties

### umask

```php
private $umask
```

***

### longPathNamesWindows

```php
protected $longPathNamesWindows
```

***

### filesystem

```php
protected \Symfony\Component\Filesystem\Filesystem $filesystem
```

***

### workspace

```php
protected string $workspace
```

***

### symlinkOnWindows

```php
private static $symlinkOnWindows
```

* This property is **static**.

***

## Methods

### setUpBeforeClass

```php
public static setUpBeforeClass(): mixed
```

* This method is **static**.

***

### setUp

```php
protected setUp(): mixed
```

***

### tearDown

```php
protected tearDown(): mixed
```

***

### assertFilePermissions

```php
protected assertFilePermissions(int $expectedFilePerms, string $filePath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedFilePerms` | **int** | expected file permissions as three digits (i.e. 755) |
| `$filePath` | **string** |  |

***

### getFileOwner

```php
protected getFileOwner(mixed $filepath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filepath` | **mixed** |  |

***

### getFileGroup

```php
protected getFileGroup(mixed $filepath): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filepath` | **mixed** |  |

***

### markAsSkippedIfSymlinkIsMissing

```php
protected markAsSkippedIfSymlinkIsMissing(mixed $relative = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relative` | **mixed** |  |

***

### markAsSkippedIfChmodIsMissing

```php
protected markAsSkippedIfChmodIsMissing(): mixed
```

***

### markAsSkippedIfPosixIsMissing

```php
protected markAsSkippedIfPosixIsMissing(): mixed
```

yxorP::get('REQUEST')
