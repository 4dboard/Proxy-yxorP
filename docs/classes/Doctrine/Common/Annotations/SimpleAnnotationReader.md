***

# SimpleAnnotationReader

Simple Annotation Reader.

This annotation reader is intended to be used in projects where you have
full-control over all annotations that are available.

* Full name: `\Doctrine\Common\Annotations\SimpleAnnotationReader`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Doctrine\Common\Annotations\Reader`](./Reader.md)



## Properties


### parser



```php
private \Doctrine\Common\Annotations\DocParser $parser
```






***

## Methods


### __construct

Initializes a new SimpleAnnotationReader.

```php
public __construct(): mixed
```











***

### addNamespace

Adds a namespace in which we will look for annotations.

```php
public addNamespace(string $namespace): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |




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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
