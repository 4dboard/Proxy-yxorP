***

# FnStream

Compose stream implementations based on a hash of functions.

Allows for easy testing and extension of a provided stream without needing
to create a concrete class for a simple extension point.

* Full name: `\GuzzleHttp\Psr7\FnStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SLOTS`|private| |[&#039;__toString&#039;, &#039;close&#039;, &#039;detach&#039;, &#039;rewind&#039;, &#039;getSize&#039;, &#039;tell&#039;, &#039;eof&#039;, &#039;isSeekable&#039;, &#039;seek&#039;, &#039;isWritable&#039;, &#039;write&#039;, &#039;isReadable&#039;, &#039;read&#039;, &#039;getContents&#039;, &#039;getMetadata&#039;]|

## Properties


### methods



```php
private array&lt;string,callable&gt; $methods
```






***

## Methods


### __construct



```php
public __construct(array&lt;string,callable&gt; $methods): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methods` | **array<string,callable>** | Hash of method name to a callable. |




***

### __get

Lazily determine which methods are not implemented.

```php
public __get(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __destruct

The close method is called on the underlying stream only if possible.

```php
public __destruct(): mixed
```











***

### __wakeup

An unserialize would allow the __destruct to run when the unserialized value goes out of scope.

```php
public __wakeup(): void
```











***

### decorate

Adds custom functionality to an underlying stream by intercepting
specific method calls.

```php
public static decorate(\Psr\Http\Message\StreamInterface $stream, array&lt;string,callable&gt; $methods): \GuzzleHttp\Psr7\FnStream
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to decorate |
| `$methods` | **array<string,callable>** | Hash of method name to a closure |




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

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
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

### getContents

Returns the remaining contents in a string

```php
public getContents(): string
```











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

