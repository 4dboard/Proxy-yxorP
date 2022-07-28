***

# MessageTrait

Trait implementing functionality common to requests and responses.



* Full name: `\yxorP\lib\proxy\Psr7\MessageTrait`



## Properties


### headers



```php
private array $headers
```






***

### headerNames



```php
private array $headerNames
```






***

### protocol



```php
private string $protocol
```






***

### stream



```php
private \yxorP\inc\Psr\Http\Message\StreamInterface $stream
```






***

## Methods


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

### getHeader



```php
public getHeader(mixed $header): mixed
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

Trims whitespace from the header values.

```php
private trimHeaderValues(string[] $values): string[]
```

Spaces and tabs ought to be excluded by parsers when extracting the field value from a header field.

header-field = field-name ":" OWS field-value OWS
OWS          = *( SP / HTAB )






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **string[]** | Header values |


**Return Value:**

Trimmed header values


**See Also:**

* https://tools.ietf.org/html/rfc7230#section-3.2.4 - 

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

***


