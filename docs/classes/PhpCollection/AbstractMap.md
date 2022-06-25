***

# AbstractMap

A simple map implementation which basically wraps an array with an object oriented interface.



* Full name: `\PhpCollection\AbstractMap`
* Parent class: [`\PhpCollection\AbstractCollection`](./AbstractCollection.md)
* This class implements:
[`\IteratorAggregate`](../IteratorAggregate.md), [`\PhpCollection\MapInterface`](./MapInterface.md)



## Properties


### elements



```php
protected $elements
```






***

## Methods


### __construct



```php
public __construct(array $elements = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### set

Puts a new element in the map.

```php
public set(mixed $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### exists



```php
public exists(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### setAll

Sets all key/value pairs in the map.

```php
public setAll(array $kvMap): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kvMap` | **array** |  |




***

### addMap

Adds all another map to this map, and returns itself.

```php
public addMap(\PhpCollection\MapInterface $map): \PhpCollection\MapInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$map` | **\PhpCollection\MapInterface** |  |




***

### get

Returns the value associated with the given key.

```php
public get(mixed $key): \PhpOption\Option
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |


**Return Value:**

on V



***

### all

Returns all elements in this collection.

```php
public all(): array
```











***

### remove

Removes an element from the map.

```php
public remove(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### clear



```php
public clear(): mixed
```











***

### first

Returns the first element in the collection if available.

```php
public first(): \PhpOption\Option
```









**Return Value:**

on array<K,V>



***

### last

Returns the last element in the collection if available.

```php
public last(): \PhpOption\Option
```









**Return Value:**

on array<K,V>



***

### contains



```php
public contains(mixed $elem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




***

### containsKey

Returns whether this map contains a given key.

```php
public containsKey(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### isEmpty



```php
public isEmpty(): mixed
```











***

### filter

Returns a new filtered map.

```php
public filter(callable $callable): \PhpCollection\AbstractMap
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives the element and must return true (= keep), or false (= remove). |




***

### filterNot

Returns a new filtered map.

```php
public filterNot(callable $callable): \PhpCollection\AbstractMap
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives the element and must return true (= remove), or false (= keep). |




***

### filterInternal



```php
private filterInternal(callable $callable, bool $booleanKeep): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |
| `$booleanKeep` | **bool** |  |




***

### foldLeft



```php
public foldLeft(mixed $initialValue, mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialValue` | **mixed** |  |
| `$callable` | **mixed** |  |




***

### foldRight



```php
public foldRight(mixed $initialValue, mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$initialValue` | **mixed** |  |
| `$callable` | **mixed** |  |




***

### dropWhile

Returns a new sequence by omitting elements from the beginning for as long as the callable returns true.

```php
public dropWhile(mixed $callable): \PhpCollection\MapInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** | Receives the element to drop as first argument, and returns true (drop), or false (stop). |




***

### drop

Returns a new sequence by omitting the given number of elements from the beginning.

```php
public drop(mixed $number): \PhpCollection\MapInterface
```

If the passed number is greater than the available number of elements, all will be removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### dropRight

Returns a new sequence by omitting the given number of elements from the end.

```php
public dropRight(mixed $number): \PhpCollection\MapInterface
```

If the passed number is greater than the available number of elements, all will be removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### take

Creates a new collection by taking the given number of elements from the beginning
of the current collection.

```php
public take(mixed $number): \PhpCollection\MapInterface
```

If the passed number is greater than the available number of elements, then all elements
will be returned as a new collection.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### takeWhile

Creates a new collection by taking elements from the current collection
for as long as the callable returns true.

```php
public takeWhile(mixed $callable): \PhpCollection\MapInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### find



```php
public find(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### keys

Returns an array with the keys.

```php
public keys(): array
```











***

### values

Returns an array with the values.

```php
public values(): array
```











***

### count



```php
public count(): mixed
```











***

### getIterator



```php
public getIterator(): mixed
```











***

### createNew



```php
protected createNew(array $elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***


## Inherited methods


### contains



```php
public contains(mixed $searchedElem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchedElem` | **mixed** |  |




***

### find



```php
public find(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
