***

# MessageTrait





* Full name: `\yxorP\lib\proxy\Psr7\MessageTrait`



## Properties


### headers



```php
private $headers
```






***

### headerNames



```php
private $headerNames
```






***

### protocol



```php
private $protocol
```






***

### stream



```php
private $stream
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


