***

# StreamHandler

HTTP handler that uses PHP's HTTP stream wrapper.



* Full name: `\GuzzleHttp\Handler\StreamHandler`



## Properties


### lastHeaders



```php
private array $lastHeaders
```






***

## Methods


### __invoke

Sends an HTTP request.

```php
public __invoke(\Psr\Http\Message\RequestInterface $request, array $options): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** | Request to send. |
| `$options` | **array** | Request transfer options. |




***

### invokeStats



```php
private invokeStats(array $options, \Psr\Http\Message\RequestInterface $request, ?float $startTime, \Psr\Http\Message\ResponseInterface $response = null, \Throwable $error = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$startTime` | **?float** |  |
| `$response` | **\Psr\Http\Message\ResponseInterface** |  |
| `$error` | **\Throwable** |  |




***

### createResponse



```php
private createResponse(\Psr\Http\Message\RequestInterface $request, array $options, resource $stream, ?float $startTime): \GuzzleHttp\Promise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$stream` | **resource** |  |
| `$startTime` | **?float** |  |




***

### createSink



```php
private createSink(\Psr\Http\Message\StreamInterface $stream, array $options): \Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Psr\Http\Message\StreamInterface** |  |
| `$options` | **array** |  |




***

### checkDecode



```php
private checkDecode(array $options, array $headers, resource $stream): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$headers` | **array** |  |
| `$stream` | **resource** |  |




***

### drain

Drains the source stream into the "sink" client option.

```php
private drain(\Psr\Http\Message\StreamInterface $source, \Psr\Http\Message\StreamInterface $sink, string $contentLength): \Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Psr\Http\Message\StreamInterface** |  |
| `$sink` | **\Psr\Http\Message\StreamInterface** |  |
| `$contentLength` | **string** | Header specifying the amount of<br />data to read. |




***

### createResource

Create a resource and check to ensure it was created successfully

```php
private createResource(callable $callback): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | Callable that returns stream resource |




***

### createStream



```php
private createStream(\Psr\Http\Message\RequestInterface $request, array $options): resource
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### resolveHost



```php
private resolveHost(\Psr\Http\Message\RequestInterface $request, array $options): \Psr\Http\Message\UriInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultContext



```php
private getDefaultContext(\Psr\Http\Message\RequestInterface $request): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |




***

### add_proxy



```php
private add_proxy(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### parse_proxy

Parses the given proxy URL to make it compatible with the format PHP's stream context expects.

```php
private parse_proxy(string $url): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |




***

### add_timeout



```php
private add_timeout(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### add_verify



```php
private add_verify(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### add_cert



```php
private add_cert(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### add_progress



```php
private add_progress(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### add_debug



```php
private add_debug(\Psr\Http\Message\RequestInterface $request, array& $options, mixed $value, array& $params): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |
| `$value` | **mixed** | as passed via Request transfer options. |
| `$params` | **array** |  |




***

### addNotification



```php
private static addNotification(array& $params, callable $notify): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |
| `$notify` | **callable** |  |




***

### callArray



```php
private static callArray(array $functions): callable
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functions` | **array** |  |




***


***

