***

# cookiePluginAction

Extending the wrapper class.



* Full name: `\yxorP\app\plugin\cookiePluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COOKIE_PREFIX`|public| |&#039;pc&#039;|


## Methods


### onBeforeSend

A method that is called before the request is sent to the server.

```php
public onBeforeSend(): void
```











***

### beforeRequest

Parsing the cookie header and extracting the cookies that are prefixed with `pc_`.

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

Removing the `set-cookie` header from the response and adding a new one with the cookie name prefixed with `pc_`.

```php
public onSent(): void
```











***

### headersReceived

Removing the `set-cookie` header from the response and adding a new one with the cookie name prefixed with `pc_`.

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

Parsing the cookie and then it is setting the cookie header.

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

Parsing the cookie and then it is returning an array with the cookie data.

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

Subscribing to all the events.

```php
final public subscribe(\yxorP\app\yP $dispatcher): void
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\yxorP\app\yP** |  |




***

### route

A method that is used to route the events to the appropriate methods.

```php
private route(string $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **string** |  |




***

### onCheck

Used to check if the event should be executed.

```php
public onCheck(): void
```











***

### onBuildCache

A method that is called when the event `EVENT_BUILD_CACHE` is triggered.

```php
public onBuildCache(): void
```











***

### onBuildContext

A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered.

```php
public onBuildContext(): void
```











***

### onBuildIncludes

A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered.

```php
public onBuildIncludes(): void
```











***

### onBuildHeaders

A method that is called when the event `EVENT_BUILD_HEADERS` is triggered.

```php
public onBuildHeaders(): void
```











***

### onBuildRequest

A method that is called when the event `EVENT_BUILD_REQUEST` is triggered.

```php
public onBuildRequest(): void
```











***

### onBeforeSend

Used to build the result.

```php
public onBeforeSend(): void
```











***

### onSend

Used to execute code when the request is sent.

```php
public onSend(): void
```











***

### onSent

Used to execute code before the request is sent.

```php
public onSent(): void
```











***

### onWrite

Used to execute code when the headers are received.

```php
public onWrite(): void
```











***

### onComplete

Used to execute code when the headers are received.

```php
public onComplete(): void
```











***

### onFinal

Used to execute code when the request is completed.

```php
public onFinal(): void
```











***

### onBuildException

Used to execute code when an exception is thrown.

```php
public onBuildException(\Exception $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |




***


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
