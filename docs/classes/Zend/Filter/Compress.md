***

# Compress

Compresses a given string

* Full name: `\Zend\Filter\Compress`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Properties

### adapter

Compression adapter

```php
protected $adapter
```

***

### adapterOptions

Compression adapter constructor options

```php
protected $adapterOptions
```

***

## Methods

### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | (Optional) Options to set |

***

### setOptions

Set filter setate

```php
public setOptions(array $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### getAdapter

Returns the current adapter, instantiating it if necessary

```php
public getAdapter(): \Zend\Filter\Compress\CompressionAlgorithmInterface
```

***

### getAdapterName

Retrieve adapter name

```php
public getAdapterName(): string
```

***

### setAdapter

Sets compression adapter

```php
public setAdapter(string|\Zend\Filter\Compress\CompressionAlgorithmInterface $adapter): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **string&#124;\Zend\Filter\Compress\CompressionAlgorithmInterface** | Adapter to use |

***

### getAdapterOptions

Retrieve adapter options

```php
public getAdapterOptions(): array
```

***

### setAdapterOptions

Set adapter options

```php
public setAdapterOptions(array $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### getOptions

Get individual or all options from underlying adapter

```php
public getOptions(null|string $option = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **null&#124;string** |  |

***

### __call

Calls adapter methods

```php
public __call(string $method, string|array $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method to call |
| `$options` | **string&#124;array** | Options for this method |

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string
```

Compresses the content $value with the defined settings

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to compress |

**Return Value:**

The compressed content



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
