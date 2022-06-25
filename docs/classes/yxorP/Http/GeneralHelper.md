***

# GeneralHelper

* Full name: `\yxorP\Http\GeneralHelper`

## Methods

### vid_player

```php
public static vid_player(mixed $url, mixed $width = &#039;100%&#039;, mixed $height = &#039;100%&#039;, mixed $extension = false): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |
| `$width` | **mixed** |  |
| `$height` | **mixed** |  |
| `$extension` | **mixed** |  |

***

### starts_with

```php
public static starts_with(mixed $haystack, mixed $needles): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$haystack` | **mixed** |  |
| `$needles` | **mixed** |  |

***

### str_before

```php
public static str_before(mixed $subject, mixed $search): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **mixed** |  |
| `$search` | **mixed** |  |

***

### is_html

```php
public static is_html(mixed $content_type): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content_type` | **mixed** |  |

***

### in_arrayi

```php
public static in_arrayi(mixed $needle, mixed $haystack): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **mixed** |  |
| `$haystack` | **mixed** |  |

***

### re_match

```php
public static re_match(mixed $pattern, mixed $string): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **mixed** |  |
| `$string` | **mixed** |  |

***

### array_merge_custom

```php
public static array_merge_custom(): array
```

* This method is **static**.

***

### str_rot_pass

```php
public static str_rot_pass(mixed $str, mixed $key, mixed $decrypt = false): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |
| `$key` | **mixed** |  |
| `$decrypt` | **mixed** |  |

***

### app_url

```php
public static app_url(): string
```

* This method is **static**.

***

### render_string

```php
public static render_string(mixed $str, mixed $vars = array()): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |
| `$vars` | **mixed** |  |

***

### time_ms

```php
public static time_ms(): float
```

* This method is **static**.

***

### base64_url_encode

```php
public static base64_url_encode(mixed $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |

***

### base64_url_decode

```php
public static base64_url_decode(mixed $input): bool|string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |

***

### proxify_url

```php
public static proxify_url(mixed $url, mixed $base_url = &#039;&#039;): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |
| `$base_url` | **mixed** |  |

***

### add_http

```php
public static add_http(mixed $url): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |

***

### rel2abs

```php
public static rel2abs(mixed $rel, mixed $base): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rel` | **mixed** |  |
| `$base` | **mixed** |  |

yxorP::get('REQUEST')
