***

# SortableIterator

SortableIterator applies a sort on a given Iterator.



* Full name: `\Symfony\Component\Finder\Iterator\SortableIterator`
* This class implements:
[`\IteratorAggregate`](../../../../IteratorAggregate.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SORT_BY_NONE`|public| |0|
|`SORT_BY_NAME`|public| |1|
|`SORT_BY_TYPE`|public| |2|
|`SORT_BY_ACCESSED_TIME`|public| |3|
|`SORT_BY_CHANGED_TIME`|public| |4|
|`SORT_BY_MODIFIED_TIME`|public| |5|
|`SORT_BY_NAME_NATURAL`|public| |6|

## Properties


### iterator



```php
private \Traversable $iterator
```






***

### sort



```php
private \Closure|int $sort
```






***

## Methods


### __construct



```php
public __construct(\Traversable&lt;string,\SplFileInfo&gt; $iterator, int|callable $sort, bool $reverseOrder = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Traversable<string,\SplFileInfo>** |  |
| `$sort` | **int&#124;callable** | The sort type (SORT_BY_NAME, SORT_BY_TYPE, or a PHP callback) |
| `$reverseOrder` | **bool** |  |




***

### getIterator



```php
public getIterator(): \Traversable
```











***


***

