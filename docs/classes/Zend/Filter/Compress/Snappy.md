***

# Snappy

Compression adapter for php snappy (http://code.google.com/p/php-snappy/)

* Full name: `\Zend\Filter\Compress\Snappy`
* This class implements:
  [`\Zend\Filter\Compress\CompressionAlgorithmInterface`](./CompressionAlgorithmInterface.md)

## Methods

### __construct

Class constructor

```php
public __construct(null|array|\Traversable $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable** | (Optional) Options to set |

***

### compress

Compresses the given content

```php
public compress(string $content): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |

***

### decompress

Decompresses the given content

```php
public decompress(string $content): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |

***

### toString

Returns the adapter name

```php
public toString(): string
```

yxorP::get('REQUEST')
