***

# AbstractSeparator

* Full name: `\Zend\Filter\Word\AbstractSeparator`
* Parent class: [`\Zend\Filter\AbstractFilter`](../AbstractFilter.md)
* This class is an **Abstract class**

## Properties

### separator

```php
protected $separator
```

***

## Methods

### __construct

Constructor

```php
public __construct(string $separator = &#039; &#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Space by default |

***

### setSeparator

Sets a new separator

```php
public setSeparator(string $separator): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | Separator |

***

### getSeparator

Returns the actual set separator

```php
public getSeparator(): string
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
