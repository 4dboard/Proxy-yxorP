***

# Key

* Full name: `\Firebase\JWT\Key`

## Properties

### keyMaterial

```php
private string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate $keyMaterial
```

***

### algorithm

```php
private string $algorithm
```

***

## Methods

### __construct

```php
public __construct(string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate $keyMaterial, string $algorithm): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyMaterial` | **string&#124;resource&#124;\OpenSSLAsymmetricKey&#124;\OpenSSLCertificate** |  |
| `$algorithm` | **string** |  |

***

### getAlgorithm

Return the algorithm valid for this key

```php
public getAlgorithm(): string
```

***

### getKeyMaterial

```php
public getKeyMaterial(): string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate
```

***


***

