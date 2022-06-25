***

# AnnotationReader

A reader for docblock annotations.

* Full name: `\Doctrine\Common\Annotations\AnnotationReader`
* This class implements:
  [`\Doctrine\Common\Annotations\Reader`](./Reader.md)

## Properties

### globalImports

Global map for imports.

```php
private static array&lt;string,class-string&gt; $globalImports
```

* This property is **static**.

***

### globalIgnoredNames

A list with annotations that are not causing exceptions when not resolved to an annotation class.

```php
private static array&lt;string,true&gt; $globalIgnoredNames
```

The names are case sensitive.

* This property is **static**.

***

### globalIgnoredNamespaces

A list with annotations that are not causing exceptions when not resolved to an annotation class.

```php
private static array&lt;string,true&gt; $globalIgnoredNamespaces
```

The names are case sensitive.

* This property is **static**.

***

### parser

Annotations parser.

```php
private \Doctrine\Common\Annotations\DocParser $parser
```

***

### preParser

Annotations parser used to collect parsing metadata.

```php
private \Doctrine\Common\Annotations\DocParser $preParser
```

***

### phpParser

PHP parser used to collect imports.

```php
private \Doctrine\Common\Annotations\PhpParser $phpParser
```

***

### imports

In-memory cache mechanism to store imported annotations per class.

```php
private $imports
```

***

### ignoredAnnotationNames

In-memory cache mechanism to store ignored annotations per class.

```php
private $ignoredAnnotationNames
```

***

## Methods

### addGlobalIgnoredName

Add a new annotation to the globally ignored annotation names with regard to exception handling.

```php
public static addGlobalIgnoredName(string $name): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### addGlobalIgnoredNamespace

Add a new annotation to the globally ignored annotation namespaces with regard to exception handling.

```php
public static addGlobalIgnoredNamespace(string $namespace): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### __construct

Initializes a new AnnotationReader.

```php
public __construct(?\Doctrine\Common\Annotations\DocParser $parser = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **?\Doctrine\Common\Annotations\DocParser** |  |

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
| `$method` | **
\ReflectionMethod** | The ReflectionMethod of the method from which<br />the annotations should be read. |

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

### getFunctionAnnotations

Gets the annotations applied to a function.

```php
public getFunctionAnnotations(\ReflectionFunction $function): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **\ReflectionFunction** |  |

***

### getFunctionAnnotation

Gets a function annotation.

```php
public getFunctionAnnotation(\ReflectionFunction $function, string $annotationName): object|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **\ReflectionFunction** |  |
| `$annotationName` | **string** |  |

**Return Value:**

The Annotation or NULL, if the requested annotation does not exist.



***

### getIgnoredAnnotationNames

Returns the ignored annotations for the given class or function.

```php
private getIgnoredAnnotationNames(\ReflectionClass|\ReflectionFunction $reflection): array&lt;string,true&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflection` | **\ReflectionClass&#124;\ReflectionFunction** |  |

***

### getImports

Retrieves imports for a class or a function.

```php
private getImports(\ReflectionClass|\ReflectionFunction $reflection): array&lt;string,class-string&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflection` | **\ReflectionClass&#124;\ReflectionFunction** |  |

***

### getMethodImports

Retrieves imports for methods.

```php
private getMethodImports(\ReflectionMethod $method): array&lt;string,class-string&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\ReflectionMethod** |  |

***

### getPropertyImports

Retrieves imports for properties.

```php
private getPropertyImports(\ReflectionProperty $property): array&lt;string,class-string&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **\ReflectionProperty** |  |

***

### collectParsingMetadata

Collects parsing metadata for a given class or function.

```php
private collectParsingMetadata(\ReflectionClass|\ReflectionFunction $reflection): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflection` | **\ReflectionClass&#124;\ReflectionFunction** |  |

yxorP::get('REQUEST')
