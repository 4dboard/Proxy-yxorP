***

# CachingStream

Stream decorator that can cache previously read bytes from a sequentially
read stream.

* Full name: `\GuzzleHttp\Psr7\CachingStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**

## Properties

### remoteStream

```php
private \Psr\Http\Message\StreamInterface $remoteStream
```

***

### skipReadBytes

```php
private int $skipReadBytes
```

***

### stream

```php
private \Psr\Http\Message\StreamInterface $stream
```

***

## Methods

### __construct

We will treat the buffer object as the body of the stream

```php
public __construct(\Psr\Http\Message\StreamInterface $stream, \Psr\Http\Message\StreamInterface $target = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to cache. The cursor is assumed to be at the beginning of the stream. |
| `$target` | **\Psr\Http\Message\StreamInterface** | Optionally specify where data is cached |

***

### getSize

Get the size of the stream if known.

```php
public getSize(): int|null
```

**Return Value:**

Returns the size in bytes if known, or null if unknown.



***

### rewind

Seek to the beginning of the stream.

```php
public rewind(): void
```

If the stream is not seekable, this method will raise an exception;
otherwise, it will perform a seek(0).









***

### seek

Seek to a position in the stream.

```php
public seek(mixed $offset, mixed $whence = SEEK_SET): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Stream offset |
| `$whence` | **mixed** | Specifies how the cursor position will be calculated<br />based on the seek offset. Valid values are identical to the built-in<br />PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to<br />offset bytes SEEK_CUR: Set position to current location plus offset<br />SEEK_END: Set position to end-of-stream plus offset. |

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

### write

Write data to the stream.

```php
public write(mixed $string): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** | The string that is to be written. |

**Return Value:**

Returns the number of bytes written to the stream.



***

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```

***

### close

Close both the remote stream and buffer stream

```php
public close(): void
```

***

### cacheEntireStream

```php
private cacheEntireStream(): int
```

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

