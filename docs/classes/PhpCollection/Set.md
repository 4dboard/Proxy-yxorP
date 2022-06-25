***

# Set

Implementation of a Set.

Each set guarantees that equal elements are only contained once in the Set.

This implementation constraints Sets to either consist of objects that implement ObjectBasics, or objects that have
an external ObjectBasicsHandler implementation, or simple scalars. These types cannot be mixed within the same Set.

* Full name: `\PhpCollection\Set`
* This class implements:
[`\PhpCollection\SetInterface`](./SetInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ELEM_TYPE_SCALAR`|public| |1|
|`ELEM_TYPE_OBJECT`|public| |2|
|`ELEM_TYPE_OBJECT_WITH_HANDLER`|public| |3|

## Properties


### elementType



```php
private $elementType
```






***

### elements



```php
private $elements
```






***

### elementCount



```php
private $elementCount
```






***

### lookup



```php
private $lookup
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

### first

Returns the first element in the collection if available.

```php
public first(): \PhpOption\Option
```











***

### last

Returns the last element in the collection if available.

```php
public last(): \PhpOption\Option
```











***

### getIterator



```php
public getIterator(): mixed
```











***

### addSet

Adds the elements of another Set to this Set.

```php
public addSet(\PhpCollection\SetInterface $set): \PhpCollection\SetInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$set` | **\PhpCollection\SetInterface** |  |




***

### take

Creates a new collection by taking the given number of elements from the beginning
of the current collection.

```php
public take(mixed $number): \PhpCollection\CollectionInterface
```

If the passed number is greater than the available number of elements, then all elements
will be returned as a new collection.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### takeWhile

Extracts element from the head while the passed callable returns true.

```php
public takeWhile(callable $callable): \PhpCollection\Set
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives elements of this Set as first argument, and returns true/false. |




***

### drop

Returns a new Set by omitting the given number of elements from the beginning.

```php
public drop(mixed $number): \PhpCollection\SetInterface
```

If the passed number is greater than the available number of elements, all will be removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### dropRight

Returns a new Set by omitting the given number of elements from the end.

```php
public dropRight(mixed $number): \PhpCollection\SetInterface
```

If the passed number is greater than the available number of elements, all will be removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |




***

### dropWhile

Returns a new Set by omitting elements from the beginning for as long as the callable returns true.

```php
public dropWhile(mixed $callable): \PhpCollection\SetInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** | Receives the element to drop as first argument, and returns true (drop), or false (stop). |




***

### map

Creates a new collection by applying the passed callable to all elements
of the current collection.

```php
public map(mixed $callable): \PhpCollection\CollectionInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### reverse

Returns a new Set with all elements in reverse order.

```php
public reverse(): \PhpCollection\SetInterface
```











***

### all

Returns all elements in this Set.

```php
public all(): array
```











***

### filterNot



```php
public filterNot(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




***

### filter



```php
public filter(mixed $callable): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |




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

### addAll



```php
public addAll(array $elements): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### count



```php
public count(): mixed
```











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

### remove



```php
public remove(mixed $elem): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




***

### isEmpty



```php
public isEmpty(): mixed
```











***

### add



```php
public add(mixed $elem): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




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

### filterInternal



```php
private filterInternal(mixed $callable, mixed $booleanKeep): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |
| `$booleanKeep` | **mixed** |  |




***

### containsScalar



```php
private containsScalar(mixed $elem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




***

### containsObjectWithHandler



```php
private containsObjectWithHandler(mixed $object, \PhpCollection\ObjectBasicsHandler $handler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$handler` | **\PhpCollection\ObjectBasicsHandler** |  |




***

### containsObject



```php
private containsObject(\PhpCollection\ObjectBasics $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\PhpCollection\ObjectBasics** |  |




***

### removeScalar



```php
private removeScalar(mixed $elem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




***

### removeObjectWithHandler



```php
private removeObjectWithHandler(mixed $object, \PhpCollection\ObjectBasicsHandler $handler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$handler` | **\PhpCollection\ObjectBasicsHandler** |  |




***

### removeObject



```php
private removeObject(\PhpCollection\ObjectBasics $object): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\PhpCollection\ObjectBasics** |  |




***

### removeElement



```php
private removeElement(mixed $hash, mixed $lookupIndex, mixed $storageIndex): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **mixed** |  |
| `$lookupIndex` | **mixed** |  |
| `$storageIndex` | **mixed** |  |




***

### addScalar



```php
private addScalar(mixed $elem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |




***

### addObjectWithHandler



```php
private addObjectWithHandler(mixed $object, \PhpCollection\ObjectBasicsHandler $handler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **mixed** |  |
| `$handler` | **\PhpCollection\ObjectBasicsHandler** |  |




***

### addObject



```php
private addObject(\PhpCollection\ObjectBasics $elem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **\PhpCollection\ObjectBasics** |  |




***

### insertElement



```php
private insertElement(mixed $elem, mixed $hash): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elem` | **mixed** |  |
| `$hash` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
