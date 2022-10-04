***

# Proxy

Provides basic proxies for handlers.



* Full name: `\GuzzleHttp\Handler\Proxy`




## Methods


### wrapSync

Sends synchronous requests to a specific handler while sending all other
requests to another handler.

```php
public static wrapSync(callable $default, callable $sync): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **callable** |  |
| `$sync` | **callable** |  |




***

### wrapStreaming

Sends streaming requests to a streaming compatible handler while sending
all other requests to a default handler.

```php
public static wrapStreaming(callable $default, callable $streaming): callable
```

This, for example, could be useful for taking advantage of the
performance benefits of curl while still supporting true streaming
through the StreamHandler.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **callable** |  |
| `$streaming` | **callable** |  |




***


***

