***

# SizeRangeFilterIterator

SizeRangeFilterIterator filters out files that are not in the given size range.

* Full name: `\Symfony\Component\Finder\Iterator\SizeRangeFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)

## Properties

### comparators

```php
private array $comparators
```

***

## Methods

### __construct

```php
public __construct(\Iterator&lt;string,\SplFileInfo&gt; $iterator, \Symfony\Component\Finder\Comparator\NumberComparator[] $comparators): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator<string,\SplFileInfo>** |  |
| `$comparators` | **\Symfony\Component\Finder\Comparator\NumberComparator[]** |  |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

***


***

