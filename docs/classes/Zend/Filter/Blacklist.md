***

# Blacklist

* Full name: `\Zend\Filter\Blacklist`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Properties

### strict

```php
protected bool $strict
```

***

### list

```php
protected array $list
```

***

## Methods

### __construct

```php
public __construct(null|array|\Traversable $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable** |  |

***

### setStrict

Determine whether the in_array() call should be "strict" or not. See in_array docs.

```php
public setStrict(bool $strict = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strict` | **bool** |  |

***

### getStrict

Returns whether the in_array() call should be "strict" or not. See in_array docs.

```php
public getStrict(): bool
```

***

### setList

Set the list of items to black-list.

```php
public setList(array|\Traversable $list = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **array&#124;\Traversable** |  |

***

### getList

Get the list of items to black-list

```php
public getList(): array
```

***

### filter

{@inheritDoc}

```php
public filter(mixed $value): mixed
```

Will return null if $value is present in the black-list. If $value is NOT present then it will return $value.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

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
