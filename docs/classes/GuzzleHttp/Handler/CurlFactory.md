***

# CurlFactory

Creates curl resources from a request



* Full name: `\GuzzleHttp\Handler\CurlFactory`
* This class implements:
[`\GuzzleHttp\Handler\CurlFactoryInterface`](./CurlFactoryInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CURL_VERSION_STR`|public| |&#039;curl_version&#039;|
|`LOW_CURL_VERSION_NUMBER`|public| |&#039;7.21.2&#039;|

## Properties


### handles



```php
private resource[]|\CurlHandle[] $handles
```






***

### maxHandles



```php
private int $maxHandles
```






***

## Methods


### __construct



```php
public __construct(int $maxHandles): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxHandles` | **int** | Maximum number of idle handles. |




***

### create

Creates a cURL handle resource.

```php
public create(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Handler\EasyHandle
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request |
| `$options` | **array** | Transfer options |




***

### release

Release an easy handle, allowing it to be reused or closed.

```php
public release(\GuzzleHttp\Handler\EasyHandle $easy): void
```

This function must call unset on the easy handle's "handle" property.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |




***

### finish

Completes a cURL transaction, either returning a response promise or a
rejected promise.

```php
public static finish(callable $handler, \GuzzleHttp\Handler\EasyHandle $easy, \GuzzleHttp\Handler\CurlFactoryInterface $factory): \GuzzleHttp\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$factory` | **\GuzzleHttp\Handler\CurlFactoryInterface** | Dictates how the handle is released |




***

### invokeStats



```php
private static invokeStats(\GuzzleHttp\Handler\EasyHandle $easy): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |




***

### finishError



```php
private static finishError(callable $handler, \GuzzleHttp\Handler\EasyHandle $easy, \GuzzleHttp\Handler\CurlFactoryInterface $factory): \GuzzleHttp\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$factory` | **\GuzzleHttp\Handler\CurlFactoryInterface** |  |




***

### createRejection



```php
private static createRejection(\GuzzleHttp\Handler\EasyHandle $easy, array $ctx): \GuzzleHttp\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### getDefaultConf



```php
private getDefaultConf(\GuzzleHttp\Handler\EasyHandle $easy): array&lt;int|string,mixed&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |




***

### applyMethod



```php
private applyMethod(\GuzzleHttp\Handler\EasyHandle $easy, array& $conf): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### applyBody



```php
private applyBody(\Psr\Http\Message\RequestInterface $request, array $options, array& $conf): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$conf` | **array** |  |




***

### applyHeaders



```php
private applyHeaders(\GuzzleHttp\Handler\EasyHandle $easy, array& $conf): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### removeHeader

Remove a header from the options array.

```php
private removeHeader(string $name, array& $options): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Case-insensitive header to remove |
| `$options` | **array** | Array of options to modify |




***

### applyHandlerOptions



```php
private applyHandlerOptions(\GuzzleHttp\Handler\EasyHandle $easy, array& $conf): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### retryFailedRewind

This function ensures that a response was set on a transaction. If one
was not set, then the request is retried if possible. This error
typically means you are sending a payload, curl encountered a
"Connection died, retrying a fresh connect" error, tried to rewind the
stream, and then encountered a "necessary data rewind wasn't possible"
error, causing the request to be sent through curl_multi_info_read()
without an error status.

```php
private static retryFailedRewind(callable $handler, \GuzzleHttp\Handler\EasyHandle $easy, array $ctx): \GuzzleHttp\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### createHeaderFn



```php
private createHeaderFn(\GuzzleHttp\Handler\EasyHandle $easy): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\GuzzleHttp\Handler\EasyHandle** |  |




***


***

