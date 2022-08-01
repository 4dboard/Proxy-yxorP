***

# collectionReader





* Full name: `\JSONStream\collectionReader`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CHUNK_SIZE`|public| |8192|

## Properties


### resource



```php
protected $resource
```






***

### asArray



```php
protected bool $asArray
```






***

### buffer



```php
protected string $buffer
```






***

### nestingLevel



```php
protected int $nestingLevel
```






***

## Methods


### __construct



```php
public __construct(string $path, bool $asArray = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$asArray` | **bool** |  |




***

### get



```php
public get(): \Generator
```











***

### parseChunk



```php
private parseChunk(mixed $chunk): \Generator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chunk` | **mixed** |  |




***

### __destruct



```php
public __destruct(): mixed
```











***

### close



```php
public close(): void
```











***


***

