***

# DepthRangeFilterIterator

DepthRangeFilterIterator limits the directory depth.

* Full name: `\Symfony\Component\Finder\Iterator\DepthRangeFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)

## Properties

### minDepth

```php
private int $minDepth
```

***

## Methods

### __construct

```php
public __construct(\RecursiveIteratorIterator&lt;\RecursiveIterator&lt;\Symfony\Component\Finder\Iterator\TKey,\Symfony\Component\Finder\Iterator\TValue&gt;&gt; $iterator, int $minDepth, int $maxDepth = PHP_INT_MAX): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\RecursiveIteratorIterator<\RecursiveIterator<\Symfony\Component\Finder\Iterator\TKey,\Symfony\Component\Finder\Iterator\TValue>>** | The Iterator to filter |
| `$minDepth` | **int** | The min depth |
| `$maxDepth` | **int** | The max depth |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

***


***

