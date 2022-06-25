***

# HtmlEntities

* Full name: `\Zend\Filter\HtmlEntities`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Properties

### quoteStyle

Corresponds to the second htmlentities() argument

```php
protected int $quoteStyle
```

***

### encoding

Corresponds to the third htmlentities() argument

```php
protected string $encoding
```

***

### doubleQuote

Corresponds to the forth htmlentities() argument

```php
protected bool $doubleQuote
```

***

## Methods

### __construct

Sets filter options

```php
public __construct(array|\Traversable $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### getQuoteStyle

Returns the quoteStyle option

```php
public getQuoteStyle(): int
```

***

### setQuoteStyle

Sets the quoteStyle option

```php
public setQuoteStyle(int $quoteStyle): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$quoteStyle` | **int** |  |

**Return Value:**

Provides a fluent interface



***

### getEncoding

Get encoding

```php
public getEncoding(): string
```

***

### setEncoding

Set encoding

```php
public setEncoding(string $value): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### getCharSet

Returns the charSet option

```php
public getCharSet(): string
```

Proxies to {@link}









***

### setCharSet

Sets the charSet option

```php
public setCharSet(string $charSet): self
```

Proxies to {@link}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charSet` | **string** |  |

**Return Value:**

Provides a fluent interface



***

### getDoubleQuote

Returns the doubleQuote option

```php
public getDoubleQuote(): bool
```

***

### setDoubleQuote

Sets the doubleQuote option

```php
public setDoubleQuote(bool $doubleQuote): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$doubleQuote` | **bool** |  |

**Return Value:**

Provides a fluent interface



***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string|mixed
```

Returns the string $value, converting characters to their corresponding HTML entity equivalents where they exist

If the value provided is non-scalar, the value will remain unfiltered

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

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
