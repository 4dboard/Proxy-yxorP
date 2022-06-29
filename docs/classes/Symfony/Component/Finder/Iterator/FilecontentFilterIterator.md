***

# FilecontentFilterIterator

FilecontentFilterIterator filters files by their contents using patterns (regexps or strings).

* Full name: `\Symfony\Component\Finder\Iterator\FilecontentFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\MultiplePcreFilterIterator`](./MultiplePcreFilterIterator.md)

## Methods

### accept

Filters the iterator values.

```php
public accept(): bool
```

**Return Value:**

true if the value should be kept, false otherwise



***

### toRegex

Converts string to regexp if necessary.

```php
protected toRegex(string $str): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | Pattern: string or regexp |

**Return Value:**

regexp corresponding to a given string or regexp



***

## Inherited methods

### __construct

```php
public __construct(\Iterator $iterator, array $matchPatterns, array $noMatchPatterns): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$matchPatterns` | **array** | An array of patterns that need to match |
| `$noMatchPatterns` | **array** | An array of patterns that need to not match |

***

### isAccepted

Checks whether the string is accepted by the regex filters.

```php
protected isAccepted(string $string): bool
```

If there is no regexps defined in the class, this method will accept the string. Such case can be handled by child
classes before calling the method if they want to apply a different behavior.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to be matched against filters |

***

### isRegex

Checks whether the string is a regex.

```php
protected isRegex(string $str): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

**Return Value:**

Whether the given string is a regex



***

### toRegex

Converts string into regexp.

```php
protected toRegex(string $str): string
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | Pattern |

**Return Value:**

regexp corresponding to a given string



***

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

