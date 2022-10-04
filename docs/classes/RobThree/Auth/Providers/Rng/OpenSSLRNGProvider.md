***

# OpenSSLRNGProvider

* Full name: `\RobThree\Auth\Providers\Rng\OpenSSLRNGProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Rng\IRNGProvider`](./IRNGProvider.md)

## Properties

### requirestrong

```php
private bool $requirestrong
```

***

## Methods

### __construct

```php
public __construct(bool $requirestrong = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$requirestrong` | **bool** |  |

***

### getRandomBytes

```php
public getRandomBytes(mixed $bytecount): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytecount` | **mixed** | the number of bytes of randomness to return |

**Return Value:**

the random bytes



***

### isCryptographicallySecure

```php
public isCryptographicallySecure(): bool
```

**Return Value:**

whether this provider is cryptographically secure



***


***

