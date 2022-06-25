***

# FastPriorityQueue

This is an efficient implementation of an integer priority queue in PHP

This class acts like a queue with insert() and extract(), removing the
elements from the queue and it also acts like an Iterator without removing
the elements. This behaviour can be used in mixed scenarios with high
performance boost.

* Full name: `\Zend\Stdlib\FastPriorityQueue`
* This class implements:
[`\Iterator`](../../Iterator.md), [`\Countable`](../../Countable.md), [`\Serializable`](../../Serializable.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EXTR_DATA`|public| |\SplPriorityQueue::EXTR_DATA|
|`EXTR_PRIORITY`|public| |\SplPriorityQueue::EXTR_PRIORITY|
|`EXTR_BOTH`|public| |\SplPriorityQueue::EXTR_BOTH|

## Properties


### extractFlag



```php
protected int $extractFlag
```






***

### values

Elements of the queue, divided by priorities

```php
protected array $values
```






***

### priorities

Array of priorities

```php
protected array $priorities
```






***

### subPriorities

Array of priorities used for the iteration

```php
protected array $subPriorities
```






***

### maxPriority

Max priority

```php
protected int $maxPriority
```






***

### count

Total number of elements in the queue

```php
protected int $count
```






***

### index

Index of the current element in the queue

```php
protected int $index
```






***

### subIndex

Sub index of the current element in the same priority level

```php
protected int $subIndex
```






***

## Methods


### insert

Insert an element in the queue with a specified priority

```php
public insert(mixed $value, int $priority): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$priority` | **int** | a positive integer |




***

### extract

Extract an element in the queue according to the priority and the
order of insertion

```php
public extract(): mixed
```











***

### remove

Remove an item from the queue

```php
public remove(mixed $datum): bool
```

This is different than {@link}; its purpose is to dequeue an
item.

Note: this removes the first item matching the provided item found. If
the same item has been added multiple times, it will not remove other
instances.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |


**Return Value:**

False if the item was not found, true otherwise.



***

### count

Get the total number of elements in the queue

```php
public count(): int
```











***

### current

Get the current element in the queue

```php
public current(): mixed
```











***

### key

Get the index of the current element in the queue

```php
public key(): int
```











***

### nextAndRemove

Set the iterator pointer to the next element in the queue
removing the previous element

```php
protected nextAndRemove(): mixed
```











***

### next

Set the iterator pointer to the next element in the queue
without removing the previous element

```php
public next(): mixed
```











***

### valid

Check if the current iterator is valid

```php
public valid(): bool
```











***

### rewind

Rewind the current iterator

```php
public rewind(): mixed
```











***

### toArray

Serialize to an array

```php
public toArray(): array
```

Array will be priority => data pairs









***

### serialize

Serialize

```php
public serialize(): string
```











***

### unserialize

Deserialize

```php
public unserialize(string $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |




***

### setExtractFlags

Set the extract flag

```php
public setExtractFlags(int $flag): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **int** |  |




***

### isEmpty

Check if the queue is empty

```php
public isEmpty(): bool
```











***

### contains

Does the queue contain the given datum?

```php
public contains(mixed $datum): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |




***

### hasPriority

Does the queue have an item with the given priority?

```php
public hasPriority(int $priority): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$priority` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
