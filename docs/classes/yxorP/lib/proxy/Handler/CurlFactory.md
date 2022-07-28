***

# CurlFactory





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
private $handles
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
public static finish(callable $handler, \yxorP\lib\proxy\Handler\EasyHandle $easy, \yxorP\lib\proxy\Handler\CurlFactoryInterface $factory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |
| `$factory` | **\yxorP\lib\proxy\Handler\CurlFactoryInterface** |  |




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



```php
public release(\yxorP\lib\proxy\Handler\EasyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\Handler\EasyHandle** |  |




***

### retryFailedRewind



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



```php
public create(\yxorP\inc\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




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

