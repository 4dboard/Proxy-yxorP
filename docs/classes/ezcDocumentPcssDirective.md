***

# ezcDocumentPcssDirective

Pdf CSS layout directive.



* Full name: `\ezcDocumentPcssDirective`
* Parent class: [`\ezcBaseStruct`](./ezcBaseStruct.md)
* This class is an **Abstract class**



## Properties


### address

Directive address

```php
public mixed $address
```






***

### formats

Array of formatting rules

```php
public array $formats
```






***

### file

File, directive has been extracted from

```php
public string $file
```






***

### line

Line of directive

```php
public int $line
```






***

### position

Position of directive

```php
public int $position
```






***

### regularExpression

Regular expression compiled from directive address

```php
protected string $regularExpression
```






***

## Methods


### __construct

Construct directive from address and formats

```php
public __construct(string $address, array $formats, string $file = null, int $line = null, int $position = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$address` | **string** |  |
| `$formats` | **array** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$position` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
