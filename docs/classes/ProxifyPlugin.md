***

# ProxifyPlugin

* Full name: `\ProxifyPlugin`
* Parent class: [`\yxorP\Http\EventWrapper`](./yxorP/Http/EventWrapper.md)

## Properties

### base_url

```php
private string $base_url
```

***

## Methods

### onBeforeRequest

```php
public onBeforeRequest(): void
```

***

### onCompleted

```php
public onCompleted(): void
```

***

### clean_content_type

```php
public clean_content_type(mixed $content_type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content_type` | **mixed** |  |

***

### proxify_head

```php
private proxify_head(mixed $str): array|string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

***

### proxify_css

```php
private proxify_css(mixed $str): array|string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

***

### css_url

```php
private css_url(mixed $matches): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |

***

### css_import

```php
private css_import(mixed $matches): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |

***

### html_attr

```php
private html_attr(mixed $matches): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |

***

### form_action

```php
private form_action(mixed $matches): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |

***

### meta_refresh

```php
private meta_refresh(mixed $matches): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |

***

## Inherited methods

### subscribe

```php
final public subscribe(mixed $dispatcher): void
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **mixed** |  |

***

### onBeforeRequest

```php
public onBeforeRequest(): mixed
```

***

### onHeadersReceived

```php
public onHeadersReceived(): mixed
```

***

### onCurlWrite

```php
public onCurlWrite(): mixed
```

***

### onCompleted

```php
public onCompleted(): mixed
```

***

### route

```php
private route(mixed $event_name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **mixed** |  |

yxorP::get('REQUEST')
