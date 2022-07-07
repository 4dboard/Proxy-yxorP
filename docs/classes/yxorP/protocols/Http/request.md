***

# request





* Full name: `\yxorP\protocols\Http\request`



## Properties


### maxFileUploads



```php
public static $maxFileUploads
```



* This property is **static**.


***

### _enableCache



```php
protected static $_enableCache
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
public $properties
```






***

### _buffer



```php
protected $_buffer
```






***

### _data



```php
protected $_data
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

### parseGet



```php
protected parseGet(): mixed
```











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

### parseHeadFirstLine



```php
protected parseHeadFirstLine(): mixed
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

### parsePost



```php
protected parsePost(): mixed
```











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

### parseHeaders



```php
protected parseHeaders(): mixed
```











***

### rawHead



```php
public rawHead(): mixed
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
protected parseUploadFile(mixed $boundary, mixed $section_start_offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boundary` | **mixed** |  |
| `$section_start_offset` | **mixed** |  |




***

### rawBody



```php
public rawBody(): mixed
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

### parseProtocolVersion



```php
protected parseProtocolVersion(): mixed
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
public session(): mixed
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

### createSessionId



```php
public static createSessionId(): mixed
```



* This method is **static**.







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


***

