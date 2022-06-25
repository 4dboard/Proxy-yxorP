***

# Alnum





* Full name: `\Zend\I18n\Validator\Alnum`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;alnumInvalid&#039;|
|`NOT_ALNUM`|public| |&#039;notAlnum&#039;|
|`STRING_EMPTY`|public| |&#039;alnumStringEmpty&#039;|

## Properties


### filter

Alphanumeric filter used for validation

```php
protected static \Zend\I18n\Filter\Alnum $filter
```



* This property is **static**.


***

### messageTemplates

Validation failure message template definitions

```php
protected array $messageTemplates
```






***

### options

Options for this validator

```php
protected array $options
```






***

## Methods


### __construct

Sets default option values for this instance

```php
public __construct(bool $allowWhiteSpace = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowWhiteSpace` | **bool** |  |




***

### getAllowWhiteSpace

Returns the allowWhiteSpace option

```php
public getAllowWhiteSpace(): bool
```











***

### setAllowWhiteSpace

Sets the allowWhiteSpace option

```php
public setAllowWhiteSpace(bool $allowWhiteSpace): \Zend\I18n\Filter\Alnum
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowWhiteSpace` | **bool** |  |


**Return Value:**

Provides a fluent interface



***

### isValid

Returns true if and only if $value contains only alphabetic and digit characters

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
