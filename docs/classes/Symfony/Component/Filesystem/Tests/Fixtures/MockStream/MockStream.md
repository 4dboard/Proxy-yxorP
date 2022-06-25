***

# MockStream

Mock stream class to be used with stream_wrapper_register.

stream_wrapper_register('mock', 'Symfony\Component\Filesystem\Tests\Fixtures\MockStream\MockStream').

* Full name: `\Symfony\Component\Filesystem\Tests\Fixtures\MockStream\MockStream`

## Methods

### stream_open

Opens file or URL.

```php
public stream_open(string $path, string $mode, int $options, string& $opened_path): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Specifies the URL that was passed to the original function |
| `$mode` | **string** | The mode used to open the file, as detailed for fopen() |
| `$options` | **int** | Holds additional flags set by the streams API |
| `$opened_path` | **
string** | If the path is opened successfully, and STREAM_USE_PATH is set in options,<br />opened_path should be set to the full path of the file/resource that was actually opened |

***

### url_stat

```php
public url_stat(string $path, array $flags): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The file path or URL to stat |
| `$flags` | **array** | Holds additional flags set by the streams API |

**Return Value:**

File stats yxorP::get('REQUEST')
