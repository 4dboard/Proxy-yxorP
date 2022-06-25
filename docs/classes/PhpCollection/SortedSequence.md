***

# SortedSequence

A sequence with a fixed sort-order.

* Full name: `\PhpCollection\SortedSequence`
* Parent class: [`\PhpCollection\AbstractSequence`](./AbstractSequence.md)

## Properties

### sortFunc

```php
private $sortFunc
```

***

## Methods

### __construct

```php
public __construct(mixed $sortFunc, array $elements = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sortFunc` | **mixed** |  |
| `$elements` | **array** |  |

***

### add

Adds an element to the sequence.

```php
public add(mixed $newElement): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newElement` | **mixed** |  |

***

### addAll

Adds all elements to the sequence.

```php
public addAll(array $addedElements): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addedElements` | **array** |  |

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

### __construct

```php
public __construct(array $elements = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |

***

### addSequence

Adds the elements of another sequence to this sequence.

```php
public addSequence(\PhpCollection\SequenceInterface $seq): \PhpCollection\SequenceInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$seq` | **\PhpCollection\SequenceInterface** |  |

***

### indexOf

Returns the index of the passed element.

```php
public indexOf(mixed $searchedElement): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchedElement` | **mixed** |  |

**Return Value:**

the index (0-based), or -1 if not found



***

### lastIndexOf

Returns the last index of the passed element.

```php
public lastIndexOf(mixed $searchedElement): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$searchedElement` | **mixed** |  |

**Return Value:**

the index (0-based), or -1 if not found



***

### reverse

Returns a new Sequence with all elements in reverse order.

```php
public reverse(): \PhpCollection\SequenceInterface
```

***

### isDefinedAt

Returns whether the given index is defined in the sequence.

```php
public isDefinedAt(mixed $index): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** | (0-based) |

***

### filter

Returns a filtered sequence.

```php
public filter(callable $callable): \PhpCollection\AbstractSequence
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives the element and must return true (= keep) or false (= remove). |

***

### map

Creates a new collection by applying the passed callable to all elements of the current collection.

```php
public map(mixed $callable): \PhpCollection\CollectionInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** |  |

***

### filterNot

Returns a filtered sequence.

```php
public filterNot(callable $callable): \PhpCollection\AbstractSequence
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives the element and must return true (= remove) or false (= keep). |

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

### indexWhere

Finds the first index where the given callable returns true.

```php
public indexWhere(callable $callable): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |

**Return Value:**

the index, or -1 if the predicate is not true for any element.



***

### lastIndexWhere

Returns the last index where the given callable returns true.

```php
public lastIndexWhere(mixed $callable): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** | receives the element as first argument, and returns true, or false |

**Return Value:**

the index (0-based), or -1 if the callable returns false for all elements



***

### last

Returns the last element in the collection if available.

```php
public last(): \PhpOption\Option
```

***

### first

Returns the first element in the collection if available.

```php
public first(): \PhpOption\Option
```

***

### indices

Returns all indices of this collection.

```php
public indices(): int[]
```

***

### get

Returns an element based on its index (0-based).

```php
public get(int $index): \PhpCollection\T
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** |  |

***

### remove

Removes the element at the given index, and returns it.

```php
public remove(int $index): \PhpCollection\T
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** |  |

***

### update

Updates the element at the given index (0-based).

```php
public update(int $index, \PhpCollection\T $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** |  |
| `$value` | **\PhpCollection\T** |  |

***

### isEmpty

```php
public isEmpty(): mixed
```

***

### all

Returns all elements in this sequence.

```php
public all(): array
```

***

### add

Adds an element to the sequence.

```php
public add(mixed $newElement): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newElement` | **mixed** |  |

***

### addAll

Adds all elements to the sequence.

```php
public addAll(array $addedElements): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$addedElements` | **array** |  |

***

### take

Creates a new collection by taking the given number of elements from the beginning of the current collection.

```php
public take(mixed $number): \PhpCollection\CollectionInterface
```

If the passed number is greater than the available number of elements, then all elements will be returned as a new
collection.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |

***

### takeWhile

Extracts element from the head while the passed callable returns true.

```php
public takeWhile(callable $callable): \PhpCollection\Sequence
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** | receives elements of this sequence as first argument, and returns true/false. |

***

### drop

Returns a new sequence by omitting the given number of elements from the beginning.

```php
public drop(mixed $number): \PhpCollection\SequenceInterface
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
public dropRight(mixed $number): \PhpCollection\SequenceInterface
```

If the passed number is greater than the available number of elements, all will be removed.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **mixed** |  |

***

### dropWhile

Returns a new sequence by omitting elements from the beginning for as long as the callable returns true.

```php
public dropWhile(mixed $callable): \PhpCollection\SequenceInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **mixed** | Receives the element to drop as first argument, and returns true (drop), or false (stop). |

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

yxorP::get('REQUEST')
