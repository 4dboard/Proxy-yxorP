***

# Base

Represents a pizza base.



* Full name: `\PhpDocumentorMarkdown\Example\Pizza\Base`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`YEAST_SOURDOUGH_STARTER`|private| |0b1|
|`YEAST_FRESH`|public| |0b10|
|`YEAST_ACTIVE_DRY`|public| |0b11|

## Properties


### sauce

The sauce used.

```php
protected \PhpDocumentorMarkdown\Example\Pizza\Sauce $sauce
```






***

### yeast

Type of yeast used.

```php
protected int $yeast
```






***

## Methods


### __construct



```php
public __construct(\PhpDocumentorMarkdown\Example\Pizza\Sauce $sauce, int $yeast = self::YEAST_SOURDOUGH_STARTER): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sauce` | **\PhpDocumentorMarkdown\Example\Pizza\Sauce** |  |
| `$yeast` | **int** |  |




***

### getSauce



```php
public getSauce(): \PhpDocumentorMarkdown\Example\Pizza\Sauce
```











***

### getYeast



```php
public getYeast(): int
```











***


***

