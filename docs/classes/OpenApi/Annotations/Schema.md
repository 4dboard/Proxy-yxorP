***

# Schema

The openapi annotation base class.

* Full name: `\OpenApi\Annotations\Schema`
* Parent class: [`\OpenApi\Annotations\AbstractAnnotation`](./AbstractAnnotation.md)

## Properties

### ref

$ref See https://swagger.io/docs/specification/using-ref/.

```php
public string $ref
```

***

### schema

The key into Components->schemas array.

```php
public string $schema
```

***

### title

Can be used to decorate a user interface with information about the data produced by this user interface. preferrably be
short.

```php
public string $title
```

***

### description

A description will provide explanation about the purpose of the instance described by this schema.

```php
public string $description
```

***

### maxProperties

An object instance is valid against "maxProperties" if its number of properties is less than, or equal to, the value of
this property.

```php
public int $maxProperties
```

***

### minProperties

An object instance is valid against "minProperties" if its number of properties is greater than, or equal to, the value
of this property.

```php
public int $minProperties
```

***

### required

An object instance is valid against this property if its property set contains all elements in this property's array
value.

```php
public string[] $required
```

***

### properties

```php
public \OpenApi\Annotations\Property[] $properties
```

***

### type

The type of the schema/property. The value MUST be one of "string", "number", "integer", "boolean", "array" or "object".

```php
public string $type
```

***

### format

The extending format for the previously mentioned type. See Data Type Formats for further details.

```php
public string $format
```

***

### items

Required if type is "array". Describes the type of items in the array.

```php
public \OpenApi\Annotations\Items $items
```

***

### collectionFormat

```php
public string $collectionFormat
```

***

### default

Sets a default value to the parameter. The type of the value depends on the defined type.
See http://json-schema.org/latest/json-schema-validation.html#anchor101.

```php
public $default
```

***

### maximum

See http://json-schema.org/latest/json-schema-validation.html#anchor17.

```php
public \OpenApi\Annotations\number $maximum
```

***

### exclusiveMaximum

See http://json-schema.org/latest/json-schema-validation.html#anchor17.

```php
public bool $exclusiveMaximum
```

***

### minimum

See http://json-schema.org/latest/json-schema-validation.html#anchor21.

```php
public \OpenApi\Annotations\number $minimum
```

***

### exclusiveMinimum

See http://json-schema.org/latest/json-schema-validation.html#anchor21.

```php
public bool $exclusiveMinimum
```

***

### maxLength

See http://json-schema.org/latest/json-schema-validation.html#anchor26.

```php
public int $maxLength
```

***

### minLength

See http://json-schema.org/latest/json-schema-validation.html#anchor29.

```php
public int $minLength
```

***

### pattern

A string instance is considered valid if the regular expression matches the instance successfully.

```php
public string $pattern
```

***

### maxItems

See http://json-schema.org/latest/json-schema-validation.html#anchor42.

```php
public int $maxItems
```

***

### minItems

See http://json-schema.org/latest/json-schema-validation.html#anchor45.

```php
public int $minItems
```

***

### uniqueItems

See http://json-schema.org/latest/json-schema-validation.html#anchor49.

```php
public bool $uniqueItems
```

***

### enum

See http://json-schema.org/latest/json-schema-validation.html#anchor76.

```php
public array $enum
```

***

### multipleOf

A numeric instance is valid against "multipleOf" if the result of the division of the instance by this property's value
is an integer.

```php
public \OpenApi\Annotations\number $multipleOf
```

***

### discriminator

Adds support for polymorphism.

```php
public \OpenApi\Annotations\Discriminator $discriminator
```

The discriminator is an object name that is used to differentiate between other schemas which may satisfy the payload
description.
See Composition and Inheritance for more details.




***

### readOnly

Relevant only for Schema "properties" definitions.

```php
public bool $readOnly
```

Declares the property as "read only".
This means that it may be sent as part of a response but should not be sent as part of the request.
If the property is marked as readOnly being true and is in the required list, the required will take effect on the
response only.
A property must not be marked as both readOnly and writeOnly being true.
Default value is false.




***

### writeOnly

Relevant only for Schema "properties" definitions.

```php
public bool $writeOnly
```

Declares the property as "write only".
Therefore, it may be sent as part of a request but should not be sent as part of the response.
If the property is marked as writeOnly being true and is in the required list, the required will take effect on the
request only.
A property must not be marked as both readOnly and writeOnly being true.
Default value is false.




***

### xml

This may be used only on properties schemas.

```php
public \OpenApi\Annotations\Xml $xml
```

It has no effect on root schemas.
Adds additional metadata to describe the XML representation of this property.




***

### externalDocs

Additional external documentation for this schema.

```php
public \OpenApi\Annotations\ExternalDocumentation $externalDocs
```

***

### example

A free-form property to include an example of an instance for this schema.

```php
public $example
```

To represent examples that cannot be naturally represented in JSON or YAML, a string value can be used to contain the
example with escaping where necessary.




***

### nullable

Allows sending a null value for the defined schema.

```php
public bool $nullable
```

Default value is false.




***

### deprecated

Specifies that a schema is deprecated and should be transitioned out of usage.

```php
public bool $deprecated
```

Default value is false.




***

### allOf

An instance validates successfully against this property if it validates successfully against all schemas defined by
this property's value.

```php
public \OpenApi\Annotations\Schema[] $allOf
```

***

### anyOf

An instance validates successfully against this property if it validates successfully against at least one schema
defined by this property's value.

```php
public \OpenApi\Annotations\Schema[] $anyOf
```

***

### oneOf

An instance validates successfully against this property if it validates successfully against exactly one schema defined
by this property's value.

```php
public \OpenApi\Annotations\Schema[] $oneOf
```

***

### not

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.29.

```php
public $not
```

***

### additionalProperties

http://json-schema.org/latest/json-schema-validation.html#anchor64.

```php
public bool|object $additionalProperties
```

***

### additionalItems

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.10.

```php
public $additionalItems
```

***

### contains

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.14.

```php
public $contains
```

***

### patternProperties

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.19.

```php
public $patternProperties
```

***

### dependencies

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.21.

```php
public $dependencies
```

***

### propertyNames

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.22.

```php
public $propertyNames
```

***

### const

http://json-schema.org/latest/json-schema-validation.html#rfc.section.6.24.

```php
public $const
```

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

