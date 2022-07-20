***

# Palette





* Full name: `\League\ColorExtractor\Palette`
* This class implements:
[`\Countable`](../../Countable.md), [`\IteratorAggregate`](../../IteratorAggregate.md)



## Properties


### colors



```php
protected array $colors
```






***

## Methods


### __construct



```php
protected __construct(): mixed
```











***

### fromFilename



```php
public static fromFilename(string $filename, int|null $backgroundColor = null): \League\ColorExtractor\Palette
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$backgroundColor` | **int&#124;null** |  |




***

### fromGD



```php
public static fromGD(resource $image, int|null $backgroundColor = null): \League\ColorExtractor\Palette
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$image` | **resource** |  |
| `$backgroundColor` | **int&#124;null** |  |




***

### count



```php
public count(): int
```











***

### getIterator



```php
public getIterator(): \ArrayIterator
```











***

### getColorCount



```php
public getColorCount(int $color): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **int** |  |




***

### getMostUsedColors



```php
public getMostUsedColors(int $limit = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | = null |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
