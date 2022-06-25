***

# Callback

* Full name: `\Zend\Filter\Callback`
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

```php
public __construct(callable|array|\Traversable $callbackOrOptions, array $callbackParams = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callbackOrOptions` | **callable&#124;array&#124;\Traversable** |  |
| `$callbackParams` | **array** |  |

***

### setCallback

Sets a new callback for this filter

```php
public setCallback(callable $callback): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |

***

### getCallback

Returns the set callback

```php
public getCallback(): callable
```

***

### setCallbackParams

Sets parameters for the callback

```php
public setCallbackParams(array $params): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |

***

### getCallbackParams

Get parameters for the callback

```php
public getCallbackParams(): array
```

***

### filter

Calls the filter per callback

```php
public filter(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Options for the set callable |

**Return Value:**

Result from the filter which was called



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
