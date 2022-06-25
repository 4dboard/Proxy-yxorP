***

# Null

Stub class for backwards compatibility.

Since PHP 7 adds "null" as a reserved keyword, we can no longer have a class named that and retain PHP 7 compatibility.
The original class has been renamed to "ToNull", and this class is now an extension of it. It raises an
E_USER_DEPRECATED to warn users to migrate.

* Full name: `\Zend\Filter\Null`
* Parent class: [`\Zend\Filter\ToNull`](./ToNull.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Methods

### __construct

Constructor

```php
public __construct(mixed $typeOrOptions = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeOrOptions` | **mixed** | OPTIONAL |

***

## Inherited methods

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
