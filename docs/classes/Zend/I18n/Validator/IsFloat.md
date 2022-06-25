***

# IsFloat





* Full name: `\Zend\I18n\Validator\IsFloat`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;floatInvalid&#039;|
|`NOT_FLOAT`|public| |&#039;notFloat&#039;|

## Properties


### messageTemplates



```php
protected array $messageTemplates
```






***

### locale

Optional locale

```php
protected string|null $locale
```






***

### wrapper

UTF-8 compatable wrapper for string functions

```php
protected \Zend\Stdlib\StringWrapper\StringWrapperInterface $wrapper
```






***

## Methods


### __construct

Constructor for the integer validator

```php
public __construct(array|\Traversable $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getLocale

Returns the set locale

```php
public getLocale(): string
```











***

### setLocale

Sets the locale to use

```php
public setLocale(string|null $locale): float
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |




***

### isValid

Returns true if and only if $value is a floating-point value. Uses the formal definition of a float as described
in the PHP manual: {@link http://www.php.net/float}

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
