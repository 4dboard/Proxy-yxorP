***

# PostCode





* Full name: `\Zend\I18n\Validator\PostCode`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;postcodeInvalid&#039;|
|`NO_MATCH`|public| |&#039;postcodeNoMatch&#039;|
|`SERVICE`|public| |&#039;postcodeService&#039;|
|`SERVICEFAILURE`|public| |&#039;postcodeServiceFailure&#039;|

## Properties


### messageTemplates



```php
protected array $messageTemplates
```






***

### locale

Optional Locale to use

```php
protected string|null $locale
```






***

### format

Optional Manual postal code format

```php
protected string|null $format
```






***

### service

Optional Service callback for additional validation

```php
protected mixed|null $service
```






***

### postCodeRegex

Postal Code regexes by territory

```php
protected static array $postCodeRegex
```



* This property is **static**.


***

## Methods


### __construct

Constructor for the PostCode validator

```php
public __construct(array|\Traversable $options = array()): mixed
```

Accepts a string locale and/or "format".






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getLocale

Returns the set locale

```php
public getLocale(): string|null
```









**Return Value:**

The set locale



***

### setLocale

Sets the locale to use

```php
public setLocale(string|null $locale): \Zend\I18n\Validator\PostCode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |


**Return Value:**

Provides fluid interface



***

### getFormat

Returns the set postal code format

```php
public getFormat(): string|null
```











***

### setFormat

Sets a self defined postal format as regex

```php
public setFormat(string $format): \Zend\I18n\Validator\PostCode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** |  |


**Return Value:**

Provides fluid interface



***

### getService

Returns the actual set service

```php
public getService(): mixed|null
```











***

### setService

Sets a new callback for service validation

```php
public setService(mixed $service): \Zend\I18n\Validator\PostCode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$service` | **mixed** |  |


**Return Value:**

Provides fluid interface



***

### isValid

Returns true if and only if $value is a valid postalcode

```php
public isValid(string $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
