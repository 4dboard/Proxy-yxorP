***

# youtubePluginAction

Extending the wrapper class.



* Full name: `\yxorP\plugin\youtubePluginAction`
* Parent class: [`\yxorP\lib\http\wrapper`](../lib/http/wrapper.md)



## Properties


### url_pattern

A regex pattern that will be used to match the url of the request.

```php
protected ?string $url_pattern
```






***

## Methods


### onBeforeSend

Setting the cookie and user-agent of the request.

```php
public onBeforeSend(): void
```











***

### onComplete

A function that is called when the request is completed.

```php
public onComplete(): void
```











***


## Inherited methods


### subscribe

Subscribing to all the events.

```php
final public subscribe(\yxorP\lib\yP $dispatcher): void
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\yxorP\lib\yP** |  |




***

### onCheck

Used to check if the event should be executed.

```php
public onCheck(): void
```











***

### onCache

A method that is called when the event `EVENT_BUILD_CACHE` is triggered.

```php
public onCache(): void
```











***

### onContext

A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered.

```php
public onContext(): void
```











***

### onIncludes

A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered.

```php
public onIncludes(): void
```











***

### onHeaders

A method that is called when the event `EVENT_BUILD_HEADERS` is triggered.

```php
public onHeaders(): void
```











***

### onRequest

A method that is called when the event `EVENT_BUILD_REQUEST` is triggered.

```php
public onRequest(): void
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

### onException

Used to execute code when an exception is thrown.

```php
public onException(\Exception $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |




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


***

