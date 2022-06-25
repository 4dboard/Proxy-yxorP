***

# DepthRangeFilterIterator

DepthRangeFilterIterator limits the directory depth.



* Full name: `\Symfony\Component\Finder\Iterator\DepthRangeFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\FilterIterator`](./FilterIterator.md)



## Properties


### minDepth



```php
private $minDepth
```






***

## Methods


### __construct



```php
public __construct(\RecursiveIteratorIterator $iterator, int $minDepth, int $maxDepth = PHP_INT_MAX): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\RecursiveIteratorIterator** | The Iterator to filter |
| `$minDepth` | **int** | The min depth |
| `$maxDepth` | **int** | The max depth |




***

### accept

Filters the iterator values.

```php
public accept(): bool
```









**Return Value:**

true if the value should be kept, false otherwise



***


## Inherited methods


### rewind

This is a workaround for the problem with \FilterIterator leaving inner \FilesystemIterator in wrong state after
rewind in some cases.

```php
public rewind(): mixed
```










**See Also:**

* \Symfony\Component\Finder\Iterator\FilterIterator::rewind() - 

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
