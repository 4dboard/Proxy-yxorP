***

# PsrCachedReader

A cache aware annotation reader.



* Full name: `\Doctrine\Common\Annotations\PsrCachedReader`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Doctrine\Common\Annotations\Reader`](./Reader.md)
* This class is a **Final class**



## Properties


### delegate



```php
private \Doctrine\Common\Annotations\Reader $delegate
```






***

### cache



```php
private \Psr\Cache\CacheItemPoolInterface $cache
```






***

### debug



```php
private bool $debug
```






***

### loadedAnnotations



```php
private array&lt;string,object[]&gt; $loadedAnnotations
```






***

### loadedFilemtimes



```php
private int[] $loadedFilemtimes
```






***

## Methods


### __construct



```php
public __construct(\Doctrine\Common\Annotations\Reader $reader, \Psr\Cache\CacheItemPoolInterface $cache, bool $debug = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |
| `$cache` | **\Psr\Cache\CacheItemPoolInterface** |  |
| `$debug` | **bool** |  |




***

### getClassAnnotations

Gets the annotations applied to a class.

```php
public getClassAnnotations(\ReflectionClass $class): object[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** | The ReflectionClass of the class from which<br />the class annotations should be read. |


**Return Value:**

An array of Annotations.



***

### getClassAnnotation

Gets a class annotation.

```php
public getClassAnnotation(\ReflectionClass $class, mixed $annotationName): \Doctrine\Common\Annotations\T|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** | The ReflectionClass of the class from which<br />the class annotations should be read. |
| `$annotationName` | **mixed** | The name of the annotation. |


**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### getPropertyAnnotations

Gets the annotations applied to a property.

```php
public getPropertyAnnotations(\ReflectionProperty $property): object[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\ReflectionProperty** | The ReflectionProperty of the property<br />from which the annotations should be read. |


**Return Value:**

An array of Annotations.



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

### getMethodAnnotations

Gets the annotations applied to a method.

```php
public getMethodAnnotations(\ReflectionMethod $method): object[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\ReflectionMethod** | The ReflectionMethod of the method from which<br />the annotations should be read. |


**Return Value:**

An array of Annotations.



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

### clearLoadedAnnotations



```php
public clearLoadedAnnotations(): void
```











***

### fetchFromCache



```php
private fetchFromCache(string $cacheKey, \ReflectionClass $class, string $method, \Reflector $reflector): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cacheKey` | **string** |  |
| `$class` | **\ReflectionClass** |  |
| `$method` | **string** |  |
| `$reflector` | **\Reflector** |  |




***

### refresh

Used in debug mode to check if the cache is fresh.

```php
private refresh(string $cacheKey, \ReflectionClass $class): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cacheKey` | **string** |  |
| `$class` | **\ReflectionClass** |  |


**Return Value:**

Returns true if the cache was fresh, or false if the class
being read was modified since writing to the cache.



***

### getLastModification

Returns the time the class was last modified, testing traits and parents

```php
private getLastModification(\ReflectionClass $class): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **\ReflectionClass** |  |




***

### getTraitLastModificationTime



```php
private getTraitLastModificationTime(\ReflectionClass $reflectionTrait): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionTrait` | **\ReflectionClass** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
