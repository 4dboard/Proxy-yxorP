***

# BaseEntry

The Table of Contents entry provides essential information on the current entry, it's place in the structure and where
it points to.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry`
* This class is an **Abstract class**

## Properties

### parent

The parent BaseEntry in the containing module.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry|null $parent
```

This property may also contain a null value if this is the top entry in this module. Please note that files are also
considered entries.

Please note that a null value is usually reserved to the ``index`` file.




***

### children

The child entries that are contained in this entry.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\BaseEntry[] $children
```

Any entry may contain any amount of child entries which may either be Headings or Files.




***

### name

The heading name, or caption, for this entry.

```php
protected string $name
```

***

## Methods

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
