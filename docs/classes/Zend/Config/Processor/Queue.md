***

# Queue

Re-usable, serializable priority queue implementation

SplPriorityQueue acts as a heap; on iteration, each item is removed from the queue. If you wish to re-use such a queue,
you need to clone it first. This makes for some interesting issues if you wish to delete items from the queue, or, as
already stated, iterate over it multiple times.

This class aggregates items for the queue itself, but also composes an
"inner" iterator in the form of an SplPriorityQueue object for performing the actual iteration.

* Full name: `\Zend\Config\Processor\Queue`
* Parent class: [`\Zend\Stdlib\PriorityQueue`](../../Stdlib/PriorityQueue.md)
* This class implements:
  [`\Zend\Config\Processor\ProcessorInterface`](./ProcessorInterface.md)

## Methods

### process

Process the whole config structure with each parser in the queue.

```php
public process(\Zend\Config\Config $config): \Zend\Config\Config
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Zend\Config\Config** |  |

***

### processValue

Process a single value

```php
public processValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

## Inherited methods

### insert

Insert an item into the queue

```php
public insert(mixed $data, int $priority = 1): \Zend\Stdlib\PriorityQueue
```

Priority defaults to 1 (low priority) if none provided.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$priority` | **int** |  |

***

### remove

Remove an item from the queue

```php
public remove(mixed $datum): bool
```

This is different than {@link}; its purpose is to dequeue an item.

This operation is potentially expensive, as it requires re-initialization and re-population of the inner queue.

Note: this removes the first item matching the provided item found. If the same item has been added multiple times, it
will not remove other instances.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |

**Return Value:**

False if the item was not found, true otherwise.



***

### isEmpty

Is the queue empty?

```php
public isEmpty(): bool
```

***

### count

How many items are in the queue?

```php
public count(): int
```

***

### top

Peek at the top node in the queue, based on priority.

```php
public top(): mixed
```

***

### extract

Extract a node from the inner queue and sift up

```php
public extract(): mixed
```

***

### getIterator

Retrieve the inner iterator

```php
public getIterator(): \Zend\Stdlib\SplPriorityQueue
```

SplPriorityQueue acts as a heap, which typically implies that as items are iterated, they are also removed. This does
not work for situations where the queue may be iterated multiple times. As such, this class aggregates the values, and
also injects an SplPriorityQueue. This method retrieves the inner queue object, and clones it for purposes of iteration.









***

### serialize

Serialize the data structure

```php
public serialize(): string
```

***

### unserialize

Unserialize a string into a PriorityQueue object

```php
public unserialize(string $data): void
```

Serialization format is compatible with {@link}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |

***

### toArray

Serialize to an array

```php
public toArray(int $flag = self::EXTR_DATA): array
```

By default, returns only the item data, and in the order registered (not sorted). You may provide one of the EXTR_*
flags as an argument, allowing the ability to return priorities or both data and priority.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **int** |  |

***

### setInternalQueueClass

Specify the internal queue class

```php
public setInternalQueueClass(string $class): \Zend\Stdlib\PriorityQueue
```

Please see {@link} for details on the necessity of an internal queue class. The class provided should extend
SplPriorityQueue.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |

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

### getQueue

Get the inner priority queue instance

```php
protected getQueue(): \Zend\Stdlib\SplPriorityQueue
```

***

### __clone

Add support for deep cloning

```php
public __clone(): void
```

yxorP::get('REQUEST')
