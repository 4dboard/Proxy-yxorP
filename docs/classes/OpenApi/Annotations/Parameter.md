***

# Parameter

The openapi annotation base class.

* Full name: `\OpenApi\Annotations\Parameter`
* Parent class: [`\OpenApi\Annotations\AbstractAnnotation`](./AbstractAnnotation.md)

## Properties

### ref

$ref See https://swagger.io/docs/specification/using-ref/.

```php
public string $ref
```

***

### parameter

The key into Components->parameters or PathItem->parameters array.

```php
public string $parameter
```

***

### name

The name of the parameter.

```php
public string $name
```

Parameter names are case sensitive.
If in is "path", the name field must correspond to the associated path segment from the path field in the Paths Object.
If in is "header" and the name field is "Accept", "Content-Type" or "Authorization", the parameter definition shall be
ignored.
For all other cases, the name corresponds to the parameter name used by the in property.




***

### in

The location of the parameter.

```php
public string $in
```

Possible values are "query", "header", "path" or "cookie".




***

### description

A brief description of the parameter.

```php
public string $description
```

This could contain examples of use.
CommonMark syntax may be used for rich text representation.




***

### required

Determines whether this parameter is mandatory.

```php
public bool $required
```

If the parameter location is "path", this property is required and its value must be true.
Otherwise, the property may be included and its default value is false.




***

### deprecated

Specifies that a parameter is deprecated and should be transitioned out of usage.

```php
public bool $deprecated
```

***

### allowEmptyValue

Sets the ability to pass empty-valued parameters.

```php
public bool $allowEmptyValue
```

This is valid only for query parameters and allows sending a parameter with an empty value.
Default value is false. If style is used, and if behavior is n/a (cannot be serialized), the value of allowEmptyValue
shall be ignored.




***

### style

Describes how the parameter value will be serialized depending on the type of the parameter value.

```php
public string $style
```

Default values (based on value of in): for query - form; for path - simple; for header - simple; for cookie - form.




***

### explode

When this is true, parameter values of type array or object generate separate parameters for each value of the array or
key-value pair of the map.

```php
public bool $explode
```

For other types of parameters this property has no effect.
When style is form, the default value is true.
For all other styles, the default value is false.




***

### allowReserved

Determines whether the parameter value should allow reserved characters, as defined by RFC3986 :/?#[]@!$&'()*+,;= to be
included without percent-encoding.

```php
public bool $allowReserved
```

This property only applies to parameters with an in value of query.
The default value is false.




***

### schema

The schema defining the type used for the parameter.

```php
public \OpenApi\Annotations\Schema $schema
```

***

### example

Example of the media type.

```php
public $example
```

The example should match the specified schema and encoding properties if present.
The example object is mutually exclusive of the examples object.
Furthermore, if referencing a schema which contains an example, the example value shall override the example provided by
the schema.
To represent examples of media types that cannot naturally be represented in JSON or YAML, a string value can contain
the example with escaping where necessary.




***

### examples

Examples of the media type.

```php
public array $examples
```

Each example should contain a value in the correct format as specified in the parameter encoding.
The examples object is mutually exclusive of the example object.
Furthermore, if referencing a schema which contains an example, the examples value shall override the example provided
by the schema.




***

### content

A map containing the representations for the parameter.

```php
public \OpenApi\Annotations\MediaType[] $content
```

The key is the media type and the value describes it.
The map must only contain one entry.




***

### matrix

Path-style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.7.

```php
public $matrix
```

***

### label

Label style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.5.

```php
public $label
```

***

### form

Form style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.8
This option replaces collectionFormat with a csv (when explode is false) or multi (when explode is true) value from
OpenAPI 2.0.

```php
public $form
```

***

### simple

Simple style parameters defined by https://tools.ietf.org/html/rfc6570#section-3.2.2
This option replaces collectionFormat with a csv value from OpenAPI 2.0.

```php
public array $simple
```

***

### spaceDelimited

Space separated array values.

```php
public array $spaceDelimited
```

This option replaces collectionFormat equal to ssv from OpenAPI 2.0.




***

### pipeDelimited

Pipe separated array values.

```php
public array $pipeDelimited
```

This option replaces collectionFormat equal to pipes from OpenAPI 2.0.




***

### deepObject

Provides a simple way of rendering nested objects using form parameters.

```php
public $deepObject
```

***

### _required

The properties which are required
by [the spec](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md).

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

### _parents

Reverse mapping of $_nested with the allowed parent annotations.

```php
public static string[] $_parents
```

* This property is **static**.

***

## Methods

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

### identity

Return a identity for easy debugging.

```php
public identity(): string
```

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

