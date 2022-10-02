***

# AppendStream

Reads from multiple streams, one after the other.

This is a read-only stream decorator.

* Full name: `\GuzzleHttp\Psr7\AppendStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**

## Properties

### streams

```php
private \Psr\Http\Message\StreamInterface[] $streams
```

***

### seekable

```php
private bool $seekable
```

***

### current

```php
private int $current
```

***

### pos

```php
private int $pos
```

***

## Methods

### __construct

```php
public __construct(\Psr\Http\Message\StreamInterface[] $streams = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streams` | **\Psr\Http\Message\StreamInterface[]** | Streams to decorate. Each stream must<br />be readable. |

***

### __toString

Reads all data from the stream into a string, from the beginning to end.

```php
public __toString(): string
```

This method MUST attempt to seek to the beginning of the stream before
reading data and read the stream until the end is reached.

Warning: This could attempt to load a large amount of data into memory.

This method MUST NOT raise an exception in order to conform with PHP's
string casting operations.









***

### addStream

Add a stream to the AppendStream

```php
public addStream(\Psr\Http\Message\StreamInterface $stream): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to append. Must be readable. |

***

### getContents

Returns the remaining contents in a string

```php
public getContents(): string
```

***

### close

Closes each attached stream.

```php
public close(): void
```

***

### detach

Detaches each attached stream.

```php
public detach(): resource|null
```

Returns null as it's not clear which underlying stream resource to return.

**Return Value:**

Underlying PHP stream, if any



***

### tell

Returns the current position of the file read/write pointer

```php
public tell(): int
```

**Return Value:**

Position of the file pointer



***

### getSize

Tries to calculate the size by adding the size of each stream.

```php
public getSize(): int|null
```

If any of the streams do not return a valid number, then the size of the
append stream cannot be determined and null is returned.

**Return Value:**

Returns the size in bytes if known, or null if unknown.



***

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```

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

Attempts to seek to the given position. Only supports SEEK_SET.

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

Reads from all of the appended streams until the length is met or EOF.

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

### isReadable

Returns whether or not the stream is readable.

```php
public isReadable(): bool
```

***

### isWritable

Returns whether or not the stream is writable.

```php
public isWritable(): bool
```

***

### isSeekable

Returns whether or not the stream is seekable.

```php
public isSeekable(): bool
```

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

### getMetadata

Get stream metadata as an associative array or retrieve a specific key.

```php
public getMetadata(mixed $key = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | Specific metadata to retrieve. |

***


***

