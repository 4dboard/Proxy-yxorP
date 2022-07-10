***

# Key





* Full name: `\Firebase\JWT\Key`



## Properties


### algorithm



```php
private string $algorithm
```






***

### keyMaterial



```php
private string|resource|\OpenSSLAsymmetricKey $keyMaterial
```






***

## Methods


### __construct



```php
public __construct(string|resource|\OpenSSLAsymmetricKey $keyMaterial, string $algorithm): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyMaterial` | **string&#124;resource&#124;\OpenSSLAsymmetricKey** |  |
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
public getKeyMaterial(): string|resource|\OpenSSLAsymmetricKey
```











***


***

