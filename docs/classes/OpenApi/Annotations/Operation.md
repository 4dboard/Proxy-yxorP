***

# Operation

The openapi annotation base class.



* Full name: `\OpenApi\Annotations\Operation`
* Parent class: [`\OpenApi\Annotations\AbstractAnnotation`](./AbstractAnnotation.md)
* This class is an **Abstract class**



## Properties


### path

key in the OpenApi "Paths Object" for this operation.

```php
public string $path
```






***

### tags

A list of tags for API documentation control.

```php
public string[] $tags
```

Tags can be used for logical grouping of operations by resources or any other qualifier.




***

### method

Key in the OpenApi "Path Item Object" for this operation.

```php
public string $method
```

Allowed values: 'get', 'post', put', 'patch', 'delete', 'options', 'head' and 'trace'.




***

### summary

A short summary of what the operation does.

```php
public string $summary
```






***

### description

A verbose explanation of the operation behavior.

```php
public string $description
```

CommonMark syntax MAY be used for rich text representation.




***

### externalDocs

Additional external documentation for this operation.

```php
public \OpenApi\Annotations\ExternalDocumentation $externalDocs
```






***

### operationId

Unique string used to identify the operation.

```php
public string $operationId
```

The id must be unique among all operations described in the API.
Tools and libraries may use the operationId to uniquely identify an operation, therefore, it is recommended to follow common programming naming conventions.




***

### parameters

A list of parameters that are applicable for this operation.

```php
public \OpenApi\Annotations\Parameter[] $parameters
```

If a parameter is already defined at the Path Item, the new definition will override it but can never remove it.
The list must not include duplicated parameters.
A unique parameter is defined by a combination of a name and location.
The list can use the Reference Object to link to parameters that are defined at the OpenAPI Object's components/parameters.




***

### requestBody

The request body applicable for this operation.

```php
public \OpenApi\Annotations\RequestBody $requestBody
```

The requestBody is only supported in HTTP methods where the HTTP 1.1 specification RFC7231 has explicitly defined semantics for request bodies.
In other cases where the HTTP spec is vague, requestBody shall be ignored by consumers.




***

### responses

The list of possible responses as they are returned from executing this operation.

```php
public \OpenApi\Annotations\Response[] $responses
```






***

### callbacks

A map of possible out-of band callbacks related to the parent operation.

```php
public callable[] $callbacks
```

The key is a unique identifier for the Callback Object.
Each value in the map is a Callback Object that describes a request that may be initiated by the API provider and the expected responses.
The key value used to identify the callback object is an expression, evaluated at runtime, that identifies a URL to use for the callback operation.




***

### deprecated

Declares this operation to be deprecated.

```php
public bool $deprecated
```

Consumers should refrain from usage of the declared operation.
Default value is false.




***

### security

A declaration of which security mechanisms can be used for this operation.

```php
public array $security
```

The list of values includes alternative security requirement objects that can be used.
Only one of the security requirement objects need to be satisfied to authorize a request.
This definition overrides any declared top-level security.
To remove a top-level security declaration, an empty array can be used.




***

### servers

An alternative server array to service this operation.

```php
public \OpenApi\Annotations\Server[] $servers
```

If an alternative server object is specified at the Path Item Object or Root level, it will be overridden by this value.




***

### _required

The properties which are required by [the spec](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md).

```php
public static array $_required
```



* This property is **static**.


***

### _types

Specify the type of the property.

```php
public static array $_types
```



* This property is **static**.


***

### _nested

Declarative mapping of Annotation types to properties.

```php
public static array $_nested
```



* This property is **static**.


***

## Methods


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

