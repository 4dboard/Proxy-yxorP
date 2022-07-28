***

# DroppingStream

Stream decorator that begins dropping data once the size of the underlying
stream becomes too full.



* Full name: `\yxorP\lib\proxy\Psr7\DroppingStream`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\StreamInterface`](../../../inc/Psr/Http/Message/StreamInterface.md)



## Properties


### maxLength



```php
private $maxLength
```






***

## Methods


### __construct



```php
public __construct(\yxorP\inc\Psr\Http\Message\StreamInterface $stream, int $maxLength): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\inc\Psr\Http\Message\StreamInterface** | Underlying stream to decorate. |
| `$maxLength` | **int** | Maximum size before dropping data. |




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

