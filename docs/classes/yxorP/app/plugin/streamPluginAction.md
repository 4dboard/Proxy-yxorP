***

# streamPluginAction

Extending the wrapper class, which is a class that allows you to listen to events.



* Full name: `\yxorP\app\plugin\streamPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)



## Properties


### output_buffer_types

An array of content types that will be streamed.

```php
private array $output_buffer_types
```






***

### stream

A variable that is used to determine if the response should be streamed or not.

```php
private bool $stream
```






***

### max_content_length

Used to determine if the response should be streamed or not.

```php
private int $max_content_length
```






***

## Methods


### onSent

Checking if the content type is in the array of content types that should be streamed. If it is, it sets the
`$stream` variable to true.

```php
public onSent(): void
```











***

### onWrite

A function that is called when the proxy receives data from the server.

```php
public onWrite(): void
```











***

### onComplete

Used to exit the script when the response is streamed.

```php
public onComplete(): void
```











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
