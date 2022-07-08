***

# request





* Full name: `\yxorP\protocols\Http\request`



## Properties


### maxFileUploads



```php
public static int $maxFileUploads
```



* This property is **static**.


***

### _enableCache



```php
private static bool $_enableCache
```



* This property is **static**.


***

### connection



```php
public $connection
```






***

### session



```php
public $session
```






***

### properties



```php
public array $properties
```






***

### _buffer



```php
private $_buffer
```






***

### _data



```php
private $_data
```






***

## Methods


### __construct



```php
public __construct(mixed $buffer): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$buffer` | **mixed** |  |




***

### enableCache



```php
public static enableCache(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### createSessionId



```php
public static createSessionId(): string
```



* This method is **static**.







***

### get



```php
public get(mixed $name = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### queryString



```php
public queryString(): mixed
```











***

### uri



```php
public uri(): mixed
```











***

### post



```php
public post(mixed $name = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### header



```php
public header(mixed $name = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### rawHead



```php
public rawHead(): mixed
```











***

### rawBody



```php
public rawBody(): string
```











***

### file



```php
public file(mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### method



```php
public method(): mixed
```











***

### protocolVersion



```php
public protocolVersion(): mixed
```











***

### host



```php
public host(mixed $without_port = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$without_port` | **mixed** |  |




***

### path



```php
public path(): mixed
```











***

### sessionRegenerateId



```php
public sessionRegenerateId(mixed $delete_old_session = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delete_old_session` | **mixed** |  |




***

### session



```php
public session(): bool|\yxorP\protocols\Http\Session
```











***

### sessionId



```php
public sessionId(mixed $session_id = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** |  |




***

### cookie



```php
public cookie(mixed $name = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### rawBuffer



```php
public rawBuffer(): mixed
```











***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __set



```php
public __set(mixed $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***

### __isset



```php
public __isset(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __unset



```php
public __unset(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __toString



```php
public __toString(): mixed
```











***

### __destruct



```php
public __destruct(): mixed
```











***

### parseGet



```php
protected parseGet(): mixed
```











***

### parseHeadFirstLine



```php
protected parseHeadFirstLine(): mixed
```











***

### parsePost



```php
protected parsePost(): mixed
```











***

### parseHeaders



```php
protected parseHeaders(): mixed
```











***

### parseUploadFiles



```php
protected parseUploadFiles(mixed $http_post_boundary): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$http_post_boundary` | **mixed** |  |




***

### parseUploadFile



```php
protected parseUploadFile(mixed $boundary, mixed $section_start_offset): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boundary` | **mixed** |  |
| `$section_start_offset` | **mixed** |  |




***

### parseProtocolVersion



```php
protected parseProtocolVersion(): mixed
```











***

### setSidCookie



```php
protected setSidCookie(string $session_name, string $sid, array $cookie_params): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_name` | **string** |  |
| `$sid` | **string** |  |
| `$cookie_params` | **array** |  |




***


***

