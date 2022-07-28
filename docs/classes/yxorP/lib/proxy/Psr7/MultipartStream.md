***

# MultipartStream

Stream that when read returns bytes for a streaming multipart or
multipart/form-data stream.



* Full name: `\yxorP\lib\proxy\Psr7\MultipartStream`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\StreamInterface`](../../../inc/Psr/Http/Message/StreamInterface.md)



## Properties


### boundary



```php
private $boundary
```






***

## Methods


### __construct



```php
public __construct(array $elements = [], string $boundary = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** | Array of associative arrays, each containing a<br />required &quot;name&quot; key mapping to the form field,<br />name, a required &quot;contents&quot; key mapping to a<br />StreamInterface/resource/string, an optional<br />&quot;headers&quot; associative array of custom headers,<br />and an optional &quot;filename&quot; key mapping to a<br />string to send as the filename in the part. |
| `$boundary` | **string** | You can optionally provide a specific boundary |




***

### createStream

Create the aggregate stream that will be used to upload the POST data

```php
protected createStream(array $elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### addElement



```php
private addElement(\yxorP\lib\proxy\Psr7\AppendStream $stream, array $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\lib\proxy\Psr7\AppendStream** |  |
| `$element` | **array** |  |




***

### createElement



```php
private createElement(mixed $name, \yxorP\inc\Psr\Http\Message\StreamInterface $stream, mixed $filename, array $headers): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$stream` | **\yxorP\inc\Psr\Http\Message\StreamInterface** |  |
| `$filename` | **mixed** |  |
| `$headers` | **array** |  |




***

### getHeader



```php
private getHeader(array $headers, mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |
| `$key` | **mixed** |  |




***

### getHeaders

Get the headers needed before transferring the content of a POST file

```php
private getHeaders(array $headers): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |




***

### getBoundary

Get the boundary

```php
public getBoundary(): string
```











***

### isWritable

Returns whether or not the stream is writable.

```php
public isWritable(): bool
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

