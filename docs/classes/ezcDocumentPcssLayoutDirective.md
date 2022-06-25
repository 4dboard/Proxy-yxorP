***

# ezcDocumentPcssLayoutDirective

Pdf CSS layout directive.



* Full name: `\ezcDocumentPcssLayoutDirective`
* Parent class: [`\ezcDocumentPcssDirective`](./ezcDocumentPcssDirective.md)



## Properties


### regularExpression

Regular expression compiled from directive address.

```php
protected string $regularExpression
```






***

## Methods


### compileRegularExpression

Compile regular expression.

```php
protected compileRegularExpression(): mixed
```

Compiles the address of this style directive into a PCRE regular
expression, which then can be matched against location IDs.









***

### getRegularExpression

Return a PCRE regular expression for directive address.

```php
public getRegularExpression(): string
```

Return a PCRE regular expression representing the address of
the directive, intended to match location IDs representing
the docbook element nodes.









***

### __set_state

Recreate directive from var_export.

```php
public static __set_state(array $properties): \ezcDocumentPcssDirective
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** |  |




***


## Inherited methods


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
