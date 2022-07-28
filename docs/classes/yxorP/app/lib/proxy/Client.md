***

# Client





* Full name: `\yxorP\app\lib\proxy\Client`
* This class implements:
[`\yxorP\app\lib\proxy\ClientInterface`](./ClientInterface.md)



## Properties


### config



```php
private $config
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
public requestAsync(mixed $method, mixed $uri = &#039;&#039;, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
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
public send(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### sendAsync



```php
public sendAsync(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
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

### configureDefaults



```php
private configureDefaults(array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




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
private buildUri(mixed $uri, array $config): mixed
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
private transfer(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### applyOptions



```php
private applyOptions(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array& $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***


***

