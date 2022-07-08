***

# Client





* Full name: `\yxorP\proxy\Client`
* This class implements:
[`\yxorP\proxy\ClientInterface`](./ClientInterface.md)



## Properties


### config



```php
private mixed $config
```






***

## Methods


### __construct



```php
public __construct(array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### configureDefaults



```php
private configureDefaults(array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### __call



```php
public __call(mixed $method, mixed $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |




***

### requestAsync



```php
public requestAsync(mixed $method, mixed $uri = &#039;&#039;, array $options = []): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$options` | **array** |  |




***

### prepareDefaults



```php
private prepareDefaults(array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### buildUri



```php
private buildUri(mixed $uri, array $config): \Psr\Http\Message\UriInterface|\yxorP\proxy\Psr7\Uri
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **mixed** |  |
| `$config` | **array** |  |




***

### invalidBody



```php
private invalidBody(): mixed
```











***

### transfer



```php
private transfer(\yxorP\psr\Http\Message\RequestInterface $request, array $options): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### applyOptions



```php
private applyOptions(\yxorP\psr\Http\Message\RequestInterface $request, array& $options): \yxorP\psr\Http\Message\RequestInterface|\yxorP\proxy\Psr7\ServerRequest|\yxorP\proxy\Psr7\Request
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### request



```php
public request(mixed $method, mixed $uri = &#039;&#039;, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$options` | **array** |  |




***

### send



```php
public send(\yxorP\psr\Http\Message\RequestInterface $request, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### sendAsync



```php
public sendAsync(\yxorP\psr\Http\Message\RequestInterface $request, array $options = []): \yxorP\proxy\Apromise\RejectedPromise|\yxorP\proxy\Apromise\FulfilledPromise|\yxorP\proxy\Apromise\Promise|\yxorP\proxy\Apromise\PromiseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### getConfig



```php
public getConfig(mixed $option = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
