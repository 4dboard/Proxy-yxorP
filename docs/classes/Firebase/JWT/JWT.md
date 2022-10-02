***

# JWT

JSON Web Token implementation, based on this spec:
https://tools.ietf.org/html/rfc7519

PHP version 5

* Full name: `\Firebase\JWT\JWT`

**See Also:**

* https://github.com/firebase/php-jwt -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ASN1_INTEGER`|private| |0x2|
|`ASN1_SEQUENCE`|private| |0x10|
|`ASN1_BIT_STRING`|private| |0x3|

## Properties

### leeway

When checking nbf, iat or expiration times,
we want to provide some extra leeway time to
account for clock skew.

```php
public static int $leeway
```

* This property is **static**.

***

### timestamp

Allow the current timestamp to be specified.

```php
public static ?int $timestamp
```

Useful for fixing a value within unit testing.
Will default to PHP time() value if null.

* This property is **static**.

***

### supported_algs

```php
public static array&lt;string,string[]&gt; $supported_algs
```

* This property is **static**.

***

## Methods

### decode

Decodes a JWT string into a PHP object.

```php
public static decode(string $jwt, \Firebase\JWT\Key|array&lt;string,\Firebase\JWT\Key&gt; $keyOrKeyArray): \stdClass
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwt` | **string** | The JWT |
| `$keyOrKeyArray` | **\Firebase\JWT\Key&#124;array<string,\Firebase\JWT\Key>** | The Key or associative array of key IDs (kid) to Key objects.<br />If the algorithm used is asymmetric, this is the public key<br />Each Key object contains an algorithm and matching key.<br />Supported algorithms are &#039;ES384&#039;,&#039;ES256&#039;, &#039;HS256&#039;, &#039;HS384&#039;,<br />&#039;HS512&#039;, &#039;RS256&#039;, &#039;RS384&#039;, and &#039;RS512&#039; |

**Return Value:**

The JWT's payload as a PHP object



***

### encode

Converts and signs a PHP object or array into a JWT string.

```php
public static encode(array $payload, string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string $alg, string $keyId = null, array&lt;string,string&gt; $head = null): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **array** | PHP array |
| `$key` | **string&#124;resource&#124;\OpenSSLAsymmetricKey&#124;\OpenSSLCertificate** | The secret key. |
| `$alg` | **string** | Supported algorithms are &#039;ES384&#039;,&#039;ES256&#039;, &#039;HS256&#039;, &#039;HS384&#039;,<br />&#039;HS512&#039;, &#039;RS256&#039;, &#039;RS384&#039;, and &#039;RS512&#039; |
| `$keyId` | **string** |  |
| `$head` | **array<string,string>** | An array with header elements to attach |

**Return Value:**

A signed JWT



***

### sign

Sign a string with a given key and algorithm.

```php
public static sign(string $msg, string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string $alg): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **string** | The message to sign |
| `$key` | **string&#124;resource&#124;\OpenSSLAsymmetricKey&#124;\OpenSSLCertificate** | The secret key. |
| `$alg` | **string** | Supported algorithms are &#039;ES384&#039;,&#039;ES256&#039;, &#039;HS256&#039;, &#039;HS384&#039;,<br />&#039;HS512&#039;, &#039;RS256&#039;, &#039;RS384&#039;, and &#039;RS512&#039; |

**Return Value:**

An encrypted message



***

### verify

Verify a signature with the message, key and method. Not all methods
are symmetric, so we must have a separate verify and sign method.

```php
private static verify(string $msg, string $signature, string|resource|\OpenSSLAsymmetricKey|\OpenSSLCertificate $keyMaterial, string $alg): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **string** | The original message (header and body) |
| `$signature` | **string** | The original signature |
| `$keyMaterial` | **string&#124;resource&#124;\OpenSSLAsymmetricKey&#124;\OpenSSLCertificate** | For HS*, a string key works. for RS*, must be an instance of OpenSSLAsymmetricKey |
| `$alg` | **string** | The algorithm |

***

### jsonDecode

Decode a JSON string into a PHP object.

```php
public static jsonDecode(string $input): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | JSON string |

**Return Value:**

The decoded JSON string



***

### jsonEncode

Encode a PHP array into a JSON string.

```php
public static jsonEncode(array $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **array** | A PHP array |

**Return Value:**

JSON representation of the PHP array



***

### urlsafeB64Decode

Decode a string with URL-safe Base64.

```php
public static urlsafeB64Decode(string $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A Base64 encoded string |

**Return Value:**

A decoded string



***

### urlsafeB64Encode

Encode a string with URL-safe Base64.

```php
public static urlsafeB64Encode(string $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | The string you want encoded |

**Return Value:**

The base64 encode of what you passed in



***

### getKey

Determine if an algorithm has been provided for each Key

```php
private static getKey(\Firebase\JWT\Key|\ArrayAccess&lt;string,\Firebase\JWT\Key&gt;|array&lt;string,\Firebase\JWT\Key&gt; $keyOrKeyArray, string|null $kid): \Firebase\JWT\Key
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyOrKeyArray` | **\Firebase\JWT\Key&#124;\ArrayAccess<string,\Firebase\JWT\Key>&#124;array<string,\Firebase\JWT\Key>** |  |
| `$kid` | **string&#124;null** |  |

***

### constantTimeEquals

```php
public static constantTimeEquals(string $left, string $right): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$left` | **string** | The string of known length to compare against |
| `$right` | **string** | The user-supplied string |

***

### handleJsonError

Helper method to create a JSON error.

```php
private static handleJsonError(int $errno): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **int** | An error number from json_last_error() |

***

### safeStrlen

Get the number of bytes in cryptographic strings.

```php
private static safeStrlen(string $str): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |

***

### signatureToDER

Convert an ECDSA signature to an ASN.1 DER sequence

```php
private static signatureToDER(string $sig): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sig` | **string** | The ECDSA signature to convert |

**Return Value:**

The encoded DER object



***

### encodeDER

Encodes a value into a DER object.

```php
private static encodeDER(int $type, string $value): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** | DER tag |
| `$value` | **string** | the value to encode |

**Return Value:**

the encoded object



***

### signatureFromDER

Encodes signature from a DER object.

```php
private static signatureFromDER(string $der, int $keySize): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$der` | **string** | binary signature in DER format |
| `$keySize` | **int** | the number of bits in the key |

**Return Value:**

the signature



***

### readDER

Reads binary DER-encoded data and decodes into a single object

```php
private static readDER(string $der, int $offset): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$der` | **string** | the binary data in DER format |
| `$offset` | **int** | the offset of the data stream containing the object<br />to decode |

***


***

