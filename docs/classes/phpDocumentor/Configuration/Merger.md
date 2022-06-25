***

# Merger

Deep-merges any variable.

This class is capable of merging together arrays and objects of the same class; all other types of variables are
replaced. In addition this merger also supports the `Replace` annotation; this annotation can be placed on a property of
a class and will indicate that that property must not be merged but replaced in its entirety.

* Full name: `\phpDocumentor\Configuration\Merger`

## Properties

### reader

```php
private \Doctrine\Common\Annotations\AnnotationReader $reader
```

***

## Methods

### __construct

Initializes this merger with the annotation reader.

```php
public __construct(\Doctrine\Common\Annotations\AnnotationReader $reader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reader` | **\Doctrine\Common\Annotations\AnnotationReader** |  |

***

### run

Merges the source on top of the destination and returns the result.

```php
public run(mixed $destination, mixed $source, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **mixed** | The destination variable that will be overwritten with the data from the source. |
| `$source` | **mixed** | The source variable that should be merged over the destination. |
| `$default` | **
mixed** | For normal variables; only replace that variable if the provided source does<br />not equal this value. |

**Return Value:**

the merged variable.



***

### mergeObject

Deep-merge the source object over the destination object and return the results.

```php
private mergeObject(object $destinationObject, object $sourceObject): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destinationObject` | **object** |  |
| `$sourceObject` | **object** |  |

***

### mergeArray

Deep-merges the source array over the destination array.

```php
private mergeArray(array $destinationArray, array $sourceArray): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destinationArray` | **array** |  |
| `$sourceArray` | **array** |  |

***

### mergeProperty

Merges the two properties over eachother.

```php
private mergeProperty(object $destinationObject, \ReflectionProperty $destinationProperty, object $sourceObject, \ReflectionProperty $sourceProperty, array $defaultPropertyValues): object
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destinationObject` | **object** |  |
| `$destinationProperty` | **\ReflectionProperty** |  |
| `$sourceObject` | **object** |  |
| `$sourceProperty` | **\ReflectionProperty** |  |
| `$defaultPropertyValues` | **array** |  |

***

### shouldPropertyBeReplaced

Tests whether the value of the property should be replaced instead of merged by checking if it has the `Replace`
annotation.

```php
private shouldPropertyBeReplaced(\ReflectionProperty $destinationProperty): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destinationProperty` | **\ReflectionProperty** |  |

yxorP::get('REQUEST')
