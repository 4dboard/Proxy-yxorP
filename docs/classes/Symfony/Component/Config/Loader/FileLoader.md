***

# FileLoader

FileLoader is the abstract class used by all built-in loaders that are file based.

* Full name: `\Symfony\Component\Config\Loader\FileLoader`
* Parent class: [`\Symfony\Component\Config\Loader\Loader`](./Loader.md)
* This class is an **Abstract class**

## Properties

### loading

```php
protected static $loading
```

* This property is **static**.

***

### locator

```php
protected $locator
```

***

### currentDir

```php
private $currentDir
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Config\FileLocatorInterface $locator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locator` | **\Symfony\Component\Config\FileLocatorInterface** |  |

***

### setCurrentDir

Sets the current directory.

```php
public setCurrentDir(string $dir): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |

***

### getLocator

Returns the file locator used by this loader.

```php
public getLocator(): \Symfony\Component\Config\FileLocatorInterface
```

***

### import

Imports a resource.

```php
public import(mixed $resource, string|null $type = null, bool $ignoreErrors = false, string|null $sourceResource = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A Resource |
| `$type` | **string&#124;null** | The resource type or null if unknown |
| `$ignoreErrors` | **bool** | Whether to ignore import errors or not |
| `$sourceResource` | **string&#124;null** | The original resource importing the new resource |

***

## Inherited methods

### getResolver

Gets the loader resolver.

```php
public getResolver(): \Symfony\Component\Config\Loader\LoaderResolverInterface
```

**Return Value:**

A LoaderResolverInterface instance



***

### setResolver

Sets the loader resolver.

```php
public setResolver(\Symfony\Component\Config\Loader\LoaderResolverInterface $resolver): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resolver` | **\Symfony\Component\Config\Loader\LoaderResolverInterface** |  |

***

### import

Imports a resource.

```php
public import(mixed $resource, string|null $type = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$type` | **string&#124;null** | The resource type or null if unknown |

***

### resolve

Finds a loader able to load an imported resource.

```php
public resolve(mixed $resource, string|null $type = null): $this|\Symfony\Component\Config\Loader\LoaderInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$type` | **string&#124;null** | The resource type or null if unknown |

yxorP::get('REQUEST')
