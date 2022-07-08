***

# response





* Full name: `\yxorP\protocols\Http\response`



## Properties


### _mimeTypeMap



```php
private static $_mimeTypeMap
```



* This property is **static**.


***

### _phrases



```php
private static array $_phrases
```



* This property is **static**.


***

### file



```php
public $file
```






***

### _header



```php
private ?array $_header
```






***

### _status



```php
private string|array|object|null $_status
```






***

### _reason



```php
private $_reason
```






***

### _version



```php
private string $_version
```






***

### _body



```php
private ?string $_body
```






***

## Methods


### __construct



```php
public __construct(mixed $status = 200, mixed $headers = [], mixed $body = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$status` | **mixed** |  |
| `$headers` | **mixed** |  |
| `$body` | **mixed** |  |




***

### init



```php
public static init(): mixed
```



* This method is **static**.







***

### initMimeTypeMap



```php
public static initMimeTypeMap(): mixed
```



* This method is **static**.







***

### withHeader



```php
public withHeader(mixed $name, mixed $value): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***

### header



```php
public header(mixed $name, mixed $value): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***

### withHeaders



```php
public withHeaders(mixed $headers): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **mixed** |  |




***

### withoutHeader



```php
public withoutHeader(mixed $name): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getHeader



```php
public getHeader(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getHeaders



```php
public getHeaders(): ?array
```











***

### getStatusCode



```php
public getStatusCode(): mixed
```











***

### getReasonPhrase



```php
public getReasonPhrase(): mixed
```











***

### withProtocolVersion



```php
public withProtocolVersion(mixed $version): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **mixed** |  |




***

### rawBody



```php
public rawBody(): ?string
```











***

### withFile



```php
public withFile(mixed $file, mixed $offset, mixed $length): \yxorP\protocols\Http\response|static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$offset` | **mixed** |  |
| `$length` | **mixed** |  |




***

### withBody



```php
public withBody(mixed $body): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** |  |




***

### withStatus



```php
public withStatus(mixed $code, mixed $reason_phrase = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$reason_phrase` | **mixed** |  |




***

### cookie



```php
public cookie(mixed $name, mixed $value = &#039;&#039;, mixed $max_age = null, mixed $path = &#039;&#039;, mixed $domain = &#039;&#039;, mixed $secure = false, mixed $http_only = false, mixed $same_site = false): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |
| `$max_age` | **mixed** |  |
| `$path` | **mixed** |  |
| `$domain` | **mixed** |  |
| `$secure` | **mixed** |  |
| `$http_only` | **mixed** |  |
| `$same_site` | **mixed** |  |




***

### __toString



```php
public __toString(): mixed
```











***

### createHeadForFile



```php
protected createHeadForFile(mixed $file_info): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file_info` | **mixed** |  |




***


***

