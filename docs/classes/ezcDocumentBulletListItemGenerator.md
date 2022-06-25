***

# ezcDocumentBulletListItemGenerator

List item generator.

Simple bullet list item generator, which returns the character passed to the
constructor for each list item.

* Full name: `\ezcDocumentBulletListItemGenerator`
* Parent class: [`\ezcDocumentListItemGenerator`](./ezcDocumentListItemGenerator.md)



## Properties


### character

Character used for the bullet lsit items

```php
protected string $character
```






***

## Methods


### __construct

Construct from bullet to use

```php
public __construct(string $char = &#039;-&#039;): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$char` | **string** |  |




***

### getListItem

Get list item

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
