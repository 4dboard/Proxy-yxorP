***

# LowerCase

* Full name: `\Zend\Filter\File\LowerCase`
* Parent class: [`\Zend\Filter\StringToLower`](../StringToLower.md)

## Methods

### filter

Defined by Zend\Filter\Filter

```php
public filter(string|array $value): string|array
```

Does a lowercase on the content of the given file

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** | Full path of file to change or $_FILES data array |

**Return Value:**

The given $value



***

## Inherited methods

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

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string|mixed
```

Returns the string $value, converting characters to lowercase as necessary

If the value provided is non-scalar, the value will remain unfiltered

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

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
