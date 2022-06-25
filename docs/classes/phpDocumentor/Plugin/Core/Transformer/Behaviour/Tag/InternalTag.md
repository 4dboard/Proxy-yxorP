***

# InternalTag

Behaviour that adds support for @internal inline tag.



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\InternalTag`



## Properties


### internalAllowed



```php
protected bool $internalAllowed
```






***

## Methods


### __construct

Initializes this tag and describes whether it should be rendered in the output.

```php
public __construct(bool $internalAllowed): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$internalAllowed` | **bool** |  |




***

### process

Converts the 'internal' tags in Long Descriptions.

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
