***

# StreamPlugin

* Full name: `\StreamPlugin`
* Parent class: [`\yxorP\Http\EventWrapper`](./yxorP/Http/EventWrapper.md)

## Properties

### output_buffer_types

```php
private array $output_buffer_types
```

***

### stream

```php
private bool $stream
```

***

### max_content_length

```php
private int $max_content_length
```

***

## Methods

### onHeadersReceived

```php
public onHeadersReceived(): void
```

***

### onCurlWrite

```php
public onCurlWrite(): void
```

***

### onCompleted

```php
public onCompleted(): void
```

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
