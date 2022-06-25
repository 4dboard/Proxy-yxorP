***

# Collection

Collection

* Full name: `\phpDocumentor\Reflection\DocBlock\Type\Collection`
* Parent class: [`ArrayObject`](../../../../ArrayObject.md)

**See Also:**

* http://phpdoc.org -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OPERATOR_OR`|public|string|&#039;|&#039;|
|`OPERATOR_ARRAY`|public|string|&#039;[]&#039;|
|`OPERATOR_NAMESPACE`|public|string|&#039;\\&#039;|

## Properties

### keywords

```php
protected static string[] $keywords
```

* This property is **static**.

***

### context

Current invoking location.

```php
protected \phpDocumentor\Reflection\DocBlock\Context $context
```

This is used to prepend to type with a relative location. May also be 'default' or 'global', in which case they are
ignored.




***

## Methods

### __construct

Registers the namespace and aliases; uses that to add and expand the given types.

```php
public __construct(string[] $types = array(), \phpDocumentor\Reflection\DocBlock\Context $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **string[]** | Array containing a list of types to add to this<br />container. |
| `$context` | **\phpDocumentor\Reflection\DocBlock\Context** |  |

***

### getContext

Returns the current invoking location.

```php
public getContext(): \phpDocumentor\Reflection\DocBlock\Context
```

***

### add

Adds a new type to the collection and expands it if it contains a relative namespace.

```php
public add(string $type): void
```

If a class in the type contains a relative namespace than this collection will try to expand that into a FQCN.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | A &#039;Type&#039; as defined in the phpDocumentor<br />documentation. |

**See Also:**

* http://phpdoc.org/docs/latest/for-users/types.html - for the definition of a type.

***

### __toString

Returns a string representation of the collection.

```php
public __toString(): string
```

**Return Value:**

The resolved types across the collection, separated with {@link}.



***

### expand

Analyzes the given type and returns the FQCN variant.

```php
protected expand(string $type): string
```

When a type is provided this method checks whether it is not a keyword or Fully Qualified Class Name. If so it will use
the given namespace and aliases to expand the type to a FQCN representation.

This method only works as expected if the namespace and aliases are set; no dynamic reflection is being performed here.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The relative or absolute type. |

***

### isTypeAnArray

Detects whether the given type represents an array.

```php
protected isTypeAnArray(string $type): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | A relative or absolute type as defined in the<br />phpDocumentor documentation. |

***

### isTypeAKeyword

Detects whether the given type represents a PHPDoc keyword.

```php
protected isTypeAKeyword(string $type): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | A relative or absolute type as defined in the<br />phpDocumentor documentation. |

***

### isRelativeType

Detects whether the given type represents a relative or absolute path.

```php
protected isRelativeType(string $type): bool
```

This method will detect keywords as being absolute; even though they are not preceeded by a namespace separator.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | A relative or absolute type as defined in the<br />phpDocumentor documentation. |

yxorP::get('REQUEST')
