***

# Openssl

Encryption adapter for openssl

* Full name: `\Zend\Filter\Encrypt\Openssl`
* This class implements:
  [`\Zend\Filter\Encrypt\EncryptionAlgorithmInterface`](./EncryptionAlgorithmInterface.md)

## Properties

### keys

Definitions for encryption array(
'public' => public keys
'private' => private keys
'envelope' => resulting envelope keys
)

```php
protected $keys
```

***

### passphrase

Internal passphrase

```php
protected string $passphrase
```

***

### compression

Internal compression

```php
protected array $compression
```

***

### package

Internal create package

```php
protected bool $package
```

***

## Methods

### __construct

Class constructor Available options
'public' => public key
'private' => private key
'envelope' => envelope key
'passphrase' => passphrase
'compression' => compress value with this compression adapter
'package' => pack envelope keys into encrypted string, simplifies decryption

```php
public __construct(string|array|\Traversable $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | Options for this adapter |

***

### _setKeys

Sets the encryption keys

```php
protected _setKeys(string|array $keys): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **string&#124;array** | Key with type association |

***

### getPublicKey

Returns all public keys

```php
public getPublicKey(): array
```

***

### setPublicKey

Sets public keys

```php
public setPublicKey(string|array $key): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string&#124;array** | Public keys |

***

### getPrivateKey

Returns all private keys

```php
public getPrivateKey(): array
```

***

### setPrivateKey

Sets private keys

```php
public setPrivateKey(string $key, string $passphrase = null): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Private key |
| `$passphrase` | **string** |  |

***

### getEnvelopeKey

Returns all envelope keys

```php
public getEnvelopeKey(): array
```

***

### setEnvelopeKey

Sets envelope keys

```php
public setEnvelopeKey(string|array $key): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string&#124;array** | Envelope keys |

***

### getPassphrase

Returns the passphrase

```php
public getPassphrase(): string
```

***

### setPassphrase

Sets a new passphrase

```php
public setPassphrase(string $passphrase): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$passphrase` | **string** |  |

***

### getCompression

Returns the compression

```php
public getCompression(): array
```

***

### setCompression

Sets an internal compression for values to encrypt

```php
public setCompression(string|array $compression): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compression` | **string&#124;array** |  |

***

### getPackage

Returns if header should be packaged

```php
public getPackage(): bool
```

***

### setPackage

Sets if the envelope keys should be included in the encrypted value

```php
public setPackage(bool $package): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$package` | **bool** |  |

***

### encrypt

Encrypts $value with the defined settings Note that you also need the "encrypted" keys to be able to decrypt

```php
public encrypt(string $value): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to encrypt |

**Return Value:**

The encrypted content



***

### decrypt

Defined by Zend\Filter\FilterInterface

```php
public decrypt(string $value): string
```

Decrypts $value with the defined settings

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to decrypt |

**Return Value:**

The decrypted content



***

### toString

Returns the adapter name

```php
public toString(): string
```

yxorP::get('REQUEST')
