***

# LimitStream

Decorator used to return only a subset of a stream.

* Full name: `\GuzzleHttp\Psr7\LimitStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**

## Properties

### offset

```php
private int $offset
```

***

### limit

```php
private int $limit
```

***

### stream

```php
private \Psr\Http\Message\StreamInterface $stream
```

***

## Methods

### __construct

```php
public __construct(\Psr\Http\Message\StreamInterface $stream, int $limit = -1, int $offset): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to wrap |
| `$limit` | **int** | Total number of bytes to allow to be read<br />from the stream. Pass -1 for no limit. |
| `$offset` | **int** | Position to seek to before reading (only<br />works on seekable streams). |

***

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```

***

### getSize

Returns the size of the limited subset of data

```php
public getSize(): int|null
```

**Return Value:**

Returns the size in bytes if known, or null if unknown.



***

### seek

Allow for a bounded seek on the read limited stream

```php
public seek(mixed $offset, mixed $whence = SEEK_SET): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Stream offset |
| `$whence` | **mixed** | Specifies how the cursor position will be calculated<br />based on the seek offset. Valid values are identical to the built-in<br />PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to<br />offset bytes SEEK_CUR: Set position to current location plus offset<br />SEEK_END: Set position to end-of-stream plus offset. |

***

### tell

Give a relative tell()

```php
public tell(): int
```

**Return Value:**

Position of the file pointer



***

### setOffset

Set the offset to start limiting from

```php
public setOffset(int $offset): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | Offset to seek to and begin byte limiting from |

***

### setLimit

Set the limit of bytes that the decorator allows to be read from the
stream.

```php
public setLimit(int $limit): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Number of bytes to allow to be read from the stream.<br />Use -1 for no limit. |

***

### read

Read data from the stream.

```php
public read(mixed $length): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** | Read up to $length bytes from the object and return<br />them. Fewer than $length bytes may be returned if underlying stream<br />call returns fewer bytes. |

**Return Value:**

Returns the data read from the stream, or an empty string
if no bytes are available.



***

## Inherited methods

### __construct

```php
public __construct(\Psr\Http\Message\StreamInterface $stream): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to decorate |

***

### __get

Magic method used to create a new stream if streams are not added in
the constructor of a decorator (e.g., LazyOpenStream).

```php
public __get(string $name): \Psr\Http\Message\StreamInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### __toString

```php
public __toString(): string
```

***

### getContents

```php
public getContents(): string
```

***

### __call

Allow decorators to implement custom methods

```php
public __call(string $method, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$args` | **array** |  |

***

### close

```php
public close(): void
```

***

### getMetadata

{@inheritdoc}

```php
public getMetadata(mixed $key = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |

***

### detach

```php
public detach(): mixed
```

***

### getSize

```php
public getSize(): ?int
```

***

### eof

```php
public eof(): bool
```

***

### tell

```php
public tell(): int
```

***

### isReadable

```php
public isReadable(): bool
```

***

### isWritable

```php
public isWritable(): bool
```

***

### isSeekable

```php
public isSeekable(): bool
```

***

### rewind

```php
public rewind(): void
```

***

### seek

```php
public seek(mixed $offset, mixed $whence = SEEK_SET): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$whence` | **mixed** |  |

***

### read

```php
public read(mixed $length): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |

***

### write

```php
public write(mixed $string): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |

***

### createStream

Implement in subclasses to dynamically create streams when requested.

```php
protected createStream(): \Psr\Http\Message\StreamInterface
```

***


***

