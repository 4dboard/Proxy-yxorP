***

# Pool

Sends an iterator of requests concurrently using a capped pool size.

The pool will read from an iterator until it is cancelled or until the
iterator is consumed. When a request is yielded, the request is sent after
applying the "request_options" request options (if provided in the ctor).

When a function is yielded by the iterator, the function is provided the
"request_options" array that should be merged on top of any existing
options, and the function MUST then return a wait-able promise.

* Full name: `\GuzzleHttp\Pool`
* This class implements:
[`\GuzzleHttp\Promise\PromisorInterface`](./Promise/PromisorInterface.md)



## Properties


### each



```php
private \GuzzleHttp\Promise\EachPromise $each
```






***

## Methods


### __construct



```php
public __construct(\GuzzleHttp\ClientInterface $client, array|\Iterator $requests, array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\GuzzleHttp\ClientInterface** | Client used to send the requests. |
| `$requests` | **array&#124;\Iterator** | Requests or functions that return<br />requests to send concurrently. |
| `$config` | **array** | Associative array of options<br />- concurrency: (int) Maximum number of requests to send concurrently<br />- options: Array of request options to apply to each request.<br />- fulfilled: (callable) Function to invoke when a request completes.<br />- rejected: (callable) Function to invoke when a request is rejected. |




***

### promise

Get promise

```php
public promise(): \GuzzleHttp\Promise\PromiseInterface
```











***

### batch

Sends multiple requests concurrently and returns an array of responses
and exceptions that uses the same ordering as the provided requests.

```php
public static batch(\GuzzleHttp\ClientInterface $client, array|\Iterator $requests, array $options = []): array
```

IMPORTANT: This method keeps every request and response in memory, and
as such, is NOT recommended when sending a large number or an
indeterminate number of requests concurrently.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\GuzzleHttp\ClientInterface** | Client used to send the requests |
| `$requests` | **array&#124;\Iterator** | Requests to send concurrently. |
| `$options` | **array** | Passes through the options available in<br />{@see} |


**Return Value:**

Returns an array containing the response or an exception
in the same order that the requests were sent.



***

### cmpCallback

Execute callback(s)

```php
private static cmpCallback(array& $options, string $name, array& $results): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$name` | **string** |  |
| `$results` | **array** |  |




***


***

