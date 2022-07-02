***

# cookiePluginAction





* Full name: `\cookiePluginAction`
* Parent class: [`\yxorP\http\wrapper`](./yxorP/http/wrapper.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COOKIE_PREFIX`|public| |&#039;pc&#039;|


## Methods


### onBeforeRequest



```php
public onBeforeRequest(): void
```











***

### beforeRequest



```php
public static beforeRequest(mixed $match): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$match` | **mixed** |  |




***

### onHeadersReceived



```php
public onHeadersReceived(): void
```











***

### headersReceived



```php
public static headersReceived(mixed $response, mixed $set_cookie): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **mixed** |  |
| `$set_cookie` | **mixed** |  |




***

### Received



```php
public static Received(mixed $line): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |




***

### parse_cookie



```php
private static parse_cookie(mixed $line, mixed $url): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$url` | **mixed** |  |




***


## Inherited methods


### subscribe



```php
final public subscribe(mixed $dispatcher): void
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **mixed** |  |




***

### route



```php
private route(mixed $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **mixed** |  |




***

### onCheck



```php
public onCheck(): mixed
```











***

### onBuildCached



```php
public onBuildCached(): mixed
```











***

### onBuildContext



```php
public onBuildContext(): mixed
```











***

### onBuildIncludes



```php
public onBuildIncludes(): mixed
```











***

### onBuildHeaders



```php
public onBuildHeaders(): mixed
```











***

### onBuildRequest



```php
public onBuildRequest(): mixed
```











***

### onBuildResult



```php
public onBuildResult(): mixed
```











***

### onBeforeRequest



```php
public onBeforeRequest(): mixed
```











***

### onHeadersReceived



```php
public onHeadersReceived(): mixed
```











***

### onCurlWrite



```php
public onCurlWrite(): mixed
```











***

### onCompleted



```php
public onCompleted(): mixed
```











***

### onBuildException



```php
public onBuildException(mixed $e): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **mixed** |  |




***


***

