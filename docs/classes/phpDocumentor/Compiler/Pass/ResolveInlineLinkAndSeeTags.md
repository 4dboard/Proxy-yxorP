***

# ResolveInlineLinkAndSeeTags

This step in the compilation process iterates through all elements and scans their descriptions for an inline `@see`
or `@link` tag and resolves them to a markdown link.

* Full name: `\phpDocumentor\Compiler\Pass\ResolveInlineLinkAndSeeTags`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |9002|
|`REGEX_INLINE_LINK_OR_SEE_TAG`|public| |&#039;/\\{\\@(see|link)[\\ ]+([^\\}]+)\\}/&#039;|

## Properties

### router

```php
private \phpDocumentor\Transformer\Router\RouterAbstract $router
```

***

### descriptor

```php
private \phpDocumentor\Descriptor\DescriptorAbstract $descriptor
```

***

### elementCollection

```php
private \phpDocumentor\Descriptor\Collection $elementCollection
```

***

## Methods

### __construct

Registers the router queue with this pass.

```php
public __construct(\phpDocumentor\Transformer\Router\Queue $router): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$router` | **\phpDocumentor\Transformer\Router\Queue** |  |

***

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```

***

### execute

Iterates through each element in the project and replaces its inline @see and @link tag with a markdown representation.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |

***

### resolveSeeAndLinkTags

Resolves all @see and @link tags in the description of the given descriptor to their markdown representation.

```php
private resolveSeeAndLinkTags(\phpDocumentor\Descriptor\DescriptorAbstract $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### resolveTag

Resolves an individual tag, indicated by the results of the Regex used to extract tags.

```php
private resolveTag(string[] $match): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$match` | **string[]** |  |

***

### isUrl

Determines if the given link string represents a URL by checking if it is prefixed with a URI scheme.

```php
private isUrl(string $link): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** |  |

***

### isFqsen

Checks if the link represents a Fully Qualified Structural Element Name.

```php
private isFqsen(string $link): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** |  |

***

### createLinkOrSeeTagFromRegexMatch

Creates a Tag Reflector from the given array of tag line, tag name and tag content.

```php
private createLinkOrSeeTagFromRegexMatch(string[] $match): \phpDocumentor\Reflection\DocBlock\Tag
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$match` | **string[]** |  |

***

### resolveQsen

Resolves a QSEN to a FQSEN.

```php
private resolveQsen(string $link): string
```

If a relative QSEN is provided then this method will attempt to resolve it given the current namespace and namespace
aliases.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** |  |

***

### resolveElement

Generates a Markdown link to the given Descriptor or returns the link text if no route to the Descriptor could be
matched.

```php
private resolveElement(\phpDocumentor\Descriptor\DescriptorAbstract $element, string $link, string $description): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |
| `$link` | **string** |  |
| `$description` | **string** |  |

***

### getLinkText

Returns the link for the given reflector.

```php
private getLinkText(\phpDocumentor\Reflection\DocBlock\Tag\SeeTag|\phpDocumentor\Reflection\DocBlock\Tag\LinkTag $tagReflector): string
```

Because the link tag and the see tag have different methods to acquire the link text we abstract that into this method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tagReflector` | **
\phpDocumentor\Reflection\DocBlock\Tag\SeeTag&#124;\phpDocumentor\Reflection\DocBlock\Tag\LinkTag** |  |

***

### findElement

Tries to find an element with the given FQSEN in the elements listing for this project.

```php
private findElement(string $fqsen): \phpDocumentor\Descriptor\DescriptorAbstract|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqsen` | **string** |  |

***

### createDocBlockContext

Creates a DocBlock context containing the namespace and aliases for the current descriptor.

```php
private createDocBlockContext(): \phpDocumentor\Reflection\DocBlock\Context
```

***

### generateMarkdownLink

Generates a Markdown-formatted string representing a link with a description.

```php
private generateMarkdownLink(string $link, string $description): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$link` | **string** |  |
| `$description` | **string** |  |

yxorP::get('REQUEST')
