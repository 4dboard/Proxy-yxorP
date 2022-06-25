***

# CookiePlugin

* Full name: `\CookiePlugin`
* Parent class: [`\yxorP\Http\EventWrapper`](./yxorP/Http/EventWrapper.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COOKIE_PREFIX`|public| |&#039;pc&#039;|

## Methods

### onBeforeRequest

```php
public onBeforeRequest(): void
```

***

### onHeadersReceived

```php
public onHeadersReceived(): void
```

***

### parse_cookie

```php
private parse_cookie(mixed $line, mixed $url): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$url` | **mixed** |  |

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
