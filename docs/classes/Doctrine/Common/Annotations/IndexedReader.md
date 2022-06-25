***

# IndexedReader

Allows the reader to be used in-place of Doctrine's reader.

* Full name: `\Doctrine\Common\Annotations\IndexedReader`
* This class implements:
  [`\Doctrine\Common\Annotations\Reader`](./Reader.md)

## Properties

### delegate

```php
private \Doctrine\Common\Annotations\Reader $delegate
```

***

## Methods

### __construct

```php
public __construct(\Doctrine\Common\Annotations\Reader $reader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\Reader** |  |

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

### getClassAnnotation

Gets a class annotation.

```php
public getClassAnnotation(\ReflectionClass $class, mixed $annotation): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **
\ReflectionClass** | The ReflectionClass of the class from which<br />the class annotations should be read. |
| `$annotation` | **mixed** |  |

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
| `$method` | **
\ReflectionMethod** | The ReflectionMethod of the method from which<br />the annotations should be read. |

**Return Value:**

An array of Annotations.



***

### getMethodAnnotation

Gets a method annotation.

```php
public getMethodAnnotation(\ReflectionMethod $method, mixed $annotation): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\ReflectionMethod** | The ReflectionMethod to read the annotations from. |
| `$annotation` | **mixed** |  |

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
| `$property` | **
\ReflectionProperty** | The ReflectionProperty of the property<br />from which the annotations should be read. |

**Return Value:**

An array of Annotations.



***

### getPropertyAnnotation

Gets a property annotation.

```php
public getPropertyAnnotation(\ReflectionProperty $property, mixed $annotation): \Doctrine\Common\Annotations\T|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\ReflectionProperty** | The ReflectionProperty to read the annotations from. |
| `$annotation` | **mixed** |  |

**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### __call

Proxies all methods to the delegate.

```php
public __call(string $method, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **array** |  |

yxorP::get('REQUEST')
