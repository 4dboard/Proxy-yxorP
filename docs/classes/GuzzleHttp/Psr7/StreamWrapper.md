***

# StreamWrapper

Converts Guzzle streams into PHP stream resources.

* Full name: `\GuzzleHttp\Psr7\StreamWrapper`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://www.php.net/streamwrapper -

## Properties

### context

```php
public resource $context
```

***

### stream

```php
private \Psr\Http\Message\StreamInterface $stream
```

***

### mode

```php
private string $mode
```

***

## Methods

### getResource

Returns a resource representing the stream.

```php
public static getResource(\Psr\Http\Message\StreamInterface $stream): resource
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** | The stream to get a resource for |

***

### createStreamContext

Creates a stream context that can be used to open a stream as a php stream resource.

```php
public static createStreamContext(\Psr\Http\Message\StreamInterface $stream): resource
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** |  |

***

### register

Registers the stream wrapper if needed

```php
public static register(): void
```

* This method is **static**.

***

### stream_open

```php
public stream_open(string $path, string $mode, int $options, string& $opened_path = null): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$mode` | **string** |  |
| `$options` | **int** |  |
| `$opened_path` | **string** |  |

***

### stream_read

```php
public stream_read(int $count): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |

***

### stream_write

```php
public stream_write(string $data): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |

***

### stream_tell

```php
public stream_tell(): int
```

***

### stream_eof

```php
public stream_eof(): bool
```

***

### stream_seek

```php
public stream_seek(int $offset, int $whence): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |
| `$whence` | **int** |  |

***

### stream_cast

```php
public stream_cast(int $cast_as): resource|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cast_as` | **int** |  |

***

### stream_stat

```php
public stream_stat(): array&lt;int|string,int&gt;
```

***

### url_stat

```php
public url_stat(string $path, int $flags): array&lt;int|string,int&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$flags` | **int** |  |

***


***

