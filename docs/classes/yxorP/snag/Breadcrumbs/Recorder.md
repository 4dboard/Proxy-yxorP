***

# Recorder





* Full name: `\yxorP\snag\Breadcrumbs\Recorder`
* This class implements:
[`\Countable`](../../../Countable.md), [`\Iterator`](../../../Iterator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MAX_ITEMS`|public| |25|

## Properties


### breadcrumbs



```php
private array $breadcrumbs
```






***

### head



```php
private int $head
```






***

### pointer



```php
private int $pointer
```






***

### position



```php
private int $position
```






***

## Methods


### record



```php
public record(\yxorP\snag\Breadcrumbs\Breadcrumb $breadcrumb): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$breadcrumb` | **\yxorP\snag\Breadcrumbs\Breadcrumb** |  |




***

### clear



```php
public clear(): mixed
```











***

### current



```php
public current(): mixed
```











***

### key



```php
public key(): mixed
```











***

### next



```php
public next(): mixed
```











***

### rewind



```php
public rewind(): mixed
```











***

### valid



```php
public valid(): bool
```











***

### count



```php
public count(): int
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
