***

# File

The Table of Contents File describes a file and the headings it contains.

A File may also contain other files, those will serve as containers for more headings or other files. This way it is
possible to 'include' another File as part of a hierarchy and have a integrated table of contents.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\File`
* Parent class: [`\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry`](./BaseEntry.md)

## Properties

### hash

```php
protected $hash
```

***

### filename

The name for this file relative to the project's root.

```php
protected string $filename
```

This name may be used to generate links and to find other file definitions in the file index of the modules.




***

## Methods

### setFilename

Sets the name for this file relative to the project root.

```php
public setFilename(string $filename): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

***

### getFilename

Returns the name for this file relative to the project root.

```php
public getFilename(): string
```

***

### getHash

```php
public getHash(): mixed
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

*
    - $parent for more information rgarding parent entries.

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

*
    - $children for more information regarding child entries.

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

yxorP::get('REQUEST')
