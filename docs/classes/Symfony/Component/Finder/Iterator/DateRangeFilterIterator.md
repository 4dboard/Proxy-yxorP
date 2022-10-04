***

# DateRangeFilterIterator

DateRangeFilterIterator filters out files that are not in the given date range (last modified dates).

* Full name: `\Symfony\Component\Finder\Iterator\DateRangeFilterIterator`
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
public __construct(\Iterator&lt;string,\SplFileInfo&gt; $iterator, \Symfony\Component\Finder\Comparator\DateComparator[] $comparators): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator<string,\SplFileInfo>** |  |
| `$comparators` | **\Symfony\Component\Finder\Comparator\DateComparator[]** |  |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

***


***

