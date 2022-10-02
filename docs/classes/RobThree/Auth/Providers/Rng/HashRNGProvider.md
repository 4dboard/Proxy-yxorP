***

# HashRNGProvider

* Full name: `\RobThree\Auth\Providers\Rng\HashRNGProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Rng\IRNGProvider`](./IRNGProvider.md)

## Properties

### algorithm

```php
private string $algorithm
```

***

## Methods

### __construct

```php
public __construct(string $algorithm = &#039;sha256&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$algorithm` | **string** |  |

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

