***

# Alpha

* Full name: `\Zend\I18n\Validator\Alpha`
* Parent class: [`\Zend\I18n\Validator\Alnum`](./Alnum.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;alphaInvalid&#039;|
|`NOT_ALPHA`|public| |&#039;notAlpha&#039;|
|`STRING_EMPTY`|public| |&#039;alphaStringEmpty&#039;|

## Properties

### filter

Alphabetic filter used for validation

```php
protected static \Zend\I18n\Filter\Alpha $filter
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

### isValid

Returns true if and only if $value contains only alphabetic characters

```php
public isValid(string $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

## Inherited methods

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

yxorP::get('REQUEST')
