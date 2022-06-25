***

# TraversalStrategy

Specifies whether and how a traversable object should be traversed.

If the node traverser traverses a node whose value is an instance of
{@link}, and if that node is either a class node or if
cascading is enabled, then the node's traversal strategy will be checked.
Depending on the requested traversal strategy, the node traverser will
iterate over the object and cascade each object or collection returned by
the iterator.

The traversal strategy is ignored for arrays. Arrays are always iterated.

* Full name: `\Symfony\Component\Validator\Mapping\TraversalStrategy`

**See Also:**

* \Symfony\Component\Validator\Mapping\CascadingStrategy - 


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`IMPLICIT`|public| |1|
|`NONE`|public| |2|
|`TRAVERSE`|public| |4|


## Methods


### __construct

Not instantiable.

```php
private __construct(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
