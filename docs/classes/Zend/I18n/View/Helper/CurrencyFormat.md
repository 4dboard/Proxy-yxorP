***

# CurrencyFormat

View helper for formatting currency.

* Full name: `\Zend\I18n\View\Helper\CurrencyFormat`
* Parent class: [`AbstractHelper`](../../../View/Helper/AbstractHelper.md)

## Properties

### currencyCode

The 3-letter ISO 4217 currency code indicating the currency to use

```php
protected string $currencyCode
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

### currencyPattern

Currency pattern

```php
protected string $currencyPattern
```

***

### showDecimals

If set to true, the currency will be returned with two decimals

```php
protected bool $showDecimals
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
public __invoke(float $number, string $currencyCode = null, bool $showDecimals = null, string $locale = null, string $pattern = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **float** |  |
| `$currencyCode` | **string** |  |
| `$showDecimals` | **bool** |  |
| `$locale` | **string** |  |
| `$pattern` | **string** |  |

***

### formatCurrency

Format a number

```php
protected formatCurrency(float $number, string $currencyCode, bool $showDecimals, string $locale, string $pattern): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **float** |  |
| `$currencyCode` | **string** |  |
| `$showDecimals` | **bool** |  |
| `$locale` | **string** |  |
| `$pattern` | **string** |  |

***

### setCurrencyCode

The 3-letter ISO 4217 currency code indicating the currency to use

```php
public setCurrencyCode(string $currencyCode): \Zend\I18n\View\Helper\CurrencyFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currencyCode` | **string** |  |

***

### getCurrencyCode

Get the 3-letter ISO 4217 currency code indicating the currency to use

```php
public getCurrencyCode(): string
```

***

### setCurrencyPattern

Set the currency pattern

```php
public setCurrencyPattern(string $currencyPattern): \Zend\I18n\View\Helper\CurrencyFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$currencyPattern` | **string** |  |

***

### getCurrencyPattern

Get the currency pattern

```php
public getCurrencyPattern(): string
```

***

### setLocale

Set locale to use instead of the default

```php
public setLocale(string $locale): \Zend\I18n\View\Helper\CurrencyFormat
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

### setShouldShowDecimals

Set if the view helper should show two decimals

```php
public setShouldShowDecimals(bool $showDecimals): \Zend\I18n\View\Helper\CurrencyFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$showDecimals` | **bool** |  |

***

### shouldShowDecimals

Get if the view helper should show two decimals

```php
public shouldShowDecimals(): bool
```

yxorP::get('REQUEST')
