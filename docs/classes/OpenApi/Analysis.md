***

# Analysis

Result of the analyser.

Pretends to be an array of annotations, but also contains detected classes
and helper functions for the processors.

* Full name: `\OpenApi\Analysis`

## Properties

### annotations

```php
public \SplObjectStorage $annotations
```

***

### classes

Class definitions.

```php
public array $classes
```

***

### traits

Trait definitions.

```php
public array $traits
```

***

### interfaces

Interface definitions.

```php
public array $interfaces
```

***

### openapi

The target OpenApi annotation.

```php
public \OpenApi\Annotations\OpenApi $openapi
```

***

### context

```php
public \OpenApi\Context $context
```

***

### processors

Registry for the post-processing operations.

```php
private static callable[] $processors
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(array $annotations = [], \OpenApi\Context $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotations` | **array** |  |
| `$context` | **\OpenApi\Context** |  |

***

### addAnnotation

```php
public addAnnotation(mixed $annotation, ?\OpenApi\Context $context): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **mixed** |  |
| `$context` | **?\OpenApi\Context** |  |

***

### addAnnotations

```php
public addAnnotations(array $annotations, ?\OpenApi\Context $context): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotations` | **array** |  |
| `$context` | **?\OpenApi\Context** |  |

***

### addClassDefinition

```php
public addClassDefinition(array $definition): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array** |  |

***

### addInterfaceDefinition

```php
public addInterfaceDefinition(array $definition): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array** |  |

***

### addTraitDefinition

```php
public addTraitDefinition(array $definition): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array** |  |

***

### addAnalysis

```php
public addAnalysis(\OpenApi\Analysis $analysis): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |

***

### getSubClasses

Get all sub classes of the given parent class.

```php
public getSubClasses(string $parent): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **string** | the parent class |

**Return Value:**

map of class => definition pairs of sub-classes



***

### getSuperClasses

Get a list of all super classes for the given class.

```php
public getSuperClasses(string $class, bool $direct = false): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | the class name |
| `$direct` | **bool** | flag to find only the actual class parents |

**Return Value:**

map of class => definition pairs of parent classes



***

### getInterfacesOfClass

Get the list of interfaces used by the given class or by classes which it extends.

```php
public getInterfacesOfClass(string $class, bool $direct = false): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | the class name |
| `$direct` | **bool** | flag to find only the actual class interfaces |

**Return Value:**

map of class => definition pairs of interfaces



***

### getTraitsOfClass

Get the list of traits used by the given class/trait or by classes which it extends.

```php
public getTraitsOfClass(string $source, bool $direct = false): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | the source name |
| `$direct` | **bool** | flag to find only the actual class traits |

**Return Value:**

map of class => definition pairs of traits



***

### getAnnotationsOfType

```php
public getAnnotationsOfType(string $class, bool $strict = false): \OpenApi\Annotations\AbstractAnnotation[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$strict` | **bool** | in non-strict mode child classes are also detected |

***

### getSchemaForSource

```php
public getSchemaForSource(string $fqdn): ?\OpenApi\Annotations\Schema
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqdn` | **string** | the source class/interface/trait |

***

### getContext

```php
public getContext(object $annotation): \OpenApi\Context
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **object** |  |

***

### merged

Build an analysis with only the annotations that are merged into the OpenAPI annotation.

```php
public merged(): \OpenApi\Analysis
```

***

### unmerged

Analysis with only the annotations that not merged.

```php
public unmerged(): \OpenApi\Analysis
```

***

### split

Split the annotation into two analysis.

```php
public split(): object
```

One with annotations that are merged and one with annotations that are not merged.

**Return Value:**

{merged: Analysis, unmerged: Analysis}



***

### process

Apply the processor(s).

```php
public process(\Closure|\Closure[] $processors = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **\Closure&#124;\Closure[]** | One or more processors |

***

### processors

Get direct access to the processors array.

```php
public static processors(): array
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

reference



***

### registerProcessor

Register a processor.

```php
public static registerProcessor(\Closure $processor): void
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\Closure** |  |

***

### unregisterProcessor

Unregister a processor.

```php
public static unregisterProcessor(\Closure $processor): void
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **\Closure** |  |

***

### validate

```php
public validate(): bool
```

***


***

