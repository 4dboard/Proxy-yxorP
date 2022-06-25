***

# TagConverter

Creates an XML Element 'tag' and appends it to the provided parent element.

With this class we convert a TagDescriptor, or any child thereof, into an XML element that is subsequently appended
onto a provided parent element (usually an XML Element that represents a DocBlock).

During the conversion process the generated XML Element is enriched with additional elements and attributes based on
which tags are provided (or more specifically which methods that support).

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\TagConverter`




## Methods


### convert

Export this tag to the given DocBlock.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\TagDescriptor $tag): \DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$tag` | **\phpDocumentor\Descriptor\TagDescriptor** | The tag to export. |




***

### getDescription

Returns the description from the Tag with the version prepended when applicable.

```php
protected getDescription(\phpDocumentor\Descriptor\TagDescriptor $tag): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **\phpDocumentor\Descriptor\TagDescriptor** |  |




***

### addTypes

Adds type elements and a type attribute to the tag if a method 'getTypes' is present.

```php
protected addTypes(\phpDocumentor\Descriptor\TagDescriptor $tag, \DOMElement $child): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **\phpDocumentor\Descriptor\TagDescriptor** |  |
| `$child` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
