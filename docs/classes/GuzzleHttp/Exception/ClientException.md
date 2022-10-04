***

# ClientException

Exception when a client error is encountered (4xx codes)



* Full name: `\GuzzleHttp\Exception\ClientException`
* Parent class: [`\GuzzleHttp\Exception\BadResponseException`](./BadResponseException.md)






## Inherited methods


### __construct



```php
public __construct(string $message, \Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response = null, \Throwable $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Throwable** |  |
| `$handlerContext` | **array** |  |




***

### hasResponse

Check if a response was received

```php
public hasResponse(): bool
```











***

### getResponse

Get the associated response

```php
public getResponse(): ?\Psr\Http\Message\ResponseInterface
```











***

### wrapException

Wrap non-RequestExceptions with a RequestException

```php
public static wrapException(\Psr\Http\Message\RequestInterface $request, \Throwable $e): \GuzzleHttp\Exception\RequestException
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$e` | **\Throwable** |  |




***

### create

Factory method to create a new exception with a normalized error message

```php
public static create(\Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response = null, \Throwable|null $previous = null, array $handlerContext = [], \GuzzleHttp\BodySummarizerInterface|null $bodySummarizer = null): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request sent |
| `$response` | **\Psr\Http\Message\ResponseInterface** | Response received |
| `$previous` | **\Throwable&#124;null** | Previous exception |
| `$handlerContext` | **array** | Optional handler context |
| `$bodySummarizer` | **\GuzzleHttp\BodySummarizerInterface&#124;null** | Optional body summarizer |




***

### obfuscateUri

Obfuscates URI if there is a username and a password present

```php
private static obfuscateUri(\Psr\Http\Message\UriInterface $uri): \Psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\Psr\Http\Message\UriInterface** |  |




***

### getRequest

Get the request that caused the exception

```php
public getRequest(): \Psr\Http\Message\RequestInterface
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

