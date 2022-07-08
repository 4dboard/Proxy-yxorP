***

# StreamHandler





* Full name: `\yxorP\proxy\Handler\StreamHandler`



## Properties


### lastHeaders



```php
private array $lastHeaders
```






***

## Methods


### __invoke



```php
public __invoke(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### createResponse



```php
private createResponse(\yxorP\psr\Http\Message\RequestInterface $request, array $options, mixed $stream, mixed $startTime): \yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$stream` | **mixed** |  |
| `$startTime` | **mixed** |  |




***

### checkDecode



```php
private checkDecode(array $options, array $headers, mixed $stream): array
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
private createSink(\yxorP\psr\Http\Message\StreamInterface $stream, array $options): \yxorP\proxy\Psr7\PumpStream|\yxorP\proxy\Psr7\Stream|\yxorP\proxy\Psr7\LazyOpenStream|\yxorP\psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$options` | **array** |  |




***

### drain



```php
private drain(\yxorP\psr\Http\Message\StreamInterface $source, \yxorP\psr\Http\Message\StreamInterface $sink, mixed $contentLength): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$sink` | **\yxorP\psr\Http\Message\StreamInterface** |  |
| `$contentLength` | **mixed** |  |




***

### invokeStats



```php
private invokeStats(array $options, \yxorP\psr\Http\Message\RequestInterface $request, mixed $startTime, \yxorP\psr\Http\Message\ResponseInterface $response = null, mixed $error = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$startTime` | **mixed** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$error` | **mixed** |  |




***

### createStream



```php
private createStream(\yxorP\psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultContext



```php
private getDefaultContext(\yxorP\psr\Http\Message\RequestInterface $request): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |




***

### resolveHost



```php
private resolveHost(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \Psr\Http\Message\UriInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
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
private add_proxy(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_timeout



```php
private add_timeout(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_verify



```php
private add_verify(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_cert



```php
private add_cert(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_progress



```php
private add_progress(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
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
private callArray(array $functions): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **array** |  |




***

### add_debug



```php
private add_debug(\yxorP\psr\Http\Message\RequestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
