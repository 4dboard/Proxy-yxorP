***

# cookiePluginAction





* Full name: `\cookiePluginAction`
* Parent class: [`wrapper`](./yxorP/inc/wrapper.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COOKIE_PREFIX`|public| |&#039;pc&#039;|


## Methods


### onBeforeSend



```php
public onBeforeSend(): void
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

### onSent



```php
public onSent(): void
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


***
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
