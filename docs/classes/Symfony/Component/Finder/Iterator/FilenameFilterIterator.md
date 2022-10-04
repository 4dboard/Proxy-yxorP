***

# FilenameFilterIterator

FilenameFilterIterator filters files by patterns (a regexp, a glob, or a string).



* Full name: `\Symfony\Component\Finder\Iterator\FilenameFilterIterator`
* Parent class: [`\Symfony\Component\Finder\Iterator\MultiplePcreFilterIterator`](./MultiplePcreFilterIterator.md)




## Methods


### accept

Filters the iterator values.

```php
public accept(): bool
```











***

### toRegex

Converts glob to regexp.

```php
protected toRegex(string $str): string
```

PCRE patterns are left unchanged.
Glob strings are transformed with Glob::toRegex().






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | Pattern: glob or regexp |




***


## Inherited methods


### __construct



```php
public __construct(\Iterator $iterator, string[] $matchPatterns, string[] $noMatchPatterns): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$matchPatterns` | **string[]** | An array of patterns that need to match |
| `$noMatchPatterns` | **string[]** | An array of patterns that need to not match |




***

### isAccepted

Checks whether the string is accepted by the regex filters.

```php
protected isAccepted(string $string): bool
```

If there is no regexps defined in the class, this method will accept the string.
Such case can be handled by child classes before calling the method if they want to
apply a different behavior.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




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
| `$str` | **string** |  |




***


***

