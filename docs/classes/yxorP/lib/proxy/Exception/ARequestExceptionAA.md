***

# ARequestExceptionAA





* Full name: `\yxorP\lib\proxy\Exception\ARequestExceptionAA`
* Parent class: [`\yxorP\lib\proxy\Exception\AATransferException`](./AATransferException.md)



## Properties


### request



```php
private $request
```






***

### response



```php
private $response
```






***

### handlerContext



```php
private $handlerContext
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



```php
public static wrapException(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \Exception $e): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$e` | **\Exception** |  |




***

### create



```php
public static create(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $ctx = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$ctx` | **array** |  |




***

### obfuscateUri



```php
private static obfuscateUri(\yxorP\inc\Psr\Http\Message\UriInterface $uri): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |




***

### getResponseBodySummary



```php
public static getResponseBodySummary(\yxorP\inc\Psr\Http\Message\ResponseInterface $response): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### getRequest



```php
public getRequest(): mixed
```











***

### getResponse



```php
public getResponse(): mixed
```











***

### hasResponse



```php
public hasResponse(): mixed
```











***

### getHandlerContext



```php
public getHandlerContext(): mixed
```











***


***

