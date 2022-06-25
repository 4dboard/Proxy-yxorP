***

# PropertyConverter

Converter used to create an XML Element representing the property and its DocBlock.

In order to convert the DocBlock to its XML representation this class requires the respective converter.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\PropertyConverter`

## Properties

### docBlockConverter

```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter
```

***

## Methods

### __construct

Initializes this converter with the DocBlock converter.

```php
public __construct(\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlockConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter** |  |

***

### convert

Export the given reflected property definition to the provided parent element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\PropertyDescriptor $property): \DOMElement
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$property` | **\phpDocumentor\Descriptor\PropertyDescriptor** | Element to export. |

yxorP::get('REQUEST')
