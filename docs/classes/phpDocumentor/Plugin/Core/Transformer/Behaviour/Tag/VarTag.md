***

# VarTag

Behaviour that adds support for the @method tag



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\VarTag`
* Parent class: [`\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\ParamTag`](./ParamTag.md)



## Properties


### element_name



```php
protected string $element_name
```






***



## Inherited methods


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
