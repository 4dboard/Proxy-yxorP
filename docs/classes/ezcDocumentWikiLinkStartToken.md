***

# ezcDocumentWikiLinkStartToken

Struct for Wiki document link start marker tokens



* Full name: `\ezcDocumentWikiLinkStartToken`
* Parent class: [`\ezcDocumentWikiInlineMarkupToken`](./ezcDocumentWikiInlineMarkupToken.md)




## Methods


### getLinkParameterOrder

Get link parameter order

```php
public getLinkParameterOrder(int $count): array
```

Links may have any amount of parameters and the order may not be the
same for each amount. This method should return an ordered list of
parameter names for the given amount of parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
