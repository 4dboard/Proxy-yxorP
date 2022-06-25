***

# DocBlockConverter

Converter used to create an XML Element representing a DocBlock and its tags.

In order to convert the tags to their XML representation this class requires the respective converter.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter`

## Properties

### tagConverter

```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\TagConverter $tagConverter
```

***

### router

```php
private \phpDocumentor\Transformer\Router\RouterAbstract $router
```

***

## Methods

### __construct

Stores the converter for tags on this converter.

```php
public __construct(\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\TagConverter $tagConverter, \phpDocumentor\Transformer\Router\RouterAbstract $router): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tagConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\TagConverter** |  |
| `$router` | **\phpDocumentor\Transformer\Router\RouterAbstract** |  |

***

### convert

Exports the given reflection object to the parent XML element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\DescriptorAbstract $element): \DOMElement
```

This method creates a new child element on the given parent XML element and takes the properties of the Reflection
argument and sets the elements and attributes on the child.

If a child DOMElement is provided then the properties and attributes are set on this but the child element is not
appended onto the parent. This is the responsibility of the invoker. Essentially this means that the $parent argument is
ignored in this case.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | The parent element to augment. |
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** | The data source. |

***

### addSummary

Adds the short description of $docblock to the given node as description field.

```php
protected addSummary(\DOMElement $node, \phpDocumentor\Descriptor\DescriptorAbstract $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMElement** |  |
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### addDescription

Adds the DocBlock's long description to the $child element,

```php
protected addDescription(\DOMElement $node, \phpDocumentor\Descriptor\DescriptorAbstract $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMElement** |  |
| `$element` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### addTags

Adds each tag to the XML Node representing the DocBlock.

```php
protected addTags(\DOMElement $docBlock, \phpDocumentor\Descriptor\DescriptorAbstract $descriptor): void
```

The Descriptor contains an array of tag groups (that are tags grouped by their name), which in itself contains an array
of the individual tags.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlock` | **\DOMElement** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

***

### addInheritedFromTag

Adds the 'inherited_from' tag when a Descriptor inherits from another Descriptor.

```php
protected addInheritedFromTag(\DOMElement $docBlock, \phpDocumentor\Descriptor\DescriptorAbstract $descriptor): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlock` | **\DOMElement** |  |
| `$descriptor` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |

yxorP::get('REQUEST')
