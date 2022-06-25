***

# DateFormat

View helper for formatting dates.

* Full name: `\Zend\I18n\View\Helper\DateFormat`
* Parent class: [`AbstractHelper`](../../../View/Helper/AbstractHelper.md)

## Properties

### locale

Locale to use instead of the default

```php
protected string $locale
```

***

### timezone

Timezone to use

```php
protected string $timezone
```

***

### formatters

Formatter instances

```php
protected array $formatters
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### __invoke

Format a date

```php
public __invoke(\DateTime|int|array $date, int $dateType = IntlDateFormatter::NONE, int $timeType = IntlDateFormatter::NONE, string $locale = null, string|null $pattern = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **\DateTime&#124;int&#124;array** |  |
| `$dateType` | **int** |  |
| `$timeType` | **int** |  |
| `$locale` | **string** |  |
| `$pattern` | **string&#124;null** |  |

***

### setLocale

Set locale to use instead of the default

```php
public setLocale(string $locale): \Zend\I18n\View\Helper\DateFormat
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

### setTimezone

Set timezone to use instead of the default

```php
public setTimezone(string $timezone): \Zend\I18n\View\Helper\DateFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timezone` | **string** |  |

***

### getTimezone

Get the timezone to use

```php
public getTimezone(): string|null
```

yxorP::get('REQUEST')
