***

# DateTime

* Full name: `\Zend\I18n\Validator\DateTime`
* Parent class: [`AbstractValidator`](../../Validator/AbstractValidator.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INVALID`|public| |&#039;datetimeInvalid&#039;|
|`INVALID_DATETIME`|public| |&#039;datetimeInvalidDateTime&#039;|

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

### dateType

```php
protected int $dateType
```

***

### timeType

```php
protected int $timeType
```

***

### timezone

Optional timezone

```php
protected string $timezone
```

***

### pattern

```php
protected string $pattern
```

***

### calendar

```php
protected int $calendar
```

***

### formatter

```php
protected \IntlDateFormatter $formatter
```

***

### invalidateFormatter

Is the formatter invalidated Invalidation occurs when immutable properties are changed

```php
protected bool $invalidateFormatter
```

***

## Methods

### __construct

Constructor for the Date validator

```php
public __construct(array|\Traversable $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### setCalendar

Sets the calendar to be used by the IntlDateFormatter

```php
public setCalendar(int|null $calendar): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$calendar` | **int&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getCalendar

Returns the calendar to by the IntlDateFormatter

```php
public getCalendar(): int
```

***

### setDateType

Sets the date format to be used by the IntlDateFormatter

```php
public setDateType(int|null $dateType): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dateType` | **int&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getDateType

Returns the date format used by the IntlDateFormatter

```php
public getDateType(): int
```

***

### setPattern

Sets the pattern to be used by the IntlDateFormatter

```php
public setPattern(string|null $pattern): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getPattern

Returns the pattern used by the IntlDateFormatter

```php
public getPattern(): string
```

***

### setTimeType

Sets the time format to be used by the IntlDateFormatter

```php
public setTimeType(int|null $timeType): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeType` | **int&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getTimeType

Returns the time format used by the IntlDateFormatter

```php
public getTimeType(): int
```

***

### setTimezone

Sets the timezone to be used by the IntlDateFormatter

```php
public setTimezone(string|null $timezone): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timezone` | **string&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getTimezone

Returns the timezone used by the IntlDateFormatter or the system default if none given

```php
public getTimezone(): string
```

***

### setLocale

Sets the locale to be used by the IntlDateFormatter

```php
public setLocale(string|null $locale): \Zend\I18n\Validator\DateTime
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |

**Return Value:**

provides fluent interface



***

### getLocale

Returns the locale used by the IntlDateFormatter or the system default if none given

```php
public getLocale(): string
```

***

### isValid

Returns true if and only if $value is a floating-point value

```php
public isValid(string $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### getIntlDateFormatter

Returns a non lenient configured IntlDateFormatter

```php
protected getIntlDateFormatter(): \IntlDateFormatter
```

yxorP::get('REQUEST')
