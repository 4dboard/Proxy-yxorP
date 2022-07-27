***

# proxifyPluginAction

Extending the wrapper class.



* Full name: `\yxorP\app\plugin\proxifyPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)



## Properties


### base_url

It's a private variable that is used to store the base url of the request.

```php
private string $base_url
```






***

## Methods


### onBeforeSend

A function that is called before the request is sent to the server.

```php
public onBeforeSend(): void
```











***

### onComplete

It's a function that is called after the request is completed.

```php
public onComplete(): void
```











***

### clean_content_type

It's getting the content type of the response.

```php
public clean_content_type(mixed $content_type): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content_type` | **mixed** |  |




***

### proxify_head

It's replacing the `<head>` tag with the `<head>` tag.

```php
private proxify_head(mixed $str): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### proxify_css

It's replacing the `url()` in the CSS with the proxified url.

```php
private proxify_css(mixed $str): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### css_url

It's replacing the `url()` in the CSS with the proxified url.

```php
private css_url(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### css_import

It's replacing the `@import` in the CSS with the proxified url.

```php
private css_import(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### html_attr

It's replacing the `src` and `href` attributes in the HTML with the proxified url.

```php
private html_attr(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### form_action

It's replacing the `action` attribute in the `<form>` tag with the proxified url.

```php
private form_action(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### meta_refresh

It's replacing the `content` attribute in the `<meta>` tag with the proxified url.

```php
private meta_refresh(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




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

