***

# Lexy

* Full name: `\Lexy`

## Properties

### cachePath

```php
protected $cachePath
```

***

### srcinfo

```php
protected $srcinfo
```

***

### compilers

```php
protected $compilers
```

***

### extensions

```php
protected $extensions
```

***

### allowed_calls

```php
protected $allowed_calls
```

***

## Methods

### render

```php
public static render(mixed $content, mixed $params = array(), mixed $sandbox = false, mixed $srcinfo = null): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$params` | **mixed** |  |
| `$sandbox` | **mixed** |  |
| `$srcinfo` | **mixed** |  |

***

### execute

```php
public execute(mixed $content, mixed $params = array(), mixed $sandbox = false, mixed $srcinfo = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$params` | **mixed** |  |
| `$sandbox` | **mixed** |  |
| `$srcinfo` | **mixed** |  |

***

### render_file

```php
public static render_file(mixed $file, mixed $params = array(), mixed $sandbox = false): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$params` | **mixed** |  |
| `$sandbox` | **mixed** |  |

***

### file

```php
public file(mixed $file, mixed $params = array(), mixed $sandbox = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$params` | **mixed** |  |
| `$sandbox` | **mixed** |  |

***

### get_cached_file

```php
protected get_cached_file(mixed $file, mixed $sandbox): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$sandbox` | **mixed** |  |

***

### cache_file

```php
protected cache_file(mixed $file, mixed $cachedfile, mixed $filemtime = null, mixed $sandbox = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$cachedfile` | **mixed** |  |
| `$filemtime` | **mixed** |  |
| `$sandbox` | **mixed** |  |

***

### parse

```php
public parse(mixed $text, mixed $sandbox = false, mixed $srcinfo = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$sandbox` | **mixed** |  |
| `$srcinfo` | **mixed** |  |

***

### compile

```php
protected compile(mixed $text, mixed $sandbox = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$sandbox` | **mixed** |  |

***

### check_security

```php
protected check_security(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### check_syntax

```php
protected check_syntax(mixed $code): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

***

### setCachePath

```php
public setCachePath(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### allowCall

```php
public allowCall(mixed $call): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$call` | **mixed** |  |

***

### extend

```php
public extend(mixed $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **mixed** |  |

***

### compile_comments

```php
protected compile_comments(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_unescape_echos

```php
protected compile_unescape_echos(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_echos

```php
protected compile_echos(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_default_structures

```php
protected compile_default_structures(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_else

```php
protected compile_else(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_unless

```php
protected compile_unless(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_php_tags

```php
protected compile_php_tags(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### compile_extensions

```php
protected compile_extensions(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***


***

