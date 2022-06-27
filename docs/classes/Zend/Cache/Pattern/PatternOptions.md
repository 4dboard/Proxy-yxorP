***

# PatternOptions

* Full name: `\Zend\Cache\Pattern\PatternOptions`
* Parent class: [`\Zend\Stdlib\AbstractOptions`](../../Stdlib/AbstractOptions.md)

## Properties

### cacheByDefault

Used by:

- ClassCache
- ObjectCache

```php
protected bool $cacheByDefault
```

***

### cacheOutput

Used by:

- CallbackCache
- ClassCache
- ObjectCache

```php
protected bool $cacheOutput
```

***

### class

Used by:

- ClassCache

```php
protected null|string $class
```

***

### classCacheMethods

Used by:

- ClassCache

```php
protected array $classCacheMethods
```

***

### classNonCacheMethods

Used by:

- ClassCache

```php
protected array $classNonCacheMethods
```

***

### umask

Used by:

- CaptureCache

```php
protected false|int $umask
```

***

### dirPermission

Used by:

- CaptureCache

```php
protected false|int $dirPermission
```

***

### filePermission

Used by:

- CaptureCache

```php
protected false|int $filePermission
```

***

### fileLocking

Used by:

- CaptureCache

```php
protected bool $fileLocking
```

***

### indexFilename

Used by:

- CaptureCache

```php
protected string $indexFilename
```

***

### object

Used by:

- ObjectCache

```php
protected null|object $object
```

***

### objectCacheMagicProperties

Used by:

- ObjectCache

```php
protected bool $objectCacheMagicProperties
```

***

### objectCacheMethods

Used by:

- ObjectCache

```php
protected array $objectCacheMethods
```

***

### objectKey

Used by:

- ObjectCache

```php
protected null|string $objectKey
```

***

### objectNonCacheMethods

Used by:

- ObjectCache

```php
protected array $objectNonCacheMethods
```

***

### publicDir

Used by:

- CaptureCache

```php
protected null|string $publicDir
```

***

### storage

Used by:

- CallbackCache
- ClassCache
- ObjectCache
- OutputCache

```php
protected null|\Zend\Cache\Storage\StorageInterface $storage
```

***

## Methods

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setCacheByDefault

Set flag indicating whether or not to cache by default

```php
public setCacheByDefault(bool $cacheByDefault): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- ClassCache
- ObjectCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cacheByDefault` | **bool** |  |

***

### getCacheByDefault

Do we cache by default?

```php
public getCacheByDefault(): bool
```

Used by:

- ClassCache
- ObjectCache

***

### setCacheOutput

Set whether or not to cache output

```php
public setCacheOutput(bool $cacheOutput): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- CallbackCache
- ClassCache
- ObjectCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cacheOutput` | **bool** |  |

***

### getCacheOutput

Will we cache output?

```php
public getCacheOutput(): bool
```

Used by:

- CallbackCache
- ClassCache
- ObjectCache

***

### setClass

Set class name

```php
public setClass(string $class): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- ClassCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |

***

### getClass

Get class name

```php
public getClass(): null|string
```

Used by:

- ClassCache

***

### setClassCacheMethods

Set list of method return values to cache

```php
public setClassCacheMethods(array $classCacheMethods): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- ClassCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classCacheMethods` | **array** |  |

***

### getClassCacheMethods

Get list of methods from which to cache return values

```php
public getClassCacheMethods(): array
```

Used by:

- ClassCache

***

### setClassNonCacheMethods

Set list of method return values NOT to cache

```php
public setClassNonCacheMethods(array $classNonCacheMethods): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- ClassCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classNonCacheMethods` | **array** |  |

***

### getClassNonCacheMethods

Get list of methods from which NOT to cache return values

```php
public getClassNonCacheMethods(): array
```

Used by:

- ClassCache

***

### setDirPermission

Set directory permission

```php
public setDirPermission(false|int $dirPermission): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirPermission` | **false&#124;int** |  |

***

### getDirPermission

Gets directory permission

```php
public getDirPermission(): false|int
```

***

### setUmask

Set umask

```php
public setUmask(false|int $umask): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- CaptureCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$umask` | **false&#124;int** |  |

***

### getUmask

Get umask

```php
public getUmask(): false|int
```

Used by:

- CaptureCache

***

### setFileLocking

Set whether or not file locking should be used

```php
public setFileLocking(bool $fileLocking): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- CaptureCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileLocking` | **bool** |  |

***

### getFileLocking

Is file locking enabled?

```php
public getFileLocking(): bool
```

Used by:

- CaptureCache

***

### setFilePermission

Set file permission

```php
public setFilePermission(false|int $filePermission): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePermission` | **false&#124;int** |  |

***

### getFilePermission

Gets file permission

```php
public getFilePermission(): false|int
```

***

### setIndexFilename

Set value for index filename

```php
public setIndexFilename(string $indexFilename): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indexFilename` | **string** |  |

***

### getIndexFilename

Get value for index filename

```php
public getIndexFilename(): string
```

***

### setObject

Set object to cache

```php
public setObject(mixed $object): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |

***

### getObject

Get object to cache

```php
public getObject(): null|object
```

***

### setObjectCacheMagicProperties

Set flag indicating whether or not to cache magic properties

```php
public setObjectCacheMagicProperties(bool $objectCacheMagicProperties): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- ObjectCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectCacheMagicProperties` | **bool** |  |

***

### getObjectCacheMagicProperties

Should we cache magic properties?

```php
public getObjectCacheMagicProperties(): bool
```

Used by:

- ObjectCache

***

### setObjectCacheMethods

Set list of object methods for which to cache return values

```php
public setObjectCacheMethods(array $objectCacheMethods): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectCacheMethods` | **array** |  |

***

### getObjectCacheMethods

Get list of object methods for which to cache return values

```php
public getObjectCacheMethods(): array
```

***

### setObjectKey

Set the object key part.

```php
public setObjectKey(null|string $objectKey): \Zend\Cache\Pattern\PatternOptions
```

Used to generate a callback key in order to speed up key generation.

Used by:

- ObjectCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectKey` | **null&#124;string** | The object key or NULL to use the objects class name |

***

### getObjectKey

Get object key

```php
public getObjectKey(): string
```

Used by:

- ObjectCache

***

### setObjectNonCacheMethods

Set list of object methods for which NOT to cache return values

```php
public setObjectNonCacheMethods(array $objectNonCacheMethods): \Zend\Cache\Pattern\PatternOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$objectNonCacheMethods` | **array** |  |

***

### getObjectNonCacheMethods

Get list of object methods for which NOT to cache return values

```php
public getObjectNonCacheMethods(): array
```

***

### setPublicDir

Set location of public directory

```php
public setPublicDir(string $publicDir): \Zend\Cache\Pattern\PatternOptions
```

Used by:

- CaptureCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicDir` | **string** |  |

***

### getPublicDir

Get location of public directory

```php
public getPublicDir(): null|string
```

Used by:

- CaptureCache

***

### setStorage

Set storage adapter

```php
public setStorage(string|array|\Zend\Cache\Storage\StorageInterface $storage): \Zend\Cache\Pattern\PatternOptions
```

Required for the following Pattern classes:

- CallbackCache
- ClassCache
- ObjectCache
- OutputCache

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **string&#124;array&#124;\Zend\Cache\Storage\StorageInterface** |  |

***

### getStorage

Get storage adapter

```php
public getStorage(): null|\Zend\Cache\Storage\StorageInterface
```

Used by:

- CallbackCache
- ClassCache
- ObjectCache
- OutputCache

***

### recursiveStrtolower

Recursively apply strtolower on all values of an array, and return as a list of unique values

```php
protected recursiveStrtolower(array $array): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |

***

### normalizeObjectMethods

Normalize object methods

```php
protected normalizeObjectMethods(array $methods): array
```

Recursively casts values to lowercase, then determines if any are in a list of methods not handled, raising an exception
if so.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methods` | **array** |  |

***

### storageFactory

Create a storage object from a given specification

```php
protected storageFactory(array|string|\Zend\Cache\Storage\StorageInterface $storage): \Zend\Cache\Storage\StorageInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **array&#124;string&#124;\Zend\Cache\Storage\StorageInterface** |  |

***

## Inherited methods

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
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
