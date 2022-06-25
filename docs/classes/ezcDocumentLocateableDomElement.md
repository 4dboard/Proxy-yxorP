***

# ezcDocumentLocateableDomElement

Custom DOMElement extension

Extends the DOMElement class, to generate, store and cache the location ID
of the curretn element.

The location ID is based on the parent elements ID, concatenated with the
current element name, together with relevant attributes, possible element
classes and a possible element ID.

* Full name: `\ezcDocumentLocateableDomElement`
* Parent class: [`DOMElement`](./DOMElement.md)
* This class implements:
[`\ezcDocumentLocateable`](./ezcDocumentLocateable.md)



## Properties


### locationId

Calculated location Id

```php
protected string $locationId
```






***

### relevantAttributes

Attributes relevant enough to be included in the location identifier.

```php
protected array $relevantAttributes
```

Contents of the class attribute are annotated differently, so it will
not be included here.




***

## Methods


### getLocationId

Get elements location ID

```php
public getLocationId(): string
```

Return the elements location ID, based on the factors described in the
class header.









***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
