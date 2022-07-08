***

# CachingStream





* Full name: `\yxorP\proxy\Psr7\CachingStream`
* This class implements:
[`\yxorP\psr\Http\Message\StreamInterface`](../../psr/Http/Message/StreamInterface.md)



## Properties


### remoteStream



```php
private \yxorP\psr\Http\Message\StreamInterface $remoteStream
```






***

### skipReadBytes



```php
private int $skipReadBytes
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\Http\Message\StreamInterface $stream, \yxorP\psr\Http\Message\StreamInterface $target = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$target` | **\yxorP\psr\Http\Message\StreamInterface** |  |




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
public seek(int $offset, int $whence = SEEK_SET): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | Stream offset |
| `$whence` | **int** | Specifies how the cursor position will be calculated<br />based on the seek offset. Valid values are identical to the built-in<br />PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to<br />offset bytes SEEK_CUR: Set position to current location plus offset<br />SEEK_END: Set position to end-of-stream plus offset. |




***

### getSize

Get the size of the stream if known.

```php
public getSize(): mixed
```









**Return Value:**

Returns the size in bytes if known, or null if unknown.



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

### close

Closes the stream and any underlying resources.

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
public __construct(\yxorP\psr\Http\Message\StreamInterface $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |




***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __toString



```php
public __toString(): mixed
```











***

### isSeekable



```php
public isSeekable(): bool
```











***

### seek



```php
public seek(int $offset, int $whence = SEEK_SET): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |
| `$whence` | **int** |  |




***

### getContents



```php
public getContents(): string
```











***

### __call



```php
public __call(mixed $method, array $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **array** |  |




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

### rewind



```php
public rewind(): mixed
```











***

### read



```php
public read(int $length): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |




***

### write



```php
public write(string $string): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***

### createStream



```php
protected createStream(): mixed
```











***


***

