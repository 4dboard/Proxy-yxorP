***

# lazyOpenStream

* Full name: `\yxorP\app\lib\proxy\psr7\lazyOpenStream`
* This class implements:
  [`\yxorP\app\lib\psr\http\message\streamInterface`](../../psr/http/message/streamInterface.md)

## Properties

### filename

```php
private $filename
```

***

### mode

```php
private $mode
```

***

## Methods

### __construct

```php
public __construct(mixed $filename, mixed $mode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |
| `$mode` | **mixed** |  |

***

### createStream

```php
protected createStream(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(\yxorP\app\lib\psr\http\message\streamInterface $stream): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\app\lib\psr\http\message\streamInterface** |  |

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

### createStream

```php
protected createStream(): mixed
```

***


***

