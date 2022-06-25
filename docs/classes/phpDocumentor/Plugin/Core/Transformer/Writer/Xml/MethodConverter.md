***

# MethodConverter

Converter used to create an XML Element representing the method, its arguments and its DocBlock.

In order to convert the arguments and DocBlock to their XML representation this class requires their respective
converters.

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\MethodConverter`



## Properties


### argumentConverter



```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\ArgumentConverter $argumentConverter
```






***

### docBlockConverter



```php
protected \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter
```






***

## Methods


### __construct

Initializes this converter with the Argument and DocBlock converter.

```php
public __construct(\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\ArgumentConverter $argumentConverter, \phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter $docBlockConverter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argumentConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\ArgumentConverter** |  |
| `$docBlockConverter` | **\phpDocumentor\Plugin\Core\Transformer\Writer\Xml\DocBlockConverter** |  |




***

### convert

Export the given reflected method definition to the provided parent element.

```php
public convert(\DOMElement $parent, \phpDocumentor\Descriptor\MethodDescriptor $method): \DOMElement
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\DOMElement** | Element to augment. |
| `$method` | **\phpDocumentor\Descriptor\MethodDescriptor** | Element to export. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
