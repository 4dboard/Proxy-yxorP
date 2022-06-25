***

# UpperCaseWords

* Full name: `\Zend\Filter\UpperCaseWords`
* Parent class: [`\Zend\Filter\AbstractUnicode`](./AbstractUnicode.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### options

{@inheritDoc}

```php
protected $options
```

***

## Methods

### __construct

Constructor

```php
public __construct(string|array|\Traversable $encodingOrOptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encodingOrOptions` | **string&#124;array&#124;\Traversable** | OPTIONAL |

***

### filter

{@inheritDoc}

```php
public filter(string|mixed $value): string|mixed
```

Returns the string $value, converting words to have an uppercase first character as necessary

If the value provided is not a string, the value will remain unfiltered

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;mixed** |  |

***

## Inherited methods

### setEncoding

Set the input encoding for the given string

```php
public setEncoding(string|null $encoding = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encoding` | **string&#124;null** |  |

***

### getEncoding

Returns the set encoding

```php
public getEncoding(): string
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
