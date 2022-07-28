***

# CurlHandler

HTTP handler that uses cURL easy handles as a transport layer.

When using the CurlHandler, custom curl options can be specified as an
associative array of curl option constants mapping to values in the
**curl** key of the "client" key of the request.

* Full name: `\yxorP\lib\proxy\Handler\CurlHandler`



## Properties


### factory



```php
private \yxorP\lib\proxy\Handler\CurlFactoryInterface $factory
```






***

## Methods


### __construct

Accepts an associative array of options:

```php
public __construct(array $options = []): mixed
```

- factory: Optional curl factory used to create cURL handles.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | Array of options to use with the handler |




***

### __invoke



```php
public __invoke(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

