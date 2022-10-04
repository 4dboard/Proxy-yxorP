***

# ArequestExceptionAA





* Full name: `\yxorP\proxy\Exception\ArequestExceptionAA`
* Parent class: [`\yxorP\proxy\Exception\AATransferException`](./AATransferException.md)



## Properties


### request



```php
private \yxorP\psr\Http\Message\RequestInterface $request
```






***

### response



```php
private ?\yxorP\psr\Http\Message\ResponseInterface $response
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
public __construct(mixed $message, \yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |




***

### wrapException



```php
public static wrapException(\yxorP\psr\Http\Message\RequestInterface $request, \Exception $e): \yxorP\proxy\Exception\ArequestExceptionAA|\Exception
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$e` | **\Exception** |  |




***

### create



```php
public static create(\yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $ctx = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$ctx` | **array** |  |




***

### obfuscateUri



```php
private static obfuscateUri(\yxorP\psr\Http\Message\UriInterface $uri): \yxorP\psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\psr\Http\Message\UriInterface** |  |




***

### getResponseBodySummary



```php
public static getResponseBodySummary(\yxorP\psr\Http\Message\ResponseInterface $response): ?string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |




***

### getRequest



```php
public getRequest(): \RequestInterface
```











***

### getResponse



```php
public getResponse(): mixed
```











***

### hasResponse



```php
public hasResponse(): bool
```











***

### getHandlerContext



```php
public getHandlerContext(): array
```











***


***

