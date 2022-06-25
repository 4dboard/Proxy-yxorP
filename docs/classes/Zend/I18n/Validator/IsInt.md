***

# IsInt





* Full name: `\Zend\I18n\Validator\IsInt`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;intInvalid&#039;|
|`NOT_INT`|public| |&#039;notInt&#039;|

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
public getLocale(): mixed
```











***

### setLocale

Sets the locale to use

```php
public setLocale(string $locale): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |




***

### isValid

Returns true if and only if $value is a valid integer

```php
public isValid(string|int $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;int** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
