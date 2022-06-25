***

# StringTrim

* Full name: `\Zend\Filter\StringTrim`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Properties

### options

Filter options

```php
protected array $options
```

***

## Methods

### __construct

Sets filter options

```php
public __construct(string|array|\Traversable $charlistOrOptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charlistOrOptions` | **string&#124;array&#124;\Traversable** |  |

***

### setCharList

Sets the charList option

```php
public setCharList(string $charList): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charList` | **string** |  |

**Return Value:**

Provides a fluent interface



***

### getCharList

Returns the charList option

```php
public getCharList(): string|null
```

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string
```

Returns the string $value with characters stripped from the beginning and end

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### unicodeTrim

Unicode aware trim method Fixes a PHP problem

```php
protected unicodeTrim(string $value, string $charlist = &#039;\\s&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |
| `$charlist` | **string** |  |

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
