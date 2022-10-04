***

# Response





* Full name: `\yxorP\lib\proxy\Psr7\Response`
* This class implements:
[`\yxorP\inc\Psr\Http\Message\ResponseInterface`](../../../inc/Psr/Http/Message/ResponseInterface.md)



## Properties


### phrases



```php
private static $phrases
```



* This property is **static**.


***

### reasonPhrase



```php
private $reasonPhrase
```






***

### statusCode



```php
private $statusCode
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
public withStatus(mixed $code, mixed $reasonPhrase = &#039;&#039;): static
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
| `$code` | **mixed** | The 3-digit integer result code to set. |
| `$reasonPhrase` | **mixed** | The reason phrase to use with the<br />provided status code; if none is provided, implementations MAY<br />use the defaults as suggested in the HTTP specification. |




***


## Inherited methods


### getProtocolVersion



```php
public getProtocolVersion(): mixed
```











***

### withProtocolVersion



```php
public withProtocolVersion(mixed $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### getHeaders



```php
public getHeaders(): mixed
```











***

### hasHeader



```php
public hasHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getHeaderLine



```php
public getHeaderLine(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getHeader



```php
public getHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### withHeader



```php
public withHeader(mixed $header, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |




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
private normalizeHeaderValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### trimHeaderValues



```php
private trimHeaderValues(array $values): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |




***

### withAddedHeader



```php
public withAddedHeader(mixed $header, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |
| `$value` | **mixed** |  |




***

### withoutHeader



```php
public withoutHeader(mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **mixed** |  |




***

### getBody



```php
public getBody(): mixed
```











***

### withBody



```php
public withBody(\yxorP\inc\Psr\Http\Message\StreamInterface $body): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **\yxorP\inc\Psr\Http\Message\StreamInterface** |  |




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

