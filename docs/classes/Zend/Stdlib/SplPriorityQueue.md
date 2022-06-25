***

# SplPriorityQueue

Serializable version of SplPriorityQueue

Also, provides predictable heap order for datums added with the same priority
(i.e., they will be emitted in the same order they are enqueued).

* Full name: `\Zend\Stdlib\SplPriorityQueue`
* Parent class: [`SplPriorityQueue`](../../SplPriorityQueue.md)
* This class implements:
  [`\Serializable`](../../Serializable.md)

## Properties

### serial

```php
protected int $serial
```

***

## Methods

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
