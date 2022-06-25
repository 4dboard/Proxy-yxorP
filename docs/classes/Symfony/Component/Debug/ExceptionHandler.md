***

# ExceptionHandler

ExceptionHandler converts an exception to a Response object.

It is mostly useful in debug mode to replace the default PHP/XDebug output with something prettier and more useful.

As this class is mainly used during Kernel boot, where nothing is yet available, the Response content is always HTML.

* Full name: `\Symfony\Component\Debug\ExceptionHandler`

## Properties

### debug

```php
private $debug
```

***

### charset

```php
private $charset
```

***

### handler

```php
private $handler
```

***

### caughtBuffer

```php
private $caughtBuffer
```

***

### caughtLength

```php
private $caughtLength
```

***

### fileLinkFormat

```php
private $fileLinkFormat
```

***

## Methods

### __construct

```php
public __construct(mixed $debug = true, mixed $charset = null, mixed $fileLinkFormat = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **mixed** |  |
| `$charset` | **mixed** |  |
| `$fileLinkFormat` | **mixed** |  |

***

### register

Registers the exception handler.

```php
public static register(bool $debug = true, string|null $charset = null, string|null $fileLinkFormat = null): \Symfony\Component\Debug\ExceptionHandler
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **bool** | Enable/disable debug mode, where the stack trace is displayed |
| `$charset` | **string&#124;null** | The charset used by exception messages |
| `$fileLinkFormat` | **string&#124;null** | The IDE link template |

**Return Value:**

The registered exception handler



***

### setHandler

Sets a user exception handler.

```php
public setHandler(callable $handler = null): callable|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** | An handler that will be called on Exception |

**Return Value:**

The previous exception handler if any



***

### setFileLinkFormat

Sets the format for links to source files.

```php
public setFileLinkFormat(string $format): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format for links to source files |

**Return Value:**

The previous file link format



***

### handle

Sends a response for the given Exception.

```php
public handle(\Exception $exception): mixed
```

To be as fail-safe as possible, the exception is first handled by our simple exception handler, then by the user
exception handler. The latter takes precedence and any output from the former is cancelled, if and only if nothing bad
happens in this handling path.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Exception** |  |

***

### sendPhpResponse

Sends the error associated with the given Exception as a plain PHP response.

```php
public sendPhpResponse(\Exception|\Symfony\Component\Debug\Exception\FlattenException $exception): mixed
```

This method uses plain PHP functions like header() and echo to output the response.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **
\Exception&#124;\Symfony\Component\Debug\Exception\FlattenException** | An \Exception or FlattenException instance |

***

### getHtml

Gets the full HTML content associated with the given exception.

```php
public getHtml(\Exception|\Symfony\Component\Debug\Exception\FlattenException $exception): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **
\Exception&#124;\Symfony\Component\Debug\Exception\FlattenException** | An \Exception or FlattenException instance |

**Return Value:**

The HTML content as a string



***

### getContent

Gets the HTML content associated with the given exception.

```php
public getContent(\Symfony\Component\Debug\Exception\FlattenException $exception): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Symfony\Component\Debug\Exception\FlattenException** | A FlattenException instance |

**Return Value:**

The content as a string



***

### getStylesheet

Gets the stylesheet associated with the given exception.

```php
public getStylesheet(\Symfony\Component\Debug\Exception\FlattenException $exception): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Symfony\Component\Debug\Exception\FlattenException** | A FlattenException instance |

**Return Value:**

The stylesheet as a string



***

### decorate

```php
private decorate(mixed $content, mixed $css): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$css` | **mixed** |  |

***

### formatClass

```php
private formatClass(mixed $class): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |

***

### formatPath

```php
private formatPath(mixed $path, mixed $line): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$line` | **mixed** |  |

***

### formatArgs

Formats an array as a string.

```php
private formatArgs(array $args): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** | The argument array |

***

### escapeHtml

HTML-encodes a string.

```php
private escapeHtml(mixed $str): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

yxorP::get('REQUEST')
