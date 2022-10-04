***

# CustomFilterIterator

CustomFilterIterator filters files by applying anonymous functions.

The anonymous function receives a \SplFileInfo and must return false
to remove files.

* Full name: `\Symfony\Component\Finder\Iterator\CustomFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)

## Properties

### filters

```php
private array $filters
```

***

## Methods

### __construct

```php
public __construct(\Iterator&lt;string,\SplFileInfo&gt; $iterator, callable[] $filters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator<string,\SplFileInfo>** | The Iterator to filter |
| `$filters` | **callable[]** | An array of PHP callbacks |

***

### accept

Filters the iterator values.

```php
public accept(): bool
```

***


***

