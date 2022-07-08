***

# LimitStream





* Full name: `\yxorP\proxy\Psr7\LimitStream`
* This class implements:
[`\yxorP\psr\Http\Message\StreamInterface`](../../psr/Http/Message/StreamInterface.md)



## Properties


### offset



```php
private $offset
```






***

### limit



```php
private $limit
```






***

## Methods


### __construct



```php
public __construct(\yxorP\psr\Http\Message\StreamInterface $stream, mixed $limit = -1, mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$limit` | **mixed** |  |
| `$offset` | **mixed** |  |




***

### setLimit



```php
public setLimit(mixed $limit): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **mixed** |  |




***

### setOffset



```php
public setOffset(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |




***

### tell

Returns the current position of the file read/write pointer

```php
public tell(): int
```









**Return Value:**

Position of the file pointer



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

### eof

Returns true if the stream is at the end of the stream.

```php
public eof(): bool
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
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
