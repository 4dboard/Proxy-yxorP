***

# ParamTag

Behaviour that adds support for the @param tags.



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\ParamTag`



## Properties


### element_name



```php
protected string $element_name
```






***

## Methods


### process

Find all the param tags and if using special characters transform
using markdown otherwise just add a <p> tag to be consistent.

```php
public process(\DOMDocument $xml): \DOMDocument
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xml` | **\DOMDocument** | Structure source to apply behaviour onto. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
