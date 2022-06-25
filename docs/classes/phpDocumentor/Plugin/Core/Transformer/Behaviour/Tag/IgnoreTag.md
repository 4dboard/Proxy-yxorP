***

# IgnoreTag

Behaviour that adds support for @ignore tag.



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\IgnoreTag`



## Properties


### tag



```php
protected $tag
```






***

## Methods


### process

Removes DocBlocks marked with 'ignore' tag from the structure.

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
