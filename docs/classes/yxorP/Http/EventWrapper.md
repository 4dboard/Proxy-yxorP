***

# EventWrapper

* Full name: `\yxorP\Http\EventWrapper`
* This class is an **Abstract class**

## Properties

### url_pattern

```php
protected $url_pattern
```

***

## Methods

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
