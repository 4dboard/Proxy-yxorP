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

The constructor of the class.

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

### parseQuery

Parsing a query string into an array.

```php
public static parseQuery(mixed $query): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **mixed** |  |




***

### buildPostBody

Generating a boundary for the multipart/form-data request.

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

### createFromGlobals

Detecting the content type of the request.

```php
public static createFromGlobals(): \yxorP\app\lib\http\request
```



* This method is **static**.







***

### generateBoundary

Preparing the body of the request.

```php
private static generateBoundary(): string
```



* This method is **static**.







***

### setUrl

Setting the URL of the request.

```php
public setUrl(mixed $url): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |




***

### setBody

A method that is called by the wrapper class.

```php
public setBody(mixed $body, mixed $content_type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** |  |
| `$content_type` | **mixed** |  |




***

### prepare

Setting the body of the request.

```php
public prepare(): void
```











***

### getMethod

A getter method for the `$method` property.

```php
public getMethod(): string
```











***

### setMethod

Setting the method of the request.

```php
public setMethod(mixed $method): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |




***

### getUrl

A getter method for the `$url` property.

```php
public getUrl(): string
```











***

### getProtocolVersion

A getter method for the `$protocol_version` property.

```php
public getProtocolVersion(): string
```











***

### getRawHeaders

Getting the raw headers of the request.

```php
public getRawHeaders(): string
```











***

### getRawBody

Returning the prepared body of the request.

```php
public getRawBody(): string
```











***

### getUri

An alias for `public function getUrl()`.

```php
public getUri(): mixed
```











***

### detectContentType

Building the body of the request.

```php
private detectContentType(mixed $data): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***


***

