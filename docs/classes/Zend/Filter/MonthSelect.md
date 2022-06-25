***

# MonthSelect

* Full name: `\Zend\Filter\MonthSelect`
* Parent class: [`\Zend\Filter\AbstractDateDropdown`](./AbstractDateDropdown.md)

## Properties

### format

Year-Month

```php
protected string $format
```

***

### expectedInputs

```php
protected int $expectedInputs
```

***

## Inherited methods

### __construct

```php
public __construct(mixed $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** | If array or Traversable, passes value to<br />setOptions(). |

***

### setNullOnAllEmpty

```php
public setNullOnAllEmpty(bool $nullOnAllEmpty): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nullOnAllEmpty` | **bool** |  |

***

### isNullOnAllEmpty

```php
public isNullOnAllEmpty(): bool
```

***

### setNullOnEmpty

```php
public setNullOnEmpty(bool $nullOnEmpty): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nullOnEmpty` | **bool** |  |

***

### isNullOnEmpty

```php
public isNullOnEmpty(): bool
```

***

### filter

Attempts to filter an array of date/time information to a formatted string.

```php
public filter(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### filterable

Ensures there are enough inputs in the array to properly format the date.

```php
protected filterable( $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |

***

### reduce

Reduce to a single value

```php
public static reduce(string $soFar, string $value): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$soFar` | **string** |  |
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
