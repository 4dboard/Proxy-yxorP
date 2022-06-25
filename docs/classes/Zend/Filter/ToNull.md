***

# ToNull

* Full name: `\Zend\Filter\ToNull`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_BOOLEAN`|public| |1|
|`TYPE_INTEGER`|public| |2|
|`TYPE_EMPTY_ARRAY`|public| |4|
|`TYPE_STRING`|public| |8|
|`TYPE_ZERO_STRING`|public| |16|
|`TYPE_FLOAT`|public| |32|
|`TYPE_ALL`|public| |63|

## Properties

### constants

```php
protected array $constants
```

***

### options

Filter options

```php
protected array $options
```

***

## Methods

### __construct

Constructor

```php
public __construct(string|array|\Traversable $typeOrOptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeOrOptions` | **string&#124;array&#124;\Traversable** | OPTIONAL |

***

### setType

Set boolean types

```php
public setType(int|array $type = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int&#124;array** |  |

***

### getType

Returns defined boolean types

```php
public getType(): int
```

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string
```

Returns null representation of $value, if value is empty and matches types that should be considered null.

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
