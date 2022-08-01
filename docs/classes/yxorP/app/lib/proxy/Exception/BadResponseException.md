***

# badResponseException





* Full name: `\yxorP\app\lib\proxy\Exception\badResponseException`
* Parent class: [`\yxorP\app\lib\proxy\Exception\aRequestExceptionAa`](./aRequestExceptionAa.md)




## Methods


### __construct



```php
public __construct(mixed $message, \yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |




***


## Inherited methods


### __construct



```php
public __construct(mixed $message, \yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |




***

### wrapException



```php
public static wrapException(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \Exception $e): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$e` | **\Exception** |  |




***

### create



```php
public static create(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, \Exception $previous = null, array $ctx = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$previous` | **\Exception** |  |
| `$ctx` | **array** |  |




***

### obfuscateUri



```php
private static obfuscateUri(\yxorP\app\lib\Psr\Http\Message\UriInterface $uri): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\app\lib\Psr\Http\Message\UriInterface** |  |




***

### getResponseBodySummary



```php
public static getResponseBodySummary(\yxorP\app\lib\Psr\Http\Message\ResponseInterface $response): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |




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

