***

# MediaType

The openapi annotation base class.



* Full name: `\OpenApi\Annotations\MediaType`
* Parent class: [`\OpenApi\Annotations\AbstractAnnotation`](./AbstractAnnotation.md)



## Properties


### mediaType

The key into Operation->content array.

```php
public string $mediaType
```






***

### schema

The schema defining the type used for the request body.

```php
public \OpenApi\Annotations\Schema $schema
```






***

### example

Example of the media type.

```php
public $example
```

The example object should be in the correct format as specified by the media type.
The example object is mutually exclusive of the examples object.
Furthermore, if referencing a schema which contains an example, the example value shall override the example provided by the schema.




***

### examples

Examples of the media type.

```php
public array $examples
```

Each example object should match the media type and specified schema if present.
The examples object is mutually exclusive of the example object.
Furthermore, if referencing a schema which contains an example, the examples value shall override the example provided by the schema.




***

### encoding

A map between a property name and its encoding information.

```php
public $encoding
```

The key, being the property name, must exist in the schema as a property.
The encoding object shall only apply to requestBody objects when the media type is multipart or application/x-www-form-urlencoded.




***

### _nested

Declarative mapping of Annotation types to properties.

```php
public static array $_nested
```



* This property is **static**.


***

### _parents

Reverse mapping of $_nested with the allowed parent annotations.

```php
public static string[] $_parents
```



* This property is **static**.


***



## Inherited methods


### __construct



```php
public __construct(array $properties): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |




***

### __get



```php
public __get(mixed $property): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |




***

### __set



```php
public __set(mixed $property, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **mixed** |  |
| `$value` | **mixed** |  |




***

### merge

Merge given annotations to their mapped properties configured in static::$_nested.

```php
public merge(\OpenApi\Annotations\AbstractAnnotation[] $annotations, bool $ignore = false): \OpenApi\Annotations\AbstractAnnotation[]
```

Annotations that couldn't be merged are added to the _unmerged array.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotations` | **\OpenApi\Annotations\AbstractAnnotation[]** |  |
| `$ignore` | **bool** | Ignore unmerged annotations |


**Return Value:**

The unmerged annotations



***

### mergeProperties

Merge the properties from the given object into this annotation.

```php
public mergeProperties(object $object): void
```

Prevents overwriting properties that are already configured.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |




***

### toYaml

Generate the documentation in YAML format.

```php
public toYaml(mixed $flags = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flags` | **mixed** |  |




***

### toJson

Generate the documentation in YAML format.

```php
public toJson(mixed $flags = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flags` | **mixed** |  |




***

### __debugInfo



```php
public __debugInfo(): mixed
```











***

### jsonSerialize

Customize the way json_encode() renders the annotations.

```php
public jsonSerialize(): mixed
```











***

### validate

Validate annotation tree, and log notices & warnings.

```php
public validate(array $parents = [], array $skip = [], string $ref = &#039;&#039;): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parents` | **array** | the path of annotations above this annotation in the tree |
| `$skip` | **array** | (prevent stack overflow, when traversing an infinite dependency graph) |
| `$ref` | **string** |  |




***

### _validate

Recursively validate all annotation properties.

```php
private static _validate(array|object $fields, array $parents, array $skip, string $baseRef): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **array&#124;object** |  |
| `$parents` | **array** | the path of annotations above this annotation in the tree |
| `$skip` | **array** | List of objects already validated |
| `$baseRef` | **string** |  |




***

### identity

Return a identity for easy debugging.

```php
public identity(): string
```

Example: "@OA\Get(path="/pets")".









***

### isRoot

An annotation is a root if it is the top-level / outermost annotation in a PHP docblock.

```php
public isRoot(): bool
```











***

### matchNested

Find matching nested details.

```php
public static matchNested(string $class): null|object
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | the class to match |


**Return Value:**

key/value object or `null`



***

### _identity

Helper for generating the identity().

```php
protected _identity(array $properties): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |




***

### validateType

Validates the matching of the property value to a annotation type.

```php
private validateType(string $type, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The annotations property type |
| `$value` | **mixed** | The property value |




***

### validateDefaultTypes

Validates default Open Api types.

```php
private validateDefaultTypes(string $type, mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The property type |
| `$value` | **mixed** | The value to validate |




***

### validateArrayType

Validate array type.

```php
private validateArrayType(mixed $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### nested

Wrap the context with a reference to the annotation it is nested in.

```php
private nested(\OpenApi\Annotations\AbstractAnnotation $annotation, \OpenApi\Context $nestedContext): \OpenApi\Annotations\AbstractAnnotation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **\OpenApi\Annotations\AbstractAnnotation** |  |
| `$nestedContext` | **\OpenApi\Context** |  |




***


***

