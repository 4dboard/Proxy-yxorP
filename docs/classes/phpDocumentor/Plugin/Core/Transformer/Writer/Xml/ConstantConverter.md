***

# ConstantConverter

Converter used to create an XML Element representing the constant and its DocBlock.

In order to convert the DocBlock to its XML representation this class requires the respective converter.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\ConstantConverter`



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

Export the given reflected constant definition to the provided parent element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\ConstantDescriptor $constant): \DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$constant` | **\phpDocumentor\Descriptor\ConstantDescriptor** | Element to export. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
