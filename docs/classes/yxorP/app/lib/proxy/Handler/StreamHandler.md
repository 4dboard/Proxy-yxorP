***

# StreamHandler





* Full name: `\yxorP\app\lib\proxy\Handler\StreamHandler`



## Properties


### lastHeaders



```php
private $lastHeaders
```






***

## Methods


### __invoke



```php
public __invoke(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### createResponse



```php
private createResponse(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options, mixed $stream, mixed $startTime): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$stream` | **mixed** |  |
| `$startTime` | **mixed** |  |




***

### checkDecode



```php
private checkDecode(array $options, array $headers, mixed $stream): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$headers` | **array** |  |
| `$stream` | **mixed** |  |




***

### createSink



```php
private createSink(\yxorP\app\lib\Psr\Http\Message\StreamInterface $stream, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\app\lib\Psr\Http\Message\StreamInterface** |  |
| `$options` | **array** |  |




***

### drain



```php
private drain(\yxorP\app\lib\Psr\Http\Message\StreamInterface $source, \yxorP\app\lib\Psr\Http\Message\StreamInterface $sink, mixed $contentLength): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\yxorP\app\lib\Psr\Http\Message\StreamInterface** |  |
| `$sink` | **\yxorP\app\lib\Psr\Http\Message\StreamInterface** |  |
| `$contentLength` | **mixed** |  |




***

### invokeStats



```php
private invokeStats(array $options, \yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed $startTime, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, mixed $error = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$startTime` | **mixed** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$error` | **mixed** |  |




***

### createStream



```php
private createStream(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultContext



```php
private getDefaultContext(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |




***

### resolveHost



```php
private resolveHost(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### createResource



```php
private createResource(callable $callback): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** |  |




***

### add_proxy



```php
private add_proxy(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_timeout



```php
private add_timeout(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_verify



```php
private add_verify(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_cert



```php
private add_cert(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_progress



```php
private add_progress(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### addNotification



```php
private addNotification(array& $params, callable $notify): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |
| `$notify` | **callable** |  |




***

### callArray



```php
private callArray(array $functions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **array** |  |




***

### add_debug



```php
private add_debug(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***


***

