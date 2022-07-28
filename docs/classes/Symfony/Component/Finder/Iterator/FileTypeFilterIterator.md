***

# FileTypeFilterIterator

FileTypeFilterIterator only keeps files, directories, or both.



* Full name: `\Symfony\Component\Finder\Iterator\FileTypeFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ONLY_FILES`|public| |1|
|`ONLY_DIRECTORIES`|public| |2|

## Properties


### mode



```php
private int $mode
```






***

## Methods


### __construct



```php
public __construct(\Iterator $iterator, int $mode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$mode` | **int** | The mode (self::ONLY_FILES or self::ONLY_DIRECTORIES) |




***

### accept

Filters the iterator values.

```php
public accept(): bool
```











***


***

