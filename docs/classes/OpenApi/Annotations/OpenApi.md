***

# OpenApi

The openapi annotation base class.

* Full name: `\OpenApi\Annotations\OpenApi`
* Parent class: [`\OpenApi\Annotations\AbstractAnnotation`](./AbstractAnnotation.md)

## Properties

### openapi

The semantic version number of the OpenAPI Specification version that the OpenAPI document uses.

```php
public string $openapi
```

The openapi field should be used by tooling specifications and clients to interpret the OpenAPI document.
This is not related to the API info.version string.




***

### info

Provides metadata about the API. The metadata may be used by tooling as required.

```php
public \OpenApi\Annotations\Info $info
```

***

### servers

An array of Server Objects, which provide connectivity information to a target server.

```php
public \OpenApi\Annotations\Server[] $servers
```

If the servers property is not provided, or is an empty array, the default value would be a Server Object with a url
value of /.




***

### paths

The available paths and operations for the API.

```php
public \OpenApi\Annotations\PathItem[] $paths
```

***

### components

An element to hold various components for the specification.

```php
public \OpenApi\Annotations\Components $components
```

***

### security

Lists the required security schemes to execute this operation.

```php
public array $security
```

The name used for each property must correspond to a security scheme declared
in the Security Schemes under the Components Object.
Security Requirement Objects that contain multiple schemes require that
all schemes must be satisfied for a request to be authorized.
This enables support for scenarios where multiple query parameters or
HTTP headers are required to convey security information.
When a list of Security Requirement Objects is defined on the Open API object or
Operation Object, only one of Security Requirement Objects in the list needs to
be satisfied to authorize the request.




***

### tags

A list of tags used by the specification with additional metadata.

```php
public \OpenApi\Annotations\Tag[] $tags
```

The order of the tags can be used to reflect on their order by the parsing tools.
Not all tags that are used by the Operation Object must be declared.
The tags that are not declared may be organized randomly or based on the tools' logic.
Each tag name in the list must be unique.




***

### externalDocs

Additional external documentation.

```php
public \OpenApi\Annotations\ExternalDocumentation $externalDocs
```

***

### _analysis

```php
public \OpenApi\Analysis $_analysis
```

***

### _blacklist

List of properties are blacklisted from the JSON output.

```php
public static array $_blacklist
```

* This property is **static**.

***

### _required

The properties which are required
by [the spec](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md).

```php
public static array $_required
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

### _types

Specify the type of the property.

```php
public static array $_types
```

* This property is **static**.

***

## Methods

### validate

Validate annotation tree, and log notices & warnings.

```php
public validate(array $parents = null, array $skip = null, string $ref = &#039;&#039;): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parents` | **array** | the path of annotations above this annotation in the tree |
| `$skip` | **array** | (prevent stack overflow, when traversing an infinite dependency graph) |
| `$ref` | **string** |  |

***

### saveAs

Save the OpenAPI documentation to a file.

```php
public saveAs(string $filename, string $format = &#039;auto&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$format` | **string** |  |

***

### ref

Look up an annotation with a $ref url.

```php
public ref(string $ref): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ref` | **string** | The $ref value, for example: &quot;#/components/schemas/Product&quot; |

***

### resolveRef

Recursive helper for ref().

```php
private static resolveRef(string $ref, string $resolved, mixed $container, array $mapping): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ref` | **string** |  |
| `$resolved` | **string** |  |
| `$container` | **mixed** |  |
| `$mapping` | **array** |  |

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

