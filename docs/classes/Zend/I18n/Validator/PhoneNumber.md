***

# PhoneNumber





* Full name: `\Zend\I18n\Validator\PhoneNumber`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NO_MATCH`|public| |&#039;phoneNumberNoMatch&#039;|
|`UNSUPPORTED`|public| |&#039;phoneNumberUnsupported&#039;|
|`INVALID`|public| |&#039;phoneNumberInvalid&#039;|

## Properties


### messageTemplates

Validation failure message template definitions

```php
protected array $messageTemplates
```






***

### phone

Phone Number Patterns

```php
protected static array $phone
```



* This property is **static**.

**See Also:**

* http://code.google.com/p/libphonenumber/source/browse/trunk/resources/PhoneNumberMetadata.xml - 

***

### country

ISO 3611 Country Code

```php
protected string $country
```






***

### allowPossible

Allow Possible Matches

```php
protected bool $allowPossible
```






***

### allowedTypes

Allowed Types

```php
protected array $allowedTypes
```






***

## Methods


### __construct

Constructor for the PhoneNumber validator

```php
public __construct(array|\Traversable $options = array()): mixed
```

Options
- country | string | field or value
- allowed_types | array | array of allowed types
- allow_possible | boolean | allow possible matches aka non-strict






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### allowedTypes

Allowed Types

```php
public allowedTypes(array|null $types = null): self|array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **array&#124;null** |  |




***

### allowPossible

Allow Possible

```php
public allowPossible(bool|null $possible = null): self|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$possible` | **bool&#124;null** |  |




***

### getCountry

Get Country

```php
public getCountry(): string
```











***

### setCountry

Set Country

```php
public setCountry(string $country): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$country` | **string** |  |




***

### loadPattern

Load Pattern

```php
protected loadPattern(string $code): array[]|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** |  |




***

### isValid

Returns true if and only if $value matches phone number format

```php
public isValid(string $value = null, array $context = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$context` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
