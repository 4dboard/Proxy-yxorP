***

# curlFactory





* Full name: `\yxorP\lib\proxy\handler\curlFactory`
* This class implements:
[`\yxorP\lib\proxy\handler\curlFactoryInterface`](./curlFactoryInterface.md)


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
public static finish(callable $handler, \yxorP\lib\proxy\handler\easyHandle $easy, \yxorP\lib\proxy\handler\curlFactoryInterface $factory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$factory` | **\yxorP\lib\proxy\handler\curlFactoryInterface** |  |




***

### invokeStats



```php
private static invokeStats(\yxorP\lib\proxy\handler\easyHandle $easy): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |




***

### finishError



```php
private static finishError(callable $handler, \yxorP\lib\proxy\handler\easyHandle $easy, \yxorP\lib\proxy\handler\curlFactoryInterface $factory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$factory` | **\yxorP\lib\proxy\handler\curlFactoryInterface** |  |




***

### release



```php
public release(\yxorP\lib\proxy\handler\easyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |




***

### retryFailedRewind



```php
private static retryFailedRewind(callable $handler, \yxorP\lib\proxy\handler\easyHandle $easy, array $ctx): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$ctx` | **array** |  |




***

### createRejection



```php
private static createRejection(\yxorP\lib\proxy\handler\easyHandle $easy, array $ctx): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$ctx` | **array** |  |




***

### create



```php
public create(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultConf



```php
private getDefaultConf(\yxorP\lib\proxy\handler\easyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |




***

### applyMethod



```php
private applyMethod(\yxorP\lib\proxy\handler\easyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$conf` | **array** |  |




***

### applyBody



```php
private applyBody(\yxorP\lib\psr\http\message\requestInterface $request, array $options, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
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
private applyHandlerOptions(\yxorP\lib\proxy\handler\easyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$conf` | **array** |  |




***

### applyHeaders



```php
private applyHeaders(\yxorP\lib\proxy\handler\easyHandle $easy, array& $conf): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |
| `$conf` | **array** |  |




***

### createHeaderFn



```php
private createHeaderFn(\yxorP\lib\proxy\handler\easyHandle $easy): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$easy` | **\yxorP\lib\proxy\handler\easyHandle** |  |




***


***

