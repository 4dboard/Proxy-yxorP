***

# DroppingStream

Stream decorator that begins dropping data once the size of the underlying
stream becomes too full.



* Full name: `\GuzzleHttp\Psr7\DroppingStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**



## Properties


### maxLength



```php
private int $maxLength
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
public __construct(\Psr\Http\Message\StreamInterface $stream, int $maxLength): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | Underlying stream to decorate. |
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

