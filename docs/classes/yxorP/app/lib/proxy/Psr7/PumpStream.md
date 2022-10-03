***

# pumpStream





* Full name: `\yxorP\app\lib\proxy\psr7\pumpStream`
* This class implements:
[`\yxorP\app\lib\psr\http\message\streamInterface`](../../psr/http/message/streamInterface.md)



## Properties


### source



```php
private $source
```






***

### size



```php
private $size
```






***

### tellPos



```php
private $tellPos
```






***

### metadata



```php
private $metadata
```






***

### buffer



```php
private $buffer
```






***

## Methods


### __construct



```php
public __construct(callable $source, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **callable** |  |
| `$options` | **array** |  |




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

### tell

Returns the current position of the file read/write pointer

```php
public tell(): int
```









**Return Value:**

Position of the file pointer



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
public rewind(): mixed
```

If the stream is not seekable, this method will raise an exception;
otherwise, it will perform a seek(0).









***

### seek

Seek to a position in the stream.

```php
public seek(mixed $offset, mixed $whence = SEEK_SET): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | Stream offset |
| `$whence` | **mixed** | Specifies how the cursor position will be calculated<br />based on the seek offset. Valid values are identical to the built-in<br />PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to<br />offset bytes SEEK_CUR: Set position to current location plus offset<br />SEEK_END: Set position to end-of-stream plus offset. |




***

### isWritable

Returns whether or not the stream is writable.

```php
public isWritable(): bool
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

### isReadable

Returns whether or not the stream is readable.

```php
public isReadable(): bool
```











***

### getContents

Returns the remaining contents in a string

```php
public getContents(): string
```











***

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```











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

### pump



```php
private pump(mixed $length): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***

### getMetadata

Get stream metadata as an associative array or retrieve a specific key.

```php
public getMetadata(mixed $key = null): array|mixed|null
```

The keys returned are identical to the keys returned from PHP's
stream_get_meta_data() function.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** | Specific metadata to retrieve. |


**Return Value:**

Returns an associative array if no key is
provided. Returns a specific key value if a key is provided and the
value is found, or null if the key is not found.



***


***

