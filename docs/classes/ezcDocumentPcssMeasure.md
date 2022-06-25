***

# ezcDocumentPcssMeasure

Pdf measure wrapper, including measure conversions



* Full name: `\ezcDocumentPcssMeasure`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MM_IN_INCH`|public| |0.0393700787|

## Properties


### value

Internal value representation in millimeters

```php
protected float $value
```






***

### resolution

Resolution in DPI for transformations between mm and pixels.

```php
protected int $resolution
```






***

### cache

Cache for conversions, to not reparse the same value again.

```php
protected static array $cache
```



* This property is **static**.


***

## Methods


### __construct

Construct measure from input value

```php
public __construct(mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### create

Static constructor wrapper

```php
public static create(mixed $value): \ezcDocumentPcssMeasure
```

Static constructor wrapper, because direct dereferencing does
not work with the new operator, and this makes the usage of
this simple wrpper class easier.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### setResolution

Set resolution in dpi

```php
public setResolution(int $dpi): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dpi` | **int** |  |




***

### getUnitFactor

Get unit factor

```php
protected getUnitFactor(string $unit, int $resolution): void
```

Get the factor for the given unit, so values can be transformed from the
passed unit into milli meters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$unit` | **string** |  |
| `$resolution` | **int** |  |




***

### get

Convert values

```php
public get(string $format = &#039;mm&#039;, int $resolution = null): float
```

Convert measure values from the PCSS input file into another unit. The
input unit is read from the passed value and defaults to milli meters.
The output unit can be specified as the second parameter and also
default to milli meters.

Supported units currently are: mm, px, pt, in

Optionally a resolution (dpi) can specified for the
conversion of pixel values.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |
| `$resolution` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
