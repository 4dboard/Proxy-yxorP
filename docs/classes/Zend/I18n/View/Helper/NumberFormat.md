***

# NumberFormat

View helper for formatting dates.



* Full name: `\Zend\I18n\View\Helper\NumberFormat`
* Parent class: [`AbstractHelper`](../../../View/Helper/AbstractHelper.md)



## Properties


### decimals

number of decimals to use.

```php
protected int $decimals
```






***

### formatStyle

NumberFormat style to use

```php
protected int $formatStyle
```






***

### formatType

NumberFormat type to use

```php
protected int $formatType
```






***

### formatters

Formatter instances

```php
protected array $formatters
```






***

### locale

Locale to use instead of the default

```php
protected string $locale
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### __invoke

Format a number

```php
public __invoke(int|float $number, int $formatStyle = null, int $formatType = null, string $locale = null, int $decimals = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int&#124;float** |  |
| `$formatStyle` | **int** |  |
| `$formatType` | **int** |  |
| `$locale` | **string** |  |
| `$decimals` | **int** |  |




***

### setFormatStyle

Set format style to use instead of the default

```php
public setFormatStyle(int $formatStyle): \Zend\I18n\View\Helper\NumberFormat
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatStyle` | **int** |  |




***

### getFormatStyle

Get the format style to use

```php
public getFormatStyle(): int
```











***

### setFormatType

Set format type to use instead of the default

```php
public setFormatType(int $formatType): \Zend\I18n\View\Helper\NumberFormat
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatType` | **int** |  |




***

### getFormatType

Get the format type to use

```php
public getFormatType(): int
```











***

### setDecimals

Set number of decimals to use instead of the default.

```php
public setDecimals(int $decimals): \Zend\I18n\View\Helper\NumberFormat
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decimals` | **int** |  |




***

### getDecimals

Get number of decimals.

```php
public getDecimals(): int
```











***

### setLocale

Set locale to use instead of the default.

```php
public setLocale(string $locale): \Zend\I18n\View\Helper\NumberFormat
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |




***

### getLocale

Get the locale to use

```php
public getLocale(): string|null
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
