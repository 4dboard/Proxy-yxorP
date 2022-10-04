***

# LazyOpenStream

Lazily reads or writes to a file that is opened only after an IO operation
take place on the stream.

* Full name: `\GuzzleHttp\Psr7\LazyOpenStream`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Psr\Http\Message\StreamInterface`](../../Psr/Http/Message/StreamInterface.md)
* This class is a **Final class**

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
protected createStream(): \Psr\Http\Message\StreamInterface
```

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

