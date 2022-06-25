***

# Alnum

* Full name: `\Zend\I18n\Filter\Alnum`
* Parent class: [`\Zend\I18n\Filter\AbstractLocale`](./AbstractLocale.md)

## Properties

### options

```php
protected array $options
```

***

## Methods

### __construct

Sets default option values for this instance

```php
public __construct(array|\Traversable|bool|null $allowWhiteSpaceOrOptions = null, string|null $locale = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowWhiteSpaceOrOptions` | **array&#124;\Traversable&#124;bool&#124;null** |  |
| `$locale` | **string&#124;null** |  |

***

### setAllowWhiteSpace

Sets the allowWhiteSpace option

```php
public setAllowWhiteSpace(bool $flag = true): \Zend\I18n\Filter\Alnum
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

**Return Value:**

Provides a fluent interface



***

### getAllowWhiteSpace

Whether white space is allowed

```php
public getAllowWhiteSpace(): bool
```

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string|array $value): string|array
```

Returns $value as string with all non-alphanumeric characters removed

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** |  |

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
