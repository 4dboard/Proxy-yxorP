***

# MethodTag

Behaviour that adds support for the @method tag



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\MethodTag`




## Methods


### process

Find all return tags that contain 'self' or '$this' and replace those
terms for the name of the current class' type.

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
