***

# BufferStream

Provides a buffer stream that can be written to to fill a buffer, and read
from to remove bytes from the buffer.

This stream returns a "hwm" metadata value that tells upstream consumers
what the configured high water mark of the stream is, or the maximum
preferred size of the buffer.

* Full name: `\GuzzleHttp\Psr7\BufferStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**



## Properties


### hwm



```php
private int $hwm
```






***

### buffer



```php
private string $buffer
```






***

## Methods


### __construct



```php
public __construct(int $hwm = 16384): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hwm` | **int** | High water mark, representing the preferred maximum<br />buffer size. If the size of the buffer exceeds the high<br />water mark, then calls to write will continue to succeed<br />but will return 0 to inform writers to slow down<br />until the buffer has been drained by reading from it. |




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

### getContents

Returns the remaining contents in a string

```php
public getContents(): string
```











***

### close

Closes the stream and any underlying resources.

```php
public close(): void
```











***

### detach

Separates any underlying resources from the stream.

```php
public detach(): resource|null
```

After the stream has been detached, the stream is in an unusable state.







**Return Value:**

Underlying PHP stream, if any



***

### getSize

Get the size of the stream if known.

```php
public getSize(): int|null
```









**Return Value:**

Returns the size in bytes if known, or null if unknown.



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

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```











***

### tell

Returns the current position of the file read/write pointer

```php
public tell(): int
```









**Return Value:**

Position of the file pointer



***

### read

Reads data from the buffer.

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

Writes data to the buffer.

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

