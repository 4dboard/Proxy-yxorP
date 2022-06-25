***

# Collection

Represents an easily accessible collection of elements.

The goal for this class is to allow Descriptors to be easily retrieved and set so that interaction in
templates becomes easier.

* Full name: `\phpDocumentor\Descriptor\Collection`
* This class implements:
[`\Countable`](../../Countable.md), [`\IteratorAggregate`](../../IteratorAggregate.md), [`\ArrayAccess`](../../ArrayAccess.md)



## Properties


### items



```php
protected array $items
```






***

## Methods


### __construct

Constructs a new collection object with optionally a series of items, generally Descriptors.

```php
public __construct(\phpDocumentor\Descriptor\DescriptorAbstract[]|array $items = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **\phpDocumentor\Descriptor\DescriptorAbstract[]&#124;array** |  |




***

### add

Adds a new item to this collection, generally a Descriptor.

```php
public add(\phpDocumentor\Descriptor\DescriptorAbstract|mixed $item): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;mixed** |  |




***

### set

Sets a new object onto the collection or clear it using null.

```php
public set(string|int $index, \phpDocumentor\Descriptor\DescriptorAbstract|mixed|null $item): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string&#124;int** | An index value to recognize this item with. |
| `$item` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;mixed&#124;null** | The item to store, generally a Descriptor but may be something else. |




***

### get

Retrieves a specific item from the Collection with its index.

```php
public get(string|int $index, mixed $valueIfEmpty = null): mixed
```

Please note that this method (intentionally) has the side effect that whenever a key does not exist that it will
be created with the value provided by the $valueIfEmpty argument. This will allow for easy initialization during
tree building operations.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string&#124;int** |  |
| `$valueIfEmpty` | **mixed** | If the index does not exist it will be created with this value and returned. |


**Return Value:**

The contents of the element with the given index and the provided default if the key doesn't exist.



***

### getAll

Retrieves all items from this collection as PHP Array.

```php
public getAll(): array
```











***

### getIterator

Retrieves an iterator to traverse this object.

```php
public getIterator(): \Traversable|\ArrayIterator
```











***

### count

Returns a count of the number of elements in this collection.

```php
public count(): int
```











***

### clear

Empties the collection.

```php
public clear(): void
```











***

### __get

Retrieves an item as if it were a property of the collection.

```php
public __get(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### offsetExists

Checks whether an item in this collection exists.

```php
public offsetExists(string|int $offset): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string&#124;int** | The index to check on. |




***

### offsetGet

Retrieves an item from the collection with the given index.

```php
public offsetGet(string|int $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string&#124;int** | The offset to retrieve. |




***

### offsetSet

Sets an item at the given index.

```php
public offsetSet(string|int $offset, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string&#124;int** | The offset to assign the value to. |
| `$value` | **mixed** | The value to set. |




***

### offsetUnset

Removes an item with the given index from the collection.

```php
public offsetUnset(string|int $offset): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string&#124;int** | The offset to unset. |




***

### merge

Returns a new collection with the items from this collection and the provided combined.

```php
public merge(\phpDocumentor\Descriptor\Collection $collection): \phpDocumentor\Descriptor\Collection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **\phpDocumentor\Descriptor\Collection** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
