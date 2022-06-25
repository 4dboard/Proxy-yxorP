***

# AbstractLocale

* Full name: `\Zend\I18n\Filter\AbstractLocale`
* Parent class: [`\Zend\Filter\AbstractFilter`](../../Filter/AbstractFilter.md)
* This class is an **Abstract class**

## Methods

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

### getLocale

Returns the locale option

```php
public getLocale(): string
```

***

## Inherited methods

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
