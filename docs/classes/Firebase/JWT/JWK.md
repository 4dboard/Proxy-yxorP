***

# JWK

JSON Web Key implementation, based on this spec:
https://tools.ietf.org/html/draft-ietf-jose-json-web-key-41

PHP version 5

* Full name: `\Firebase\JWT\JWK`

**See Also:**

* https://github.com/firebase/php-jwt -

## Methods

### parseKeySet

Parse a set of JWK keys

```php
public static parseKeySet(array $jwks, string $defaultAlg = null): array&lt;string,\Firebase\JWT\Key&gt;
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwks` | **array** | The JSON Web Key Set as an associative array |
| `$defaultAlg` | **string** | The algorithm for the Key object if &quot;alg&quot; is not set in the<br />JSON Web Key Set |

**Return Value:**

An associative array of key IDs (kid) to Key objects



***

### parseKey

Parse a JWK key

```php
public static parseKey(array $jwk, string $defaultAlg = null): \Firebase\JWT\Key
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwk` | **array** | An individual JWK |
| `$defaultAlg` | **string** | The algorithm for the Key object if &quot;alg&quot; is not set in the<br />JSON Web Key Set |

**Return Value:**

The key object for the JWK



***

### createPemFromModulusAndExponent

Create a public key represented in PEM format from RSA modulus and exponent information

```php
private static createPemFromModulusAndExponent(string $n, string $e): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$n` | **string** | The RSA modulus encoded in Base64 |
| `$e` | **string** | The RSA exponent encoded in Base64 |

**Return Value:**

The RSA public key represented in PEM format



***

### encodeLength

DER-encode the length

```php
private static encodeLength(int $length): string
```

DER supports lengths up to (2**8)**127, however, we'll only support lengths up to (2**8)**4. See
{@link X.690 paragraph 8.1.3} for more information.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |

***


***

