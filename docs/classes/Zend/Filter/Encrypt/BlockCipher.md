***

# BlockCipher

Encryption adapter for Zend\Crypt\BlockCipher



* Full name: `\Zend\Filter\Encrypt\BlockCipher`
* This class implements:
[`\Zend\Filter\Encrypt\EncryptionAlgorithmInterface`](./EncryptionAlgorithmInterface.md)



## Properties


### encryption

Definitions for encryption
array(
    'key'           => encryption key string
    'key_iteration' => the number of iterations for the PBKDF2 key generation
    'algorithm      => cipher algorithm to use
    'hash'          => algorithm to use for the authentication
    'vector'        => initialization vector
)

```php
protected $encryption
```






***

### blockCipher

BlockCipher

```php
protected \Zend\Filter\Encrypt\BlockCipher $blockCipher
```






***

### compression

Internal compression

```php
protected array $compression
```






***

## Methods


### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | Encryption Options |




***

### getEncryption

Returns the set encryption options

```php
public getEncryption(): array
```











***

### setEncryption

Sets new encryption options

```php
public setEncryption(string|array $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array** | Encryption options |




***

### getVector

Returns the initialization vector

```php
public getVector(): string
```











***

### setVector

Set the inizialization vector

```php
public setVector(string $vector): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vector` | **string** |  |




***

### setKey

Set the encryption key

```php
public setKey(string $key): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### getKey

Get the encryption key

```php
public getKey(): string
```











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

### encrypt

Defined by Zend\Filter\FilterInterface

```php
public encrypt(string $value): string
```

Encrypts $value with the defined settings






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | The content to encrypt |


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











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
