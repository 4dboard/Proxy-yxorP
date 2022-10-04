***

# CurlFactory





* Full name: `\yxorP\proxy\Handler\CurlFactory`
* This class implements:
[`\yxorP\proxy\Handler\CurlFactoryInterface`](./CurlFactoryInterface.md)


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
private $maxHandles
```






***

## Methods


### __construct



```php
public __construct(mixed $maxHandles): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maxHandles` | **mixed** |  |




***

### finish



```php
public static finish(callable $handler, \yxorP\proxy\Handler\EasyHandle $easy, \yxorP\proxy\Handler\CurlFactoryInterface $factory): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$factory` | **\yxorP\proxy\Handler\CurlFactoryInterface** |  |




***

### invokeStats



```php
private static invokeStats(\yxorP\proxy\Handler\EasyHandle $easy): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |




***

### finishError



```php
private static finishError(callable $handler, \yxorP\proxy\Handler\EasyHandle $easy, \yxorP\proxy\Handler\CurlFactoryInterface $factory): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$factory` | **\yxorP\proxy\Handler\CurlFactoryInterface** |  |




***

### release



```php
public release(\yxorP\proxy\Handler\EasyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |




***

### retryFailedRewind



```php
private static retryFailedRewind(callable $handler, \yxorP\proxy\Handler\EasyHandle $easy, array $ctx): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### createRejection



```php
private static createRejection(\yxorP\proxy\Handler\EasyHandle $easy, array $ctx): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$ctx` | **array** |  |




***

### create



```php
public create(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Handler\EasyHandle
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultConf



```php
private getDefaultConf(\yxorP\proxy\Handler\EasyHandle $easy): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |




***

### applyMethod



```php
private applyMethod(\yxorP\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### applyBody



```php
private applyBody(\yxorP\psr\Http\Message\RequestInterface $request, array $options, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$conf` | **array** |  |




***

### removeHeader



```php
private removeHeader(mixed $name, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$options` | **array** |  |




***

### applyHandlerOptions



```php
private applyHandlerOptions(\yxorP\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### applyHeaders



```php
private applyHeaders(\yxorP\proxy\Handler\EasyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |
| `$conf` | **array** |  |




***

### createHeaderFn



```php
private createHeaderFn(\yxorP\proxy\Handler\EasyHandle $easy): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\proxy\Handler\EasyHandle** |  |




***


***

