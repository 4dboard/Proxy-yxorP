***

# ezcDocumentWikiImageStartToken

Struct for Wiki document image tag open marker tokens



* Full name: `\ezcDocumentWikiImageStartToken`
* Parent class: [`\ezcDocumentWikiInlineMarkupToken`](./ezcDocumentWikiInlineMarkupToken.md)



## Properties


### width

Image width

```php
public int $width
```






***

### height

Image height

```php
public int $height
```






***

### alignement

Image alignement

```php
public string $alignement
```






***

## Methods


### getImageParameterOrder

Get image parameter order

```php
public getImageParameterOrder(int $count): array
```

Images may have any amount of parameters and the order may not be the
same for each amount. This method should return an ordered list of
parameter names for the given amount of parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
