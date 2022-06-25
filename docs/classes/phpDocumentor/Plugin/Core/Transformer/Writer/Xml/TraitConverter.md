***

# TraitConverter

Converter used to create an XML Element representing the Trait and its Methods, Properties and DocBlock.

In order to convert the DocBlock to its XML representation this class requires the respective converter.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\TraitConverter`

## Properties

### docBlockConverter

```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter
```

***

### methodConverter

```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\MethodConverter $methodConverter
```

***

### propertyConverter

```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\PropertyConverter $propertyConverter
```

***

## Methods

### __construct

Initializes this converter with the DocBlock converter.

```php
public __construct(\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter, \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\MethodConverter $methodConverter, \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\PropertyConverter $propertyConverter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docBlockConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter** |  |
| `$methodConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\MethodConverter** |  |
| `$propertyConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\PropertyConverter** |  |

***

### convert

Export the given reflected Trait definition to the provided parent element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\TraitDescriptor $trait): \DOMElement
```

This method creates a new child element on the given parent XML element and takes the properties of the Reflection
argument and sets the elements and attributes on the child.

If a child DOMElement is provided then the properties and attributes are set on this but the child element is not
appended onto the parent. This is the responsibility of the invoker. Essentially this means that the $parent argument is
ignored in this case.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$trait` | **\phpDocumentor\Descriptor\TraitDescriptor** | Element to export. |

yxorP::get('REQUEST')
