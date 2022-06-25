***

# LinkTag

Reflection class for a @link tag in a Docblock.



* Full name: `\phpDocumentor\Reflection\DocBlock\Tag\LinkTag`
* Parent class: [`\phpDocumentor\Reflection\DocBlock\Tag`](../Tag.md)

**See Also:**

* http://phpdoc.org - 



## Properties


### link



```php
protected string $link
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

### getLink

Gets the link

```php
public getLink(): string
```











***

### setLink

Sets the link

```php
public setLink(string $link): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** | The link |




***


## Inherited methods


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

Registers a handler for tags. The class specified is autoloaded if it's
not available. It must inherit from this class.

* This method is **static**.

* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** | Name of tag to regiser a handler for. When<br />registering a namespaced tag, the full name, along with a prefixing<br />slash MUST be provided. |
| `$handler` | **string&#124;null** | FQCN of handler. Specifing NULL removes the<br />handler for the specified tag, if any. |


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

An array of strings and tag objects, in the order they
occur within the description.



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
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** | The new docblock this tag belongs to. Setting<br />NULL removes any association. |




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











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
