***

# streamHandler





* Full name: `\yxorP\lib\proxy\handler\streamHandler`



## Properties


### lastHeaders



```php
private $lastHeaders
```






***

## Methods


### __invoke



```php
public __invoke(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### createResponse



```php
private createResponse(\yxorP\lib\psr\http\message\requestInterface $request, array $options, mixed $stream, mixed $startTime): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
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
private createSink(\yxorP\lib\psr\http\message\streamInterface $stream, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\yxorP\lib\psr\http\message\streamInterface** |  |
| `$options` | **array** |  |




***

### drain



```php
private drain(\yxorP\lib\psr\http\message\streamInterface $source, \yxorP\lib\psr\http\message\streamInterface $sink, mixed $contentLength): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\yxorP\lib\psr\http\message\streamInterface** |  |
| `$sink` | **\yxorP\lib\psr\http\message\streamInterface** |  |
| `$contentLength` | **mixed** |  |




***

### invokeStats



```php
private invokeStats(array $options, \yxorP\lib\psr\http\message\requestInterface $request, mixed $startTime, \yxorP\lib\psr\http\message\responseInterface $response = null, mixed $error = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$startTime` | **mixed** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |
| `$error` | **mixed** |  |




***

### createStream



```php
private createStream(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **array** |  |




***

### getDefaultContext



```php
private getDefaultContext(\yxorP\lib\psr\http\message\requestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |




***

### resolveHost



```php
private resolveHost(\yxorP\lib\psr\http\message\requestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
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
private add_proxy(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_timeout



```php
private add_timeout(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_verify



```php
private add_verify(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_cert



```php
private add_cert(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***

### add_progress



```php
private add_progress(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
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
private add_debug(\yxorP\lib\psr\http\message\requestInterface $request, mixed& $options, mixed $value, mixed& $params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$options` | **mixed** |  |
| `$value` | **mixed** |  |
| `$params` | **mixed** |  |




***


***

