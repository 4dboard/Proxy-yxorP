***

# FileCacheReader

File cache reader for annotations.

* Full name: `\Doctrine\Common\Annotations\FileCacheReader`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Doctrine\Common\Annotations\Reader`](./Reader.md)

## Properties

### reader

```php
private \Doctrine\Common\Annotations\Reader $reader
```

***

### dir

```php
private string $dir
```

***

### debug

```php
private bool $debug
```

***

### loadedAnnotations

```php
private $loadedAnnotations
```

***

### classNameHashes

```php
private array&lt;string,string&gt; $classNameHashes
```

***

### umask

```php
private int $umask
```

***

## Methods

### __construct

```php
public __construct(\Doctrine\Common\Annotations\Reader $reader, string $cacheDir, bool $debug = false, int $umask = 02): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |
| `$cacheDir` | **string** |  |
| `$debug` | **bool** |  |
| `$umask` | **int** |  |

***

### getClassAnnotations

Gets the annotations applied to a class.

```php
public getClassAnnotations(\ReflectionClass $class): object[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **
\ReflectionClass** | The ReflectionClass of the class from which<br />the class annotations should be read. |

**Return Value:**

An array of Annotations.



***

### getPropertyAnnotations

Gets the annotations applied to a property.

```php
public getPropertyAnnotations(\ReflectionProperty $property): object[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **
\ReflectionProperty** | The ReflectionProperty of the property<br />from which the annotations should be read. |

**Return Value:**

An array of Annotations.



***

### getMethodAnnotations

Gets the annotations applied to a method.

```php
public getMethodAnnotations(\ReflectionMethod $method): object[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **
\ReflectionMethod** | The ReflectionMethod of the method from which<br />the annotations should be read. |

**Return Value:**

An array of Annotations.



***

### saveCacheFile

Saves the cache file.

```php
private saveCacheFile(string $path, mixed $data): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$data` | **mixed** |  |

***

### getClassAnnotation

Gets a class annotation.

```php
public getClassAnnotation(\ReflectionClass $class, mixed $annotationName): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **
\ReflectionClass** | The ReflectionClass of the class from which<br />the class annotations should be read. |
| `$annotationName` | **mixed** | The name of the annotation. |

**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### getMethodAnnotation

Gets a method annotation.

```php
public getMethodAnnotation(\ReflectionMethod $method, mixed $annotationName): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\ReflectionMethod** | The ReflectionMethod to read the annotations from. |
| `$annotationName` | **mixed** | The name of the annotation. |

**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### getPropertyAnnotation

Gets a property annotation.

```php
public getPropertyAnnotation(\ReflectionProperty $property, mixed $annotationName): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\ReflectionProperty** | The ReflectionProperty to read the annotations from. |
| `$annotationName` | **mixed** | The name of the annotation. |

**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### clearLoadedAnnotations

Clears loaded annotations.

```php
public clearLoadedAnnotations(): void
```

yxorP::get('REQUEST')
