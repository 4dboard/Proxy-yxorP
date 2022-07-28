***

# CachingStream

Stream decorator that can cache previously read bytes from a sequentially
read stream.



* Full name: `\yxorP\lib\proxy\Psr7\CachingStream`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\StreamInterface`](../../../inc/Psr/Http/Message/StreamInterface.md)



## Properties


### remoteStream



```php
private \yxorP\inc\Psr\Http\Message\StreamInterface $remoteStream
```






***

### skipReadBytes



```php
private int $skipReadBytes
```






***

## Methods


### __construct

We will treat the buffer object as the body of the stream

```php
public __construct(\yxorP\inc\Psr\Http\Message\StreamInterface $stream, \yxorP\inc\Psr\Http\Message\StreamInterface $target = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\inc\Psr\Http\Message\StreamInterface** | Stream to cache |
| `$target` | **\yxorP\inc\Psr\Http\Message\StreamInterface** | Optionally specify where data is cached |




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

### getSize

Get the size of the stream if known.

```php
public getSize(): int|null
```









**Return Value:**

Returns the size in bytes if known, or null if unknown.



***

### cacheEntireStream



```php
private cacheEntireStream(): mixed
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

### close

Close both the remote stream and buffer stream

```php
public close(): void
```











***


## Inherited methods


### __construct



```php
public __construct(\yxorP\inc\Psr\Http\Message\StreamInterface $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\inc\Psr\Http\Message\StreamInterface** | Stream to decorate |




***

### __get

Magic method used to create a new stream if streams are not added in
the constructor of a decorator (e.g., LazyOpenStream).

```php
public __get(string $name): \yxorP\inc\Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the property (allows &quot;stream&quot; only). |




***

### createStream

Implement in subclasses to dynamically create streams when requested.

```php
protected createStream(): \yxorP\inc\Psr\Http\Message\StreamInterface
```











***

### __toString



```php
public __toString(): mixed
```











***

### isSeekable



```php
public isSeekable(): mixed
```











***

### seek



```php
public seek(mixed $offset, mixed $whence = SEEK_SET): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$whence` | **mixed** |  |




***

### getContents



```php
public getContents(): mixed
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
| `$method` | **string** | Missing method name |
| `$args` | **array** | Method arguments |




***

### close



```php
public close(): mixed
```











***

### getMetadata



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
public getSize(): mixed
```











***

### eof



```php
public eof(): mixed
```











***

### tell



```php
public tell(): mixed
```











***

### isReadable



```php
public isReadable(): mixed
```











***

### isWritable



```php
public isWritable(): mixed
```











***

### rewind



```php
public rewind(): mixed
```











***

### read



```php
public read(mixed $length): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***

### write



```php
public write(mixed $string): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |




***


***

