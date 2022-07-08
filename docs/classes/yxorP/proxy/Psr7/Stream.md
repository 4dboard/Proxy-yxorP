***

# Stream





* Full name: `\yxorP\proxy\Psr7\Stream`
* This class implements:
[`\yxorP\psr\Http\Message\StreamInterface`](../../psr/Http/Message/StreamInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`READABLE_MODES`|public| |&#039;/r|a\\+|ab\\+|w\\+|wb\\+|x\\+|xb\\+|c\\+|cb\\+/&#039;|
|`WRITABLE_MODES`|public| |&#039;/a|w|r\\+|rb\\+|rw|x|c/&#039;|

## Properties


### stream



```php
private $stream
```






***

### size



```php
private mixed $size
```






***

### seekable



```php
private mixed $seekable
```






***

### readable



```php
private bool $readable
```






***

### writable



```php
private bool $writable
```






***

### uri



```php
private mixed $uri
```






***

### customMetadata



```php
private mixed $customMetadata
```






***

## Methods


### __construct



```php
public __construct(mixed $stream, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **mixed** |  |
| `$options` | **mixed** |  |




***

### getMetadata

Get stream metadata as an associative array or retrieve a specific key.

```php
public getMetadata(mixed $key = null): mixed
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

### __destruct



```php
public __destruct(): mixed
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
public detach(): mixed
```

After the stream has been detached, the stream is in an unusable state.







**Return Value:**

Underlying PHP stream, if any



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

### seek

Seek to a position in the stream.

```php
public seek(int $offset, int $whence = SEEK_SET): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | Stream offset |
| `$whence` | **int** | Specifies how the cursor position will be calculated<br />based on the seek offset. Valid values are identical to the built-in<br />PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to<br />offset bytes SEEK_CUR: Set position to current location plus offset<br />SEEK_END: Set position to end-of-stream plus offset. |




***

### getContents

Returns the remaining contents in a string

```php
public getContents(): string
```











***

### getSize

Get the size of the stream if known.

```php
public getSize(): mixed
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

### rewind

Seek to the beginning of the stream.

```php
public rewind(): mixed
```

If the stream is not seekable, this method will raise an exception;
otherwise, it will perform a seek(0).









***

### read

Read data from the stream.

```php
public read(int $length): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** | Read up to $length bytes from the object and return<br />them. Fewer than $length bytes may be returned if underlying stream<br />call returns fewer bytes. |


**Return Value:**

Returns the data read from the stream, or an empty string
if no bytes are available.



***

### write

Write data to the stream.

```php
public write(string $string): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string that is to be written. |


**Return Value:**

Returns the number of bytes written to the stream.



***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
