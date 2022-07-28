***

# CurlFactory

Creates curl resources from a request



* Full name: `\yxorP\lib\proxy\Handler\CurlFactory`
* This class implements:
[`\yxorP\lib\proxy\Handler\CurlFactoryInterface`](./CurlFactoryInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CURL_VERSION_STR`|public| |&#039;curl_version&#039;|
|`LOW_CURL_VERSION_NUMBER`|public| |&#039;7.21.2&#039;|

## Properties


### handles



```php
private array $handles
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

### finish

Completes a cURL transaction, either returning a response promise or a
rejected promise.

```php
public static finish(callable $handler, \yxorP\lib\proxy\Handler\EasyHandle $easy, \yxorP\lib\proxy\Handler\CurlFactoryInterface $factory): \yxorP\lib\proxy\Promise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$factory` | **\yxorP\lib\proxy\Handler\CurlFactoryInterface** | Dictates how the handle is released |




***

### invokeStats



```php
private static invokeStats(\yxorP\lib\proxy\Handler\EasyHandle $easy): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |




***

### finishError



```php
private static finishError(callable $handler, \yxorP\lib\proxy\Handler\EasyHandle $easy, \yxorP\lib\proxy\Handler\CurlFactoryInterface $factory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$factory` | **\yxorP\lib\proxy\Handler\CurlFactoryInterface** |  |




***

### release

Release an easy handle, allowing it to be reused or closed.

```php
public release(\yxorP\lib\proxy\Handler\EasyHandle $easy): mixed
```

This function must call unset on the easy handle's "handle" property.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |




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
private static retryFailedRewind(callable $handler, \yxorP\lib\proxy\Handler\EasyHandle $easy, array $ctx): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### createRejection



```php
private static createRejection(\yxorP\lib\proxy\Handler\EasyHandle $easy, array $ctx): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### create

Creates a cURL handle resource.

```php
public create(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): \yxorP\lib\proxy\Handler\EasyHandle
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** | Request |
| `$options` | **array** | Transfer options |




***

### getDefaultConf



```php
private getDefaultConf(\yxorP\lib\proxy\Handler\EasyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |




***

### applyMethod



```php
private applyMethod(\yxorP\lib\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### applyBody



```php
private applyBody(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$conf` | **array** |  |




***

### removeHeader

Remove a header from the options array.

```php
private removeHeader(string $name, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Case-insensitive header to remove |
| `$options` | **array** | Array of options to modify |




***

### applyHandlerOptions



```php
private applyHandlerOptions(\yxorP\lib\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### applyHeaders



```php
private applyHeaders(\yxorP\lib\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### createHeaderFn



```php
private createHeaderFn(\yxorP\lib\proxy\Handler\EasyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |




***


***

