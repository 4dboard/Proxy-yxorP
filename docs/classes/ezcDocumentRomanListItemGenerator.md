***

# ezcDocumentRomanListItemGenerator

Roman number list item generator.

Generator for roman numbered list items. Basically converts the list item
number into a roman number and returns that. Roman numbering is only
properly support up to numbers of about 1000. Lists with more items will
generate strange to read numbers, because they can only be represented using
lots of repetitions of the "M" representing 1000.

* Full name: `\ezcDocumentRomanListItemGenerator`
* Parent class: [`\ezcDocumentAlnumListItemGenerator`](./ezcDocumentAlnumListItemGenerator.md)



## Properties


### numbers

Number map.

```php
protected $numbers
```






***

## Methods


### getListItem

Get list item.

```php
public getListItem(int $number): string
```

Get the n-th list item. The index of the list item is specified by the
number parameter.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |




***


## Inherited methods


### __construct

Constructn for upper/lower output

```php
public __construct(int $style = self::LOWER): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **int** |  |




***

### applyStyle

Apply upper/lower-case style to return value.

```php
protected applyStyle(string $string): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### getListItem

Get list item

```php
public getListItem(int $number): string
```

Get the n-th list item. The index of the list item is specified by the
number parameter.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
