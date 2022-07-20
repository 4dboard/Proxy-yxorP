***

# request





* Full name: `\yxorP\app\lib\http\request`



## Properties


### params



```php
public \yxorP\app\lib\http\ParamStore $params
```






***

### headers



```php
public \yxorP\app\lib\http\ParamStore $headers
```






***

### post



```php
public \yxorP\app\lib\http\ParamStore $post
```






***

### get



```php
public \yxorP\app\lib\http\ParamStore $get
```






***

### files



```php
public \yxorP\app\lib\http\ParamStore $files
```






***

### method



```php
private string $method
```






***

### protocol_version



```php
private string $protocol_version
```






***

### body



```php
private $body
```






***

### prepared_body



```php
private $prepared_body
```






***

## Methods


### __construct



```php
public __construct(mixed $method, mixed $url, mixed $body = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$url` | **mixed** |  |
| `$body` | **mixed** |  |




***

### setUrl



```php
public setUrl(mixed $url): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |




***

### parseQuery



```php
public static parseQuery(mixed $query): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **mixed** |  |




***

### setBody



```php
public setBody(mixed $body, mixed $content_type = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** |  |
| `$content_type` | **mixed** |  |




***

### prepare



```php
public prepare(): void
```











***

### generateBoundary



```php
private static generateBoundary(): string
```



* This method is **static**.







***

### buildPostBody



```php
public static buildPostBody(mixed $fields, mixed $files, mixed $boundary = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fields` | **mixed** |  |
| `$files` | **mixed** |  |
| `$boundary` | **mixed** |  |




***

### detectContentType



```php
private detectContentType(mixed $data): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### createFromGlobals



```php
public static createFromGlobals(): \yxorP\app\lib\http\request
```



* This method is **static**.







***

### getMethod



```php
public getMethod(): string
```











***

### setMethod



```php
public setMethod(mixed $method): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |




***

### getUrl



```php
public getUrl(): string
```











***

### getProtocolVersion



```php
public getProtocolVersion(): string
```











***

### getRawHeaders



```php
public getRawHeaders(): string
```











***

### getRawBody



```php
public getRawBody(): string
```











***

### getUri



```php
public getUri(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
