***

# RouterAbstract

Object containing a collection of routes.



* Full name: `\phpDocumentor\Transformer\Router\RouterAbstract`
* Parent class: [`ArrayObject`](../../../ArrayObject.md)
* This class is an **Abstract class**




## Methods


### __construct

Invokes the configure method.

```php
public __construct(): mixed
```











***

### configure

Configuration function to add routing rules to a router.

```php
public configure(): void
```




* This method is **abstract**.






***

### match

Tries to match the provided node with one of the rules in this router.

```php
public match(string|\phpDocumentor\Descriptor\DescriptorAbstract $node): \phpDocumentor\Transformer\Router\Rule|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
