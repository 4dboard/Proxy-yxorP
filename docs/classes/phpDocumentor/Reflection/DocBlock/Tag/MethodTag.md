***

# MethodTag

Reflection class for a @method in a Docblock.

* Full name: `\phpDocumentor\Reflection\DocBlock\Tag\MethodTag`
* Parent class: [`\phpDocumentor\Reflection\DocBlock\Tag\ReturnTag`](./ReturnTag.md)

**See Also:**

* http://phpdoc.org -

## Properties

### method_name

```php
protected string $method_name
```

***

### arguments

```php
protected string $arguments
```

***

### isStatic

```php
protected bool $isStatic
```

***

## Methods

### getContent

Gets the content of this tag.

```php
public getContent(): string
```

***

### setContent

Sets the content of this tag.

```php
public setContent(mixed $content): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | The new content of this tag. |

***

### setMethodName

Sets the name of this method.

```php
public setMethodName(string $method_name): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method_name` | **string** | The name of the method. |

***

### getMethodName

Retrieves the method name.

```php
public getMethodName(): string
```

***

### setArguments

Sets the arguments for this method.

```php
public setArguments(string $arguments): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **string** | A comma-separated arguments line. |

***

### getArguments

Returns an array containing each argument as array of type and name.

```php
public getArguments(): string[]
```

Please note that the argument sub-array may only contain 1 element if no type was specified.









***

### isStatic

Checks whether the method tag describes a static method or not.

```php
public isStatic(): bool
```

**Return Value:**

TRUE if the method declaration is for a static method, FALSE otherwise.



***

### setIsStatic

Sets a new value for whether the method is static or not.

```php
public setIsStatic(bool $isStatic): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isStatic` | **bool** | The new value to set. |

***

## Inherited methods

### getContent

Gets the content of this tag.

```php
public getContent(): string
```

***

### setContent

Sets the content of this tag.

```php
public setContent(string $content): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | The new content of this tag. |

***

### getTypes

Returns the unique types of the variable.

```php
public getTypes(): string[]
```

***

### getType

Returns the type section of the variable.

```php
public getType(): string
```

***

### getTypesCollection

Returns the type collection.

```php
protected getTypesCollection(): void
```

***

### createInstance

Factory method responsible for instantiating the correct sub type.

```php
final public static createInstance(string $tag_line, \phpDocumentor\Reflection\DocBlock $docblock = null, \phpDocumentor\Reflection\DocBlock\Location $location = null): static
```

* This method is **static**.

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag_line` | **string** | The text for this tag, including description. |
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** | The DocBlock which this tag belongs to. |
| `$location` | **\phpDocumentor\Reflection\DocBlock\Location** | Location of the tag. |

**Return Value:**

A new tag object.



***

### registerTagHandler

Registers a handler for tags.

```php
final public static registerTagHandler(string $tag, string|null $handler): bool
```

Registers a handler for tags. The class specified is autoloaded if it's not available. It must inherit from this class.

* This method is **static**.

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **
string** | Name of tag to regiser a handler for. When<br />registering a namespaced tag, the full name, along with a prefixing<br />slash MUST be provided. |
| `$handler` | **
string&#124;null** | FQCN of handler. Specifing NULL removes the<br />handler for the specified tag, if any. |

**Return Value:**

TRUE on success, FALSE on failure.



***

### __construct

Parses a tag and populates the member variables.

```php
public __construct(string $name, string $content, \phpDocumentor\Reflection\DocBlock $docblock = null, \phpDocumentor\Reflection\DocBlock\Location $location = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the tag. |
| `$content` | **string** | The contents of the given tag. |
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** | The DocBlock which this tag belongs to. |
| `$location` | **\phpDocumentor\Reflection\DocBlock\Location** | Location of the tag. |

***

### getName

Gets the name of this tag.

```php
public getName(): string
```

**Return Value:**

The name of this tag.



***

### setName

Sets the name of this tag.

```php
public setName(string $name): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The new name of this tag. |

***

### getDescription

Gets the description component of this tag.

```php
public getDescription(): string
```

***

### setDescription

Sets the description component of this tag.

```php
public setDescription(string $description): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** | The new description component of this tag. |

***

### getParsedDescription

Gets the parsed text of this description.

```php
public getParsedDescription(): array
```

**Return Value:**

An array of strings and tag objects, in the order they occur within the description.



***

### getDocBlock

Gets the docblock this tag belongs to.

```php
public getDocBlock(): \phpDocumentor\Reflection\DocBlock
```

**Return Value:**

The docblock this tag belongs to.



***

### setDocBlock

Sets the docblock this tag belongs to.

```php
public setDocBlock(\phpDocumentor\Reflection\DocBlock $docblock = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docblock` | **
\phpDocumentor\Reflection\DocBlock** | The new docblock this tag belongs to. Setting<br />NULL removes any association. |

***

### getLocation

Gets the location of the tag.

```php
public getLocation(): \phpDocumentor\Reflection\DocBlock\Location
```

**Return Value:**

The tag's location.



***

### setLocation

Sets the location of the tag.

```php
public setLocation(\phpDocumentor\Reflection\DocBlock\Location $location = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **\phpDocumentor\Reflection\DocBlock\Location** | The new location of the tag. |

***

### export

Builds a string representation of this object.

```php
public static export(): void
```

* This method is **static**.

***

### __toString

Returns the tag as a serialized string

```php
public __toString(): string
```

yxorP::get('REQUEST')
