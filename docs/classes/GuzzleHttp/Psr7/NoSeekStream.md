***

# NoSeekStream

Stream decorator that prevents a stream from being seeked.

* Full name: `\GuzzleHttp\Psr7\NoSeekStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**

## Properties

### stream

```php
private \Psr\Http\Message\StreamInterface $stream
```

***

## Methods

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

### isSeekable

Returns whether or not the stream is seekable.

```php
public isSeekable(): bool
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

