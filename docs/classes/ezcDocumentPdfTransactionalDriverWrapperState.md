***

# ezcDocumentPdfTransactionalDriverWrapperState

Driver wrapper state.

Struct representing a state in the transactional driver wrapper. For a more
detailed explanation of the concept behind the transactional driver wrapper,
see the class level doc block in ezcDocumentPdfMainRenderer class.

* Full name: `\ezcDocumentPdfTransactionalDriverWrapperState`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)



## Properties


### calls

Recorded calls in the current transaction

```php
public array $calls
```






***

### pageCreations

Page creations, performed in the current transaction

```php
public array $pageCreations
```






***

### currentPage

Current page, in this transaction

```php
public int $currentPage
```






***



***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
