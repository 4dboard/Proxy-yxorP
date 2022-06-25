***

# FilesLoader

Base loader for loading validation metadata from a list of files.

* Full name: `\Symfony\Component\Validator\Tests\Fixtures\FilesLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\FilesLoader`](../../Mapping/Loader/FilesLoader.md)
* This class is an **Abstract class**

## Properties

### timesCalled

```php
protected $timesCalled
```

***

### loader

```php
protected $loader
```

***

## Methods

### __construct

Creates a new loader.

```php
public __construct(array $paths, \Symfony\Component\Validator\Mapping\Loader\LoaderInterface $loader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | An array of file paths |
| `$loader` | **\Symfony\Component\Validator\Mapping\Loader\LoaderInterface** |  |

***

### getFileLoaderInstance

Creates a loader for the given file path.

```php
protected getFileLoaderInstance(mixed $file): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |

**Return Value:**

The created loader



***

### getTimesCalled

```php
public getTimesCalled(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[] $loaders): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loaders` | **\Symfony\Component\Validator\Mapping\Loader\LoaderInterface[]** | The metadata loaders to use |

***

### getFileLoaders

Returns an array of file loaders for the given file paths.

```php
protected getFileLoaders(array $paths): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **array** | An array of file paths |

**Return Value:**

The metadata loaders



***

### getFileLoaderInstance

Creates a loader for the given file path.

```php
protected getFileLoaderInstance(string $path): \Symfony\Component\Validator\Mapping\Loader\LoaderInterface
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The file path |

**Return Value:**

The created loader



***

### loadClassMetadata

Loads validation metadata into a {@link ClassMetadata} instance.

```php
public loadClassMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |

**Return Value:**

Whether the loader succeeded yxorP::get('REQUEST')
