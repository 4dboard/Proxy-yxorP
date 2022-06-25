***

# FilterIterator

Specialized priority queue implementation for use with an intercepting filter chain.

Allows removal

* Full name: `\Zend\EventManager\Filter\FilterIterator`
* Parent class: [`\Zend\Stdlib\SplPriorityQueue`](../../Stdlib/SplPriorityQueue.md)

## Methods

### contains

Does the queue contain a given value?

```php
public contains(mixed $datum): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |

***

### remove

Remove a value from the queue

```php
public remove(mixed $datum): bool
```

This is an expensive operation. It must first iterate through all values, and then re-populate itself. Use only if
absolutely necessary.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |

***

### next

Iterate the next filter in the chain

```php
public next(mixed $context = null, array $params = [], \Zend\EventManager\Filter\FilterIterator $chain = null): mixed
```

Iterates and calls the next filter in the chain.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **mixed** |  |
| `$params` | **array** |  |
| `$chain` | **\Zend\EventManager\Filter\FilterIterator** |  |

***

## Inherited methods

### insert

Insert a value with a given priority

```php
public insert(mixed $datum, mixed $priority): void
```

Utilizes {@var} to ensure that values of equal priority are emitted in the same order in which they are inserted.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datum` | **mixed** |  |
| `$priority` | **mixed** |  |

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

yxorP::get('REQUEST')
