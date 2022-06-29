***

# CustomFilterIterator

CustomFilterIterator filters files by applying anonymous functions.

The anonymous function receives a \SplFileInfo and must return false to remove files.

* Full name: `\Symfony\Component\Finder\Iterator\CustomFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\FilterIterator`](./FilterIterator.md)

## Properties

### filters

```php
private $filters
```

***

## Methods

### __construct

```php
public __construct(\Iterator $iterator, callable[] $filters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$filters` | **callable[]** | An array of PHP callbacks |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

**Return Value:**

true if the value should be kept, false otherwise



***

## Inherited methods

### rewind

This is a workaround for the problem with \FilterIterator leaving inner \FilesystemIterator in wrong state after rewind
in some cases.

```php
public rewind(): mixed
```

**See Also:**

* \Symfony\Component\Finder\Iterator\FilterIterator::rewind() -

***


***

