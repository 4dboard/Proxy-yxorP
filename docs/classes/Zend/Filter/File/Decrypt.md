***

# Decrypt

Decrypts a given file and stores the decrypted file content

* Full name: `\Zend\Filter\File\Decrypt`
* Parent class: [`\Zend\Filter\Decrypt`](../Decrypt.md)

## Properties

### filename

New filename to set

```php
protected string $filename
```

***

## Methods

### getFilename

Returns the new filename where the content will be stored

```php
public getFilename(): string
```

***

### setFilename

Sets the new filename where the content will be stored

```php
public setFilename(string $filename = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | (Optional) New filename to set |

***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string|array $value): string|array
```

Decrypts the file $value with the defined settings

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;array** | Full path of file to change or $_FILES data array |

**Return Value:**

The filename which has been set



***

## Inherited methods

### filter

Defined by Zend\Filter\Filter

```php
public filter(string $value): string
```

Encrypts the content $value with the defined settings

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to encrypt |

**Return Value:**

The encrypted content



***

### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | (Optional) Options to set, if null mcrypt is used |

***

### getAdapterInstance

Returns the adapter instance

```php
public getAdapterInstance(): \Zend\Filter\Encrypt\EncryptionAlgorithmInterface
```

***

### getAdapter

Returns the name of the set adapter

```php
public getAdapter(): string
```

***

### setAdapter

Sets new encryption options

```php
public setAdapter(string|array $options = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array** | (Optional) Encryption options |

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
