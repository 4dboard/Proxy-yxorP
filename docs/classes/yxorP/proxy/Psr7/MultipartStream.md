***

# MultipartStream





* Full name: `\yxorP\proxy\Psr7\MultipartStream`
* This class implements:
[`\yxorP\psr\Http\Message\StreamInterface`](../../psr/Http/Message/StreamInterface.md)



## Properties


### boundary



```php
private mixed $boundary
```






***

## Methods


### __construct



```php
public __construct(array $elements = [], mixed $boundary = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |
| `$boundary` | **mixed** |  |




***

### createStream



```php
protected createStream(array $elements): \yxorP\proxy\Psr7\AppendStream
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### addElement



```php
private addElement(\yxorP\proxy\Psr7\AppendStream $stream, array $element): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\proxy\Psr7\AppendStream** |  |
| `$element` | **array** |  |




***

### createElement



```php
private createElement(mixed $name, \yxorP\psr\Http\Message\StreamInterface $stream, mixed $filename, array $headers): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |
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



```php
private getHeaders(array $headers): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |




***

### getBoundary



```php
public getBoundary(): mixed
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
