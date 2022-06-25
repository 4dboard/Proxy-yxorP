***

# Bz2

Compression adapter for Bz2

* Full name: `\Zend\Filter\Compress\Bz2`
* Parent class: [`\Zend\Filter\Compress\AbstractCompressionAlgorithm`](./AbstractCompressionAlgorithm.md)

## Properties

### options

Compression Options array(
'blocksize' => Blocksize to use from 0-9
'archive' => Archive to use
)

```php
protected array $options
```

***

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

### getBlocksize

Returns the set blocksize

```php
public getBlocksize(): int
```

***

### setBlocksize

Sets a new blocksize

```php
public setBlocksize(int $blocksize): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$blocksize` | **int** |  |

***

### getArchive

Returns the set archive

```php
public getArchive(): string
```

***

### setArchive

Sets the archive to use for de-/compression

```php
public setArchive(string $archive): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$archive` | **string** | Archive to use |

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

***

## Inherited methods

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

### getOptions

Returns one or all set options

```php
public getOptions(string $option = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | (Optional) Option to return |

***

### setOptions

Sets all or one option

```php
public setOptions(array $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

yxorP::get('REQUEST')
