***

# ezcDocumentPcssStyleColorValue

Style directive color value representation.



* Full name: `\ezcDocumentPcssStyleColorValue`
* Parent class: [`\ezcDocumentPcssStyleValue`](./ezcDocumentPcssStyleValue.md)



## Properties


### shortHexNotation

Sub regular expression for short hexadecimal color notation.

```php
protected string $shortHexNotation
```






***

### longHexNotation

Sub regular expression for long hexadecimal color notation.

```php
protected string $longHexNotation
```






***

### rgbSpec

Sub regular expression for rgb() color notation.

```php
protected string $rgbSpec
```






***

### rgbaSpec

Sub regular expression for rgba() color notation.

```php
protected string $rgbaSpec
```






***

## Methods


### parse

Parse value string representation

```php
public parse(string $value): \ezcDocumentPcssStyleValue
```

Parse the string representation of the value into a usable
representation.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### getRegularExpression

Get regular expression matching the value.

```php
public getRegularExpression(): string
```

Return a regular sub expression, which matches all possible values of
this value type. The regular expression should NOT contain any named
sub-patterns, since it might be repeatedly embedded in some box parser.









***

### __toString

Convert value to string.

```php
public __toString(): string
```











***


## Inherited methods


### __construct

Construct value

```php
public __construct(mixed $value = null): void
```

Optionally pass a parsed representation of the value.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### parse

Parse value string representation

```php
public parse(string $value): \ezcDocumentPcssStyleValue
```

Parse the string representation of the value into a usable
representation.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### getRegularExpression

Get regular expression matching the value

```php
public getRegularExpression(): string
```

Return a regular sub expression, which matches all possible values of
this value type. The regular expression should NOT contain any named
sub-patterns, since it might be repeatedly embedded in some box parser.


* This method is **abstract**.






***

### __toString

Convert value to string

```php
public __toString(): string
```




* This method is **abstract**.






***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
