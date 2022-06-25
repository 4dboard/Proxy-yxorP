***

# Heading

The Table of Contents File describes a headings and the Files and subentries it may contain.

A Heading may also contain files, those will serve as containers for more headings or other files. This way it is
possible to 'include' another File as part of a hierarchy and have a integrated table of contents.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\Heading`
* Parent class: [`\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry`](./BaseEntry.md)



## Properties


### slug



```php
protected string $slug
```






***

## Methods


### setSlug

Sets the anchor slug for this entry.

```php
public setSlug(string $slug): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$slug` | **string** |  |




***

### getSlug

Retrieves the anchor slug for this entry.

```php
public getSlug(): string
```











***

### getFilename



```php
public getFilename(): mixed
```











***


## Inherited methods


### __construct

Initializes this entry with the given parent, if available.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry|null $parent = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry&#124;null** |  |




***

### getParent

Returns the parent entry for this entry.

```php
public getParent(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry|null
```










**See Also:**

*  - $parent for more information rgarding parent entries.

***

### setParent

Sets the parent entry for this entry.

```php
public setParent(\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry|null $parent): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry&#124;null** |  |




***

### getChildren

Returns a list of entries.

```php
public getChildren(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry[]
```










**See Also:**

*  - $children for more information regarding child entries.

***

### addChild

Adds a child to the collection of children.

```php
public addChild(\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry $entry): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entry` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry** |  |




***

### getName

Returns the name for this entry.

```php
public getName(): string
```











***

### setName

Sets the caption for this entry,

```php
public setName(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
