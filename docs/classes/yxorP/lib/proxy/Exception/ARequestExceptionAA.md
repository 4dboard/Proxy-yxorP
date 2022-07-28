***

# ARequestExceptionAA

HTTP Request exception



* Full name: `\yxorP\lib\proxy\Exception\ARequestExceptionAA`
* Parent class: [`\yxorP\lib\proxy\Exception\AATransferException`](./AATransferException.md)



## Properties


### request



```php
private \yxorP\inc\Psr\Http\Message\RequestInterface $request
```






***

### response



```php
private \yxorP\inc\Psr\Http\Message\ResponseInterface|null $response
```






***

### handlerContext



```php
private array $handlerContext
```






***

## Methods


### __construct



```php
public __construct(mixed $message, \yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |




***

### wrapException

Wrap non-RequestExceptions with a RequestException

```php
public static wrapException(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \Exception $e): \yxorP\lib\proxy\Exception\ARequestExceptionAA
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$e` | **\Exception** |  |




***

### create

Factory method to create a new exception with a normalized error message

```php
public static create(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $ctx = []): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** | Request |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** | Response received |
| `$previous` | **\Exception** | Previous exception |
| `$ctx` | **array** | Optional handler context. |




***

### obfuscateUri

Obfuscates URI if there is a username and a password present

```php
private static obfuscateUri(\yxorP\inc\Psr\Http\Message\UriInterface $uri): \yxorP\inc\Psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |




***

### getResponseBodySummary

Get a short summary of the response

```php
public static getResponseBodySummary(\yxorP\inc\Psr\Http\Message\ResponseInterface $response): string|null
```

Will return `null` if the response is not printable.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### getRequest

Get the request that caused the exception

```php
public getRequest(): \yxorP\inc\Psr\Http\Message\RequestInterface
```











***

### getResponse

Get the associated response

```php
public getResponse(): \yxorP\inc\Psr\Http\Message\ResponseInterface|null
```











***

### hasResponse

Check if a response was received

```php
public hasResponse(): bool
```











***

### getHandlerContext

Get contextual information about the error from the underlying handler.

```php
public getHandlerContext(): array
```

The contents of this array will vary depending on which handler you are
using. It may also be just an empty array. Relying on this data will
couple you to a specific handler, but can give more debug information
when needed.









***


***

