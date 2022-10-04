***

# CurlHandler

HTTP handler that uses cURL easy handles as a transport layer.

When using the CurlHandler, custom curl options can be specified as an
associative array of curl option constants mapping to values in the
**curl** key of the "client" key of the request.

* Full name: `\GuzzleHttp\Handler\CurlHandler`



## Properties


### factory



```php
private \GuzzleHttp\Handler\CurlFactoryInterface $factory
```






***

## Methods


### __construct

Accepts an associative array of options:

```php
public __construct(array $options = []): mixed
```

- handle_factory: Optional curl factory used to create cURL handles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### __invoke



```php
public __invoke(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

