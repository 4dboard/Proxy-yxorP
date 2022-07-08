***

# Response





* Full name: `\yxorP\proxy\Psr7\Response`
* This class implements:
[`\yxorP\psr\Http\Message\ResponseInterface`](../../psr/Http/Message/ResponseInterface.md)



## Properties


### phrases



```php
private static array $phrases
```



* This property is **static**.


***

### reasonPhrase



```php
private string $reasonPhrase
```






***

### statusCode



```php
private int $statusCode
```






***

## Methods


### __construct



```php
public __construct(mixed $status = 200, array $headers = [], mixed $body = null, mixed $version = &#039;1.1&#039;, mixed $reason = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |
| `$headers` | **array** |  |
| `$body` | **mixed** |  |
| `$version` | **mixed** |  |
| `$reason` | **mixed** |  |




***

### assertStatusCodeIsInteger



```php
private assertStatusCodeIsInteger(mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statusCode` | **mixed** |  |




***

### assertStatusCodeRange



```php
private assertStatusCodeRange(mixed $statusCode): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$statusCode` | **mixed** |  |




***

### getStatusCode

Gets the response status code.

```php
public getStatusCode(): int
```

The status code is a 3-digit integer result code of the server's attempt
to understand and satisfy the request.







**Return Value:**

Status code.



***

### getReasonPhrase

Gets the response reason phrase associated with the status code.

```php
public getReasonPhrase(): string
```

Because a reason phrase is not a required element in a response
status line, the reason phrase value MAY be null. Implementations MAY
choose to return the default RFC 7231 recommended reason phrase (or those
listed in the IANA HTTP Status Code Registry) for the response's
status code.







**Return Value:**

Reason phrase; must return an empty string if none present.



***

### withStatus

Return an instance with the specified status code and, optionally, reason phrase.

```php
public withStatus(int $code, string $reasonPhrase = &#039;&#039;): static
```

If no reason phrase is specified, implementations MAY choose to default
to the RFC 7231 or IANA recommended reason phrase for the response's
status code.

This method MUST be implemented in such a way as to retain the
immutability of the message, and MUST return an instance that has the
updated status and reason phrase.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **int** | The 3-digit integer result code to set. |
| `$reasonPhrase` | **string** | The reason phrase to use with the<br />provided status code; if none is provided, implementations MAY<br />use the defaults as suggested in the HTTP specification. |




***


## Inherited methods


### getProtocolVersion



```php
public getProtocolVersion(): string
```











***

### withProtocolVersion



```php
public withProtocolVersion(string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### getHeaders



```php
public getHeaders(): array
```











***

### hasHeader



```php
public hasHeader(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getHeaderLine



```php
public getHeaderLine(string $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getHeader



```php
public getHeader(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### withHeader



```php
public withHeader(string $name, array|string $value): \Request|\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **array&#124;string** |  |




***

### assertHeader



```php
private assertHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### normalizeHeaderValue



```php
private normalizeHeaderValue(mixed $value): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### trimHeaderValues



```php
private trimHeaderValues(array $values): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### withAddedHeader



```php
public withAddedHeader(string $name, array|string $value): \Request|\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **array&#124;string** |  |




***

### withoutHeader



```php
public withoutHeader(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getBody



```php
public getBody(): mixed
```











***

### withBody



```php
public withBody(\yxorP\psr\Http\Message\StreamInterface $body): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **\yxorP\psr\Http\Message\StreamInterface** |  |




***

### setHeaders



```php
private setHeaders(array $headers): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
