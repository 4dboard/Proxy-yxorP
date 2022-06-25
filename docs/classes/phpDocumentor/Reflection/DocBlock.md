***

# DocBlock

Parses the DocBlock for any structure.



* Full name: `\phpDocumentor\Reflection\DocBlock`
* This class implements:
[`\Reflector`](../../Reflector.md)

**See Also:**

* http://phpdoc.org - 



## Properties


### short_description



```php
protected string $short_description
```






***

### long_description



```php
protected \phpDocumentor\Reflection\DocBlock\Description $long_description
```






***

### tags



```php
protected \phpDocumentor\Reflection\DocBlock\Tag[] $tags
```






***

### context



```php
protected \phpDocumentor\Reflection\DocBlock\Context $context
```






***

### location



```php
protected \phpDocumentor\Reflection\DocBlock\Location $location
```






***

### isTemplateStart



```php
protected bool $isTemplateStart
```






***

### isTemplateEnd



```php
protected bool $isTemplateEnd
```






***

## Methods


### __construct

Parses the given docblock and populates the member fields.

```php
public __construct(\Reflector|string $docblock, \phpDocumentor\Reflection\DocBlock\Context $context = null, \phpDocumentor\Reflection\DocBlock\Location $location = null): mixed
```

The constructor may also receive namespace information such as the
current namespace and aliases. This information is used by some tags
(e.g. @return, @param, etc.) to turn a relative Type into a FQCN.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docblock` | **\Reflector&#124;string** | A docblock comment (including<br />asterisks) or reflector supporting the getDocComment method. |
| `$context` | **\phpDocumentor\Reflection\DocBlock\Context** | The context in which the DocBlock<br />occurs. |
| `$location` | **\phpDocumentor\Reflection\DocBlock\Location** | The location within the file that this<br />DocBlock occurs in. |




***

### cleanInput

Strips the asterisks from the DocBlock comment.

```php
protected cleanInput(string $comment): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comment` | **string** | String containing the comment text. |




***

### splitDocBlock

Splits the DocBlock into a template marker, summary, description and block of tags.

```php
protected splitDocBlock(string $comment): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comment` | **string** | Comment to split into the sub-parts. |


**Return Value:**

containing the template marker (if any), summary, description and a string containing the tags.



***

### parseTags

Creates the tag objects.

```php
protected parseTags(string $tags): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tags` | **string** | Tag block to parse. |




***

### getText

Gets the text portion of the doc block.

```php
public getText(): string
```

Gets the text portion (short and long description combined) of the doc
block.







**Return Value:**

The text portion of the doc block.



***

### setText

Set the text portion of the doc block.

```php
public setText(mixed $comment): $this
```

Sets the text portion (short and long description combined) of the doc
block.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comment` | **mixed** |  |


**Return Value:**

This doc block.



***

### getShortDescription

Returns the opening line or also known as short description.

```php
public getShortDescription(): string
```











***

### getLongDescription

Returns the full description or also known as long description.

```php
public getLongDescription(): \phpDocumentor\Reflection\DocBlock\Description
```











***

### isTemplateStart

Returns whether this DocBlock is the start of a Template section.

```php
public isTemplateStart(): bool
```

A Docblock may serve as template for a series of subsequent DocBlocks. This is indicated by a special marker
(`#@+`) that is appended directly after the opening `/**` of a DocBlock.

An example of such an opening is:

```
/**#@+
 * My DocBlock
 * /
```

The description and tags (not the summary!) are copied onto all subsequent DocBlocks and also applied to all
elements that follow until another DocBlock is found that contains the closing marker (`#@-`).








**See Also:**

* \phpDocumentor\Reflection\self::isTemplateEnd() - for the check whether a closing marker was provided.

***

### isTemplateEnd

Returns whether this DocBlock is the end of a Template section.

```php
public isTemplateEnd(): bool
```










**See Also:**

* \phpDocumentor\Reflection\self::isTemplateStart() - for a more complete description of the Docblock Template functionality.

***

### getContext

Returns the current context.

```php
public getContext(): \phpDocumentor\Reflection\DocBlock\Context
```











***

### getLocation

Returns the current location.

```php
public getLocation(): \phpDocumentor\Reflection\DocBlock\Location
```











***

### getTags

Returns the tags for this DocBlock.

```php
public getTags(): \phpDocumentor\Reflection\DocBlock\Tag[]
```











***

### getTagsByName

Returns an array of tags matching the given name. If no tags are found
an empty array is returned.

```php
public getTagsByName(string $name): \phpDocumentor\Reflection\DocBlock\Tag[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | String to search by. |




***

### hasTag

Checks if a tag of a certain type is present in this DocBlock.

```php
public hasTag(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Tag name to check for. |




***

### appendTag

Appends a tag at the end of the list of tags.

```php
public appendTag(\phpDocumentor\Reflection\DocBlock\Tag $tag): \phpDocumentor\Reflection\DocBlock\Tag
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **\phpDocumentor\Reflection\DocBlock\Tag** | The tag to add. |


**Return Value:**

The newly added tag.



***

### export

Builds a string representation of this object.

```php
public static export(): string
```



* This method is **static**.







***

### __toString

Returns the exported information (we should use the export static method
BUT this throws an exception at this point).

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
