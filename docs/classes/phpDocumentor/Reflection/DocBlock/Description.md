***

# Description

Parses a Description of a DocBlock or tag.



* Full name: `\phpDocumentor\Reflection\DocBlock\Description`
* This class implements:
[`\Reflector`](../../../Reflector.md)

**See Also:**

* http://phpdoc.org - 



## Properties


### contents



```php
protected string $contents
```






***

### parsedContents



```php
protected array $parsedContents
```






***

### docblock



```php
protected \phpDocumentor\Reflection\DocBlock $docblock
```






***

## Methods


### __construct

Populates the fields of a description.

```php
public __construct(string $content, \phpDocumentor\Reflection\DocBlock $docblock = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | The description&#039;s conetnts. |
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** | The DocBlock which this description belongs to. |




***

### getContents

Gets the text of this description.

```php
public getContents(): string
```











***

### setContent

Sets the text of this description.

```php
public setContent(string $content): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | The new text of this description. |




***

### getParsedContents

Returns the parsed text of this description.

```php
public getParsedContents(): array
```









**Return Value:**

An array of strings and tag objects, in the order they
occur within the description.



***

### getFormattedContents

Return a formatted variant of the Long Description using MarkDown.

```php
public getFormattedContents(): string
```











***

### getDocBlock

Gets the docblock this tag belongs to.

```php
public getDocBlock(): \phpDocumentor\Reflection\DocBlock
```









**Return Value:**

The docblock this description belongs to.



***

### setDocBlock

Sets the docblock this tag belongs to.

```php
public setDocBlock(\phpDocumentor\Reflection\DocBlock $docblock = null): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docblock` | **\phpDocumentor\Reflection\DocBlock** | The new docblock this description belongs to.<br />Setting NULL removes any association. |




***

### export

Builds a string representation of this object.

```php
public static export(): void
```



* This method is **static**.







***

### __toString

Returns the long description as a string.

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
