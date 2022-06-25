***

# RealPath

* Full name: `\Zend\Filter\RealPath`
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

Class constructor

```php
public __construct(bool|\Traversable $existsOrOptions = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$existsOrOptions` | **bool&#124;\Traversable** | Options to set |

***

### setExists

Sets if the path has to exist TRUE when the path must exist FALSE when not existing paths can be given

```php
public setExists(bool $flag = true): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** | Path must exist |

***

### getExists

Returns true if the filtered path must exist

```php
public getExists(): bool
```

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string|mixed
```

Returns realpath($value)

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
