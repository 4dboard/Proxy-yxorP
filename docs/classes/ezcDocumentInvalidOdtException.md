***

# ezcDocumentInvalidOdtException

Exception thrown if an expectation to an incoming DocBook document is not
met during DocBook to ODT conversion.



* Full name: `\ezcDocumentInvalidOdtException`
* Parent class: [`\ezcDocumentException`](./ezcDocumentException.md)




## Methods


### __construct

Creates a new exception.

```php
public __construct(\DOMNode $affectedNode, string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$affectedNode` | **\DOMNode** |  |
| `$message` | **string** |  |




***


## Inherited methods


### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
