***

# MultipartStream

Stream that when read returns bytes for a streaming multipart or
multipart/form-data stream.



* Full name: `\GuzzleHttp\Psr7\MultipartStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**



## Properties


### boundary



```php
private string $boundary
```






***

### stream



```php
private \Psr\Http\Message\StreamInterface $stream
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

### getBoundary



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

### getHeaders

Get the headers needed before transferring the content of a POST file

```php
private getHeaders(array&lt;string,string&gt; $headers): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array<string,string>** |  |




***

### createStream

Create the aggregate stream that will be used to upload the POST data

```php
protected createStream(array $elements = []): \Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### addElement



```php
private addElement(\GuzzleHttp\Psr7\AppendStream $stream, array $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\GuzzleHttp\Psr7\AppendStream** |  |
| `$element` | **array** |  |




***

### createElement



```php
private createElement(string $name, \Psr\Http\Message\StreamInterface $stream, ?string $filename, array $headers): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$stream` | **\Psr\Http\Message\StreamInterface** |  |
| `$filename` | **?string** |  |
| `$headers` | **array** |  |




***

### getHeader



```php
private getHeader(array $headers, string $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |
| `$key` | **string** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Psr\Http\Message\StreamInterface $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Stream to decorate |




***

### __get

Magic method used to create a new stream if streams are not added in
the constructor of a decorator (e.g., LazyOpenStream).

```php
public __get(string $name): \Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### __toString



```php
public __toString(): string
```











***

### getContents



```php
public getContents(): string
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
| `$method` | **string** |  |
| `$args` | **array** |  |




***

### close



```php
public close(): void
```











***

### getMetadata

{@inheritdoc}

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

### isSeekable



```php
public isSeekable(): bool
```











***

### rewind



```php
public rewind(): void
```











***

### seek



```php
public seek(mixed $offset, mixed $whence = SEEK_SET): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** |  |
| `$whence` | **mixed** |  |




***

### read



```php
public read(mixed $length): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***

### write



```php
public write(mixed $string): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |




***

### createStream

Implement in subclasses to dynamically create streams when requested.

```php
protected createStream(): \Psr\Http\Message\StreamInterface
```











***


***

