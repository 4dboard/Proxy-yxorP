***

# dailyMotionPluginAction

Extending the wrapper class.

* Full name: `\yxorP\plugin\dailyMotionPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../app/lib/http/wrapper.md)

## Properties

### url_pattern

Defining the URL pattern that the plugin will be applied to.

```php
protected ?string $url_pattern
```

***

## Methods

### onComplete

A method that is called when the request is completed.

```php
public onComplete(): void
```

***

### completed

A method that is called when the request is completed.

```php
public static completed(mixed $matches, mixed $content): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |
| `$content` | **mixed** |  |

***

## Inherited methods

### subscribe

Subscribing to all the events.

```php
final public subscribe(\yxorP\app\lib\yP $dispatcher): void
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\yxorP\app\lib\yP** |  |

***

### route

A method that is used to route the events to the appropriate methods.

```php
private route(string $event_name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **string** |  |

***

### onCache

A method that is called when the event `EVENT_BUILD_CACHE` is triggered.

```php
public onCache(): void
```

***

### onCheck

Used to check if the event should be executed.

```php
public onCheck(): self
```

***

### onContext

A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered.

```php
public onContext(): void
```

***

### onIncludes

A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered.

```php
public onIncludes(): void
```

***

### onHeaders

A method that is called when the event `EVENT_BUILD_HEADERS` is triggered.

```php
public onHeaders(): void
```

***

### onRequest

A method that is called when the event `EVENT_BUILD_REQUEST` is triggered.

```php
public onRequest(): void
```

***

### onBeforeSend

Used to build the result.

```php
public onBeforeSend(): void
```

***

### onSend

Used to execute code when the request is sent.

```php
public onSend(): void
```

***

### onSent

Used to execute code before the request is sent.

```php
public onSent(): void
```

***

### onWrite

Used to execute code when the headers are received.

```php
public onWrite(): void
```

***

### onComplete

Used to execute code when the headers are received.

```php
public onComplete(): void
```

***

### onFinal

Used to execute code when the request is completed.

```php
public onFinal(): void
```

***

### onException

Used to execute code when an exception is thrown.

```php
public onException(\Exception $e): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |

***


***

