***

# FilesystemOptions

These are options specific to the Filesystem adapter

* Full name: `\Zend\Cache\Storage\Adapter\FilesystemOptions`
* Parent class: [`\Zend\Cache\Storage\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### cacheDir

Directory to store cache files

```php
protected null|string $cacheDir
```

***

### clearStatCache

Call clearstatcache enabled?

```php
protected bool $clearStatCache
```

***

### dirLevel

How much sub-directaries should be created?

```php
protected int $dirLevel
```

***

### dirPermission

Permission creating new directories

```php
protected false|int $dirPermission
```

***

### fileLocking

Lock files on writing

```php
protected bool $fileLocking
```

***

### filePermission

Permission creating new files

```php
protected false|int $filePermission
```

***

### keyPattern

Overwrite default key pattern

```php
protected string $keyPattern
```

Defined in AdapterOptions




***

### namespaceSeparator

Namespace separator

```php
protected string $namespaceSeparator
```

***

### noAtime

Don't get 'fileatime' as 'atime' on metadata

```php
protected bool $noAtime
```

***

### noCtime

Don't get 'filectime' as 'ctime' on metadata

```php
protected bool $noCtime
```

***

### umask

Umask to create files and directories

```php
protected false|int $umask
```

***

## Methods

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setCacheDir

Set cache dir

```php
public setCacheDir(string $cacheDir): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cacheDir` | **string** |  |

***

### getCacheDir

Get cache dir

```php
public getCacheDir(): null|string
```

***

### setClearStatCache

Set clear stat cache

```php
public setClearStatCache(bool $clearStatCache): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clearStatCache` | **bool** |  |

***

### getClearStatCache

Get clear stat cache

```php
public getClearStatCache(): bool
```

***

### setDirLevel

Set dir level

```php
public setDirLevel(int $dirLevel): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirLevel` | **int** |  |

***

### getDirLevel

Get dir level

```php
public getDirLevel(): int
```

***

### setDirPermission

Set permission to create directories on unix systems

```php
public setDirPermission(false|string|int $dirPermission): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirPermission` | **false&#124;string&#124;int** | FALSE to disable explicit permission or an octal number |

**See Also:**

* \Zend\Cache\Storage\Adapter\setUmask - * \Zend\Cache\Storage\Adapter\setFilePermission -
    * http://php.net/manual/function.chmod.php -

***

### getDirPermission

Get permission to create directories on unix systems

```php
public getDirPermission(): false|int
```

***

### setFileLocking

Set file locking

```php
public setFileLocking(bool $fileLocking): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileLocking` | **bool** |  |

***

### getFileLocking

Get file locking

```php
public getFileLocking(): bool
```

***

### setFilePermission

Set permission to create files on unix systems

```php
public setFilePermission(false|string|int $filePermission): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePermission` | **false&#124;string&#124;int** | FALSE to disable explicit permission or an octal number |

**See Also:**

* \Zend\Cache\Storage\Adapter\setUmask - * \Zend\Cache\Storage\Adapter\setDirPermission -
    * http://php.net/manual/function.chmod.php -

***

### getFilePermission

Get permission to create files on unix systems

```php
public getFilePermission(): false|int
```

***

### setNamespaceSeparator

Set namespace separator

```php
public setNamespaceSeparator(string $namespaceSeparator): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaceSeparator` | **string** |  |

***

### getNamespaceSeparator

Get namespace separator

```php
public getNamespaceSeparator(): string
```

***

### setNoAtime

Set no atime

```php
public setNoAtime(bool $noAtime): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$noAtime` | **bool** |  |

***

### getNoAtime

Get no atime

```php
public getNoAtime(): bool
```

***

### setNoCtime

Set no ctime

```php
public setNoCtime(bool $noCtime): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$noCtime` | **bool** |  |

***

### getNoCtime

Get no ctime

```php
public getNoCtime(): bool
```

***

### setUmask

Set the umask to create files and directories on unix systems

```php
public setUmask(false|string|int $umask): \Zend\Cache\Storage\Adapter\FilesystemOptions
```

Note: On multithreaded webservers it's better to explicit set file and dir permission.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$umask` | **false&#124;string&#124;int** | FALSE to disable umask or an octal number |

**See Also:**

* \Zend\Cache\Storage\Adapter\setFilePermission - * \Zend\Cache\Storage\Adapter\setDirPermission -
    * http://php.net/manual/function.umask.php - * http://en.wikipedia.org/wiki/Umask -

***

### getUmask

Get the umask to create files and directories on unix systems

```php
public getUmask(): false|int
```

***

## Inherited methods

### setAdapter

Adapter using this instance

```php
public setAdapter(\Zend\Cache\Storage\StorageInterface|null $adapter = null): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Zend\Cache\Storage\StorageInterface&#124;null** |  |

***

### setKeyPattern

Set key pattern

```php
public setKeyPattern(null|string $keyPattern): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyPattern` | **null&#124;string** |  |

***

### getKeyPattern

Get key pattern

```php
public getKeyPattern(): string
```

***

### setNamespace

Set namespace.

```php
public setNamespace(string $namespace): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### getNamespace

Get namespace

```php
public getNamespace(): string
```

***

### setReadable

Enable/Disable reading data from cache.

```php
public setReadable(bool $readable): \Zend\Cache\Storage\Adapter\AbstractAdapter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$readable` | **bool** |  |

***

### getReadable

If reading data from cache enabled.

```php
public getReadable(): bool
```

***

### setTtl

Set time to live.

```php
public setTtl(int|float $ttl): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### getTtl

Get time to live.

```php
public getTtl(): float
```

***

### setWritable

Enable/Disable writing data to cache.

```php
public setWritable(bool $writable): \Zend\Cache\Storage\Adapter\AdapterOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$writable` | **bool** |  |

***

### getWritable

If writing data to cache enabled.

```php
public getWritable(): bool
```

***

### triggerOptionEvent

Triggers an option event if this options instance has a connection to an adapter implements EventsCapableInterface.

```php
protected triggerOptionEvent(string $optionName, mixed $optionValue): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optionName` | **string** |  |
| `$optionValue` | **mixed** |  |

***

### normalizeTtl

Validates and normalize a TTL.

```php
protected normalizeTtl(int|float& $ttl): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ttl` | **int&#124;float** |  |

***

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setFromArray

Set one or more configuration properties

```php
public setFromArray(array|\Traversable|\Zend\Stdlib\AbstractOptions $options): \Zend\Stdlib\AbstractOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Stdlib\AbstractOptions** |  |

**Return Value:**

Provides fluent interface



***

### toArray

Cast to array

```php
public toArray(): array
```

***

### __set

Set a configuration property

```php
public __set(string $key, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__set() -

***

### __get

Get a configuration property

```php
public __get(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__get() -

***

### __isset

Test if a configuration property is null

```php
public __isset(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__isset() -

***

### __unset

Set a configuration property to NULL

```php
public __unset(string $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__unset() -

***


***

