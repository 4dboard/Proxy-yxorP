***

# RecursiveDirectoryIterator

Extends the \RecursiveDirectoryIterator to support relative paths.



* Full name: `\Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator`
* Parent class: [`RecursiveDirectoryIterator`](../../../../RecursiveDirectoryIterator.md)



## Properties


### ignoreUnreadableDirs



```php
private bool $ignoreUnreadableDirs
```






***

### rewindable



```php
private ?bool $rewindable
```






***

### rootPath



```php
private string $rootPath
```






***

### subPath



```php
private string $subPath
```






***

### directorySeparator



```php
private string $directorySeparator
```






***

## Methods


### __construct



```php
public __construct(string $path, int $flags, bool $ignoreUnreadableDirs = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$flags` | **int** |  |
| `$ignoreUnreadableDirs` | **bool** |  |




***

### current

Return an instance of SplFileInfo with support for relative paths.

```php
public current(): \Symfony\Component\Finder\SplFileInfo
```











***

### hasChildren



```php
public hasChildren(bool $allowLinks = false): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowLinks` | **bool** |  |




***

### getChildren



```php
public getChildren(): \RecursiveDirectoryIterator
```











***

### rewind

Do nothing for non rewindable stream.

```php
public rewind(): void
```











***

### isRewindable

Checks if the stream is rewindable.

```php
public isRewindable(): bool
```











***


***

