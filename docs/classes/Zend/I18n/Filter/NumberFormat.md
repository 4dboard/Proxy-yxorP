***

# NumberFormat

* Full name: `\Zend\I18n\Filter\NumberFormat`
* Parent class: [`\Zend\I18n\Filter\NumberParse`](./NumberParse.md)

## Methods

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

**See Also:**

* \Zend\I18n\Filter\Zend\Filter\FilterInterface::filter() -

***

## Inherited methods

### __construct

```php
public __construct(): mixed
```

***

### setLocale

Sets the locale option

```php
public setLocale(string|null $locale = null): \Zend\I18n\Filter\AbstractLocale
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |

***

### setStyle

```php
public setStyle(int $style): \Zend\I18n\Filter\NumberFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **int** |  |

***

### getStyle

```php
public getStyle(): int
```

***

### setType

```php
public setType(int $type): \Zend\I18n\Filter\NumberFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### getType

```php
public getType(): int
```

***

### setFormatter

```php
public setFormatter(\NumberFormatter $formatter): \Zend\I18n\Filter\NumberFormat
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\NumberFormatter** |  |

***

### getFormatter

```php
public getFormatter(): \NumberFormatter
```

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

**See Also:**

* \Zend\I18n\Filter\Zend\Filter\FilterInterface::filter() -

***

### getLocale

Returns the locale option

```php
public getLocale(): string
```

***

### hasPcreUnicodeSupport

```php
public static hasPcreUnicodeSupport(): bool
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setOptions

```php
public setOptions(array|\Traversable $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```

***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### isOptions

```php
protected static isOptions(mixed $options): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |

yxorP::get('REQUEST')
