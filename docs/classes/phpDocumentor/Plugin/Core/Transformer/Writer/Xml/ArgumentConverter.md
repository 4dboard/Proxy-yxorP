***

# ArgumentConverter

Converter used to create an XML Element representing a method or function argument.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\ArgumentConverter`

## Methods

### convert

Exports the given reflection object to the parent XML element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\ArgumentDescriptor $argument): \DOMElement
```

This method creates a new child element on the given parent XML element and takes the properties of the Reflection
argument and sets the elements and attributes on the child.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | The parent element to augment. |
| `$argument` | **\phpDocumentor\Descriptor\ArgumentDescriptor** | The data source. |

yxorP::get('REQUEST')
