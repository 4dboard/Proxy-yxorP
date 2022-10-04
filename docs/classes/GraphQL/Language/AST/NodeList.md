***

# NodeList

* Full name: `\GraphQL\Language\AST\NodeList`
* This class implements:
  [`\ArrayAccess`](../../../ArrayAccess.md), [`\IteratorAggregate`](../../../IteratorAggregate.md)
  , [`\Countable`](../../../Countable.md)

## Properties

### nodes

```php
private \GraphQL\Language\AST\Node[] $nodes
```

***

## Methods

### create

```php
public static create(\GraphQL\Language\AST\Node[] $nodes): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\GraphQL\Language\AST\Node[]** |  |

***

### __construct

```php
public __construct(\GraphQL\Language\AST\Node[] $nodes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\GraphQL\Language\AST\Node[]** |  |

***

### offsetExists

```php
public offsetExists(int|string $offset): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** |  |

***

### offsetGet

TODO enable strict typing by changing how the Visitor deals with NodeList.

```php
public offsetGet(int|string $offset): mixed
```

Ideally, this function should always return a Node instance.
However, the Visitor currently allows mutation of the NodeList
and puts arbitrary values in the NodeList, such as strings.
We will have to switch to using an array or a less strict
type instead so we can enable strict typing in this class.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** |  |

***

### offsetSet

```php
public offsetSet(int|string|null $offset, \GraphQL\Language\AST\Node|array $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string&#124;null** |  |
| `$value` | **\GraphQL\Language\AST\Node&#124;array** |  |

***

### offsetUnset

```php
public offsetUnset(int|string $offset): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** |  |

***

### splice

```php
public splice(int $offset, int $length, mixed $replacement = null): \GraphQL\Language\AST\NodeList
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |
| `$length` | **int** |  |
| `$replacement` | **mixed** |  |

***

### merge

```php
public merge(\GraphQL\Language\AST\NodeList|\GraphQL\Language\AST\Node[] $list): \GraphQL\Language\AST\NodeList
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **\GraphQL\Language\AST\NodeList&#124;\GraphQL\Language\AST\Node[]** |  |

***

### getIterator

```php
public getIterator(): \Traversable
```

***

### count

```php
public count(): int
```

***


***

