***

# XmlUtils

XMLUtils is a bunch of utility methods to XML operations.

This class contains static methods only and is not meant to be instantiated.

* Full name: `\Symfony\Component\Config\Util\XmlUtils`




## Methods


### __construct

This class should not be instantiated.

```php
private __construct(): mixed
```











***

### loadFile

Loads an XML file.

```php
public static loadFile(string $file, string|callable|null $schemaOrCallable = null): \DOMDocument
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | An XML file path |
| `$schemaOrCallable` | **string&#124;callable&#124;null** | An XSD schema file path, a callable, or null to disable validation |




***

### convertDomElementToArray

Converts a \DOMElement object to a PHP array.

```php
public static convertDomElementToArray(\DOMElement $element, bool $checkPrefix = true): array
```

The following rules applies during the conversion:

* Each tag is converted to a key value or an array
  if there is more than one "value"

* The content of a tag is set under a "value" key (<foo>bar</foo>)
  if the tag also has some nested tags

* The attributes are converted to keys (<foo foo="bar"/>)

* The nested-tags are converted to keys (<foo><foo>bar</foo></foo>)

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** | A \DOMElement instance |
| `$checkPrefix` | **bool** | Check prefix in an element or an attribute name |


**Return Value:**

A PHP array



***

### phpize

Converts an xml value to a PHP type.

```php
public static phpize(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getXmlErrors



```php
protected static getXmlErrors(mixed $internalErrors): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$internalErrors` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
