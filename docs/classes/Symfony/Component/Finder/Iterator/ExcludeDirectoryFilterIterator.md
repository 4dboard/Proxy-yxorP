***

# ExcludeDirectoryFilterIterator

ExcludeDirectoryFilterIterator filters out directories.



* Full name: `\Symfony\Component\Finder\Iterator\ExcludeDirectoryFilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)
* This class implements:
[`\RecursiveIterator`](../../../../RecursiveIterator.md)



## Properties


### iterator



```php
private \Iterator $iterator
```






***

### isRecursive



```php
private bool $isRecursive
```






***

### excludedDirs



```php
private array $excludedDirs
```






***

### excludedPattern



```php
private ?string $excludedPattern
```






***

## Methods


### __construct



```php
public __construct(\Iterator $iterator, string[] $directories): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterator` | **\Iterator** | The Iterator to filter |
| `$directories` | **string[]** | An array of directories to exclude |




***

### accept

Filters the iterator values.

```php
public accept(): bool
```











***

### hasChildren



```php
public hasChildren(): bool
```











***

### getChildren



```php
public getChildren(): self
```











***


***

