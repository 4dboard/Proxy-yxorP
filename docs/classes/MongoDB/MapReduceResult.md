***

# MapReduceResult

Result class for mapReduce command results.

This class allows for iteration of mapReduce results irrespective of the
output method (e.g. inline, collection) via the IteratorAggregate interface.
It also provides access to command statistics.

* Full name: `\MongoDB\MapReduceResult`
* This class implements:
[`\IteratorAggregate`](../IteratorAggregate.md)

**See Also:**

* \MongoDB\Collection::mapReduce() - 
* https://docs.mongodb.com/manual/reference/command/mapReduce/ - 



## Properties


### getIterator



```php
private callable $getIterator
```






***

### executionTimeMS



```php
private int $executionTimeMS
```






***

### counts



```php
private array $counts
```






***

### timing



```php
private array $timing
```






***

## Methods


### getCounts

Returns various count statistics from the mapReduce command.

```php
public getCounts(): array
```











***

### getExecutionTimeMS

Return the command execution time in milliseconds.

```php
public getExecutionTimeMS(): int
```











***

### getIterator

Return the mapReduce results as a Traversable.

```php
public getIterator(): \Traversable
```










**See Also:**

* http://php.net/iteratoraggregate.getiterator - 

***

### getTiming

Returns various timing statistics from the mapReduce command.

```php
public getTiming(): array
```

Note: timing statistics are only available if the mapReduce command's
"verbose" option was true; otherwise, an empty array will be returned.









***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
