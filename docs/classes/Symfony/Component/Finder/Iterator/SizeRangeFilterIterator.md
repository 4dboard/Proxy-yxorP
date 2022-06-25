***

# SizeRangeFilterIterator

SizeRangeFilterIterator filters out files that are not in the given size range.



* Full name: `\Symfony\Component\Finder\Iterator\SizeRangeFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\FilterIterator`](./FilterIterator.md)



## Properties


### comparators



```php
private $comparators
```






***

## Methods


### __construct



```php
public __construct(\Iterator $iterator, \Symfony\Component\Finder\Comparator\NumberComparator[] $comparators): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$comparators` | **\Symfony\Component\Finder\Comparator\NumberComparator[]** | An array of NumberComparator instances |




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
