***

# PriorityList

* Full name: `\Zend\Stdlib\PriorityList`
* This class implements:
  [`\Iterator`](../../Iterator.md), [`\Countable`](../../Countable.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EXTR_DATA`|public| |0x1|
|`EXTR_PRIORITY`|public| |0x2|
|`EXTR_BOTH`|public| |0x3|

## Properties

### items

Internal list of all items.

```php
protected array[] $items
```

***

### serial

Serial assigned to items to preserve LIFO.

```php
protected int $serial
```

***

### isLIFO

Serial order mode

```php
protected int $isLIFO
```

***

### count

Internal counter to avoid usage of count().

```php
protected int $count
```

***

### sorted

Whether the list was already sorted.

```php
protected bool $sorted
```

***

## Methods

### insert

Insert a new item.

```php
public insert(string $name, mixed $value, int $priority): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |
| `$priority` | **int** |  |

***

### setPriority

```php
public setPriority(string $name, int $priority): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$priority` | **int** |  |

***

### remove

Remove a item.

```php
public remove(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### clear

Remove all items.

```php
public clear(): void
```

***

### get

Get a item.

```php
public get(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### sort

Sort all items.

```php
protected sort(): void
```

***

### compare

Compare the priority of two items.

```php
protected compare(array $item1, array $item2): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item1` | **array** |  |
| `$item2` | **array** |  |

***

### isLIFO

Get/Set serial order mode

```php
public isLIFO(bool|null $flag = null): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool&#124;null** |  |

***

### rewind

{@inheritDoc}

```php
public rewind(): mixed
```

***

### current

{@inheritDoc}

```php
public current(): mixed
```

***

### key

{@inheritDoc}

```php
public key(): mixed
```

***

### next

{@inheritDoc}

```php
public next(): mixed
```

***

### valid

{@inheritDoc}

```php
public valid(): mixed
```

***

### getIterator

```php
public getIterator(): self
```

***

### count

{@inheritDoc}

```php
public count(): mixed
```

***

### toArray

Return list as array

```php
public toArray(int $flag = self::EXTR_DATA): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **int** |  |

yxorP::get('REQUEST')
