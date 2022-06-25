***

# Utils

* Full name: `\Monolog\Utils`

## Methods

### canonicalizePath

Makes sure if a relative path is passed in it is turned into an absolute path

```php
public static canonicalizePath(string $streamUrl): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$streamUrl` | **string** | stream URL or path without protocol |

***

### jsonEncode

Return the JSON representation of a value

```php
public static jsonEncode(mixed $data, int $encodeFlags = null, bool $ignoreErrors = false): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$encodeFlags` | **
int** | flags to pass to json encode, defaults to JSON_UNESCAPED_SLASHES &amp;#124; JSON_UNESCAPED_UNICODE |
| `$ignoreErrors` | **
bool** | whether to ignore encoding errors or to throw on error, when ignored and the encoding fails, &quot;null&quot; is returned which is valid json for null |

***

### handleJsonError

Handle a json_encode failure.

```php
public static handleJsonError(int $code, mixed $data, int $encodeFlags = null): string
```

If the failure is due to invalid string encoding, try to clean the input and encode again. If the second encoding
attempt fails, the inital error is not encoding related or the input can't be cleaned then raise a descriptive
exception.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** | return code of json_last_error function |
| `$data` | **mixed** | data that was meant to be encoded |
| `$encodeFlags` | **
int** | flags to pass to json encode, defaults to JSON_UNESCAPED_SLASHES &amp;#124; JSON_UNESCAPED_UNICODE |

**Return Value:**

JSON encoded data after error correction



***

### throwEncodeError

Throws an exception according to a given code with a customized message

```php
private static throwEncodeError(int $code, mixed $data): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** | return code of json_last_error function |
| `$data` | **mixed** | data that was meant to be encoded |

***

### detectAndCleanUtf8

Detect invalid UTF-8 string characters and convert to valid UTF-8.

```php
public static detectAndCleanUtf8(mixed& $data): mixed
```

Valid UTF-8 input will be left unmodified, but strings containing invalid UTF-8 codepoints will be reencoded as UTF-8
with an assumed original encoding of ISO-8859-15. This conversion may result in incorrect output if the actual encoding
was not ISO-8859-15, but it will be clean UTF-8 output and will not rely on expensive and fragile detection algorithms.

Function converts the input in place in the passed variable so that it can be used as a callback for
array_walk_recursive.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | Input to check and convert if needed, passed by ref |

yxorP::get('REQUEST')
