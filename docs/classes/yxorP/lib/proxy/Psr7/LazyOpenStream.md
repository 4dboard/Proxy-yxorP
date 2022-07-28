***

# LazyOpenStream

Lazily reads or writes to a file that is opened only after an IO operation
take place on the stream.



* Full name: `\yxorP\lib\proxy\Psr7\LazyOpenStream`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\StreamInterface`](../../../inc/Psr/Http/Message/StreamInterface.md)



## Properties


### filename



```php
private string $filename
```






***

### mode



```php
private string $mode
```






***

## Methods


### __construct



```php
public __construct(string $filename, string $mode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | File to lazily open |
| `$mode` | **string** | fopen mode to use when opening the stream |




***

### createStream

Creates the underlying stream lazily when required.

```php
protected createStream(): \yxorP\inc\Psr\Http\Message\StreamInterface
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

