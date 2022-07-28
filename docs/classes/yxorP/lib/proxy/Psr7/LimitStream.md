***

# LimitStream

Decorator used to return only a subset of a stream



* Full name: `\yxorP\lib\proxy\Psr7\LimitStream`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\StreamInterface`](../../../inc/Psr/Http/Message/StreamInterface.md)



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

## Methods


### __construct



```php
public __construct(\yxorP\inc\Psr\Http\Message\StreamInterface $stream, int $limit = -1, int $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\inc\Psr\Http\Message\StreamInterface** | Stream to wrap |
| `$limit` | **int** | Total number of bytes to allow to be read<br />from the stream. Pass -1 for no limit. |
| `$offset` | **int** | Position to seek to before reading (only<br />works on seekable streams). |




***

### setLimit

Set the limit of bytes that the decorator allows to be read from the
stream.

```php
public setLimit(int $limit): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Number of bytes to allow to be read from the stream.<br />Use -1 for no limit. |




***

### setOffset

Set the offset to start limiting from

```php
public setOffset(int $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** | Offset to seek to and begin byte limiting from |




***

### tell

Give a relative tell()
{@inheritdoc}

```php
public tell(): int
```









**Return Value:**

Position of the file pointer



***

### seek

Allow for a bounded seek on the read limited stream
{@inheritdoc}

```php
public seek(mixed $offset, mixed $whence = SEEK_SET): mixed
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

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
```











***

### getSize

Returns the size of the limited subset of data
{@inheritdoc}

```php
public getSize(): int|null
```









**Return Value:**

Returns the size in bytes if known, or null if unknown.



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

