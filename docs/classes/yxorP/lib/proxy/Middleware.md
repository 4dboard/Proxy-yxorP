***

# Middleware

Functions used to create and wrap handlers with handler middleware.



* Full name: `\yxorP\lib\proxy\Middleware`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### cookies

Middleware that adds cookies to requests.

```php
public static cookies(): callable
```

The options array must be set to a CookieJarInterface in order to use
cookies. This is typically handled for you by a client.

* This method is **static**.





**Return Value:**

Returns a function that accepts the next handler.



***

### httpErrors

Middleware that throws exceptions for 4xx or 5xx responses when the
"http_error" request option is set to true.

```php
public static httpErrors(): callable
```



* This method is **static**.





**Return Value:**

Returns a function that accepts the next handler.



***

### history

Middleware that pushes history data to an ArrayAccess container.

```php
public static history(array|\ArrayAccess& $container): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **array&#124;\ArrayAccess** | Container to hold the history (by reference). |


**Return Value:**

Returns a function that accepts the next handler.



***

### tap

Middleware that invokes a callback before and after sending a request.

```php
public static tap(callable $before = null, callable $after = null): callable
```

The provided listener cannot modify or alter the response. It simply
"taps" into the chain to be notified before returning the promise. The
before listener accepts a request and options array, and the after
listener accepts a request, options array, and response promise.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$before` | **callable** | Function to invoke before forwarding the request. |
| `$after` | **callable** | Function invoked after forwarding. |


**Return Value:**

Returns a function that accepts the next handler.



***

### redirect

Middleware that handles request redirects.

```php
public static redirect(): callable
```



* This method is **static**.





**Return Value:**

Returns a function that accepts the next handler.



***

### retry

Middleware that retries requests based on the boolean result of
invoking the provided "decider" function.

```php
public static retry(callable $decider, callable $delay = null): callable
```

If no delay function is provided, a simple implementation of exponential
backoff will be utilized.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decider` | **callable** | Function that accepts the number of retries,<br />a request, [response], and [exception] and<br />returns true if the request is to be retried. |
| `$delay` | **callable** | Function that accepts the number of retries and<br />returns the number of milliseconds to delay. |


**Return Value:**

Returns a function that accepts the next handler.



***

### log

Middleware that logs requests, responses, and errors using a message
formatter.

```php
public static log(\yxorP\inc\Psr\Log\LoggerInterface $logger, \yxorP\lib\proxy\MessageFormatter $formatter, string $logLevel = &#039;info&#039;): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\yxorP\inc\Psr\Log\LoggerInterface** | Logs messages. |
| `$formatter` | **\yxorP\lib\proxy\MessageFormatter** | Formatter used to create message strings. |
| `$logLevel` | **string** | Level at which to log requests. |


**Return Value:**

Returns a function that accepts the next handler.



***

### prepareBody

This middleware adds a default content-type if possible, a default
content-length or transfer-encoding header, and the expect header.

```php
public static prepareBody(): callable
```



* This method is **static**.







***

### mapRequest

Middleware that applies a map function to the request before passing to
the next handler.

```php
public static mapRequest(callable $fn): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** | Function that accepts a RequestInterface and returns<br />a RequestInterface. |




***

### mapResponse

Middleware that applies a map function to the resolved promise's
response.

```php
public static mapResponse(callable $fn): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fn` | **callable** | Function that accepts a ResponseInterface and<br />returns a ResponseInterface. |




***


***

