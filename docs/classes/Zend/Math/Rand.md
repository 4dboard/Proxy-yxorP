***

# Rand

Pseudorandom number generator (PRNG)

* Full name: `\Zend\Math\Rand`
* This class is an **Abstract class**

## Properties

### generator

Alternative random byte generator using RandomLib

```php
protected static \RandomLib\Generator $generator
```

* This property is **static**.

***

## Methods

### getBytes

Generate random bytes using OpenSSL or Mcrypt and mt_rand() as fallback

```php
public static getBytes(int $length, bool $strong = false): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$strong` | **bool** | true if you need a strong random generator (cryptography) |

***

### getAlternativeGenerator

Retrieve a fallback/alternative RNG generator

```php
public static getAlternativeGenerator(): \RandomLib\Generator
```

* This method is **static**.

***

### getBoolean

Generate random boolean

```php
public static getBoolean(bool $strong = false): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strong` | **bool** | true if you need a strong random generator (cryptography) |

***

### getInteger

Generate a random integer between $min and $max

```php
public static getInteger(int $min, int $max, bool $strong = false): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$min` | **int** |  |
| `$max` | **int** |  |
| `$strong` | **bool** | true if you need a strong random generator (cryptography) |

***

### getFloat

Generate random float (0..1)
This function generates floats with platform-dependent precision

```php
public static getFloat(bool $strong = false): float
```

PHP uses double precision floating-point format (64-bit) which has 52-bits of significand precision. We gather 7 bytes
of random data, and we fix the exponent to the bias (1023). In this way we generate a float of 1.mantissa.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strong` | **bool** | true if you need a strong random generator (cryptography) |

***

### getString

Generate a random string of specified length.

```php
public static getString(int $length, string|null $charlist = null, bool $strong = false): string
```

Uses supplied character list for generating the new string. If no character list provided - uses Base 64 character set.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$charlist` | **string&#124;null** |  |
| `$strong` | **bool** | true if you need a strong random generator (cryptography) |

yxorP::get('REQUEST')
