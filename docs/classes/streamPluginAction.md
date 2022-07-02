***

# streamPluginAction





* Full name: `\streamPluginAction`
* Parent class: [`\yxorP\http\wrapper`](./yxorP/http/wrapper.md)



## Properties


### output_buffer_types



```php
private array $output_buffer_types
```






***

### stream



```php
private bool $stream
```






***

### max_content_length



```php
private int $max_content_length
```






***

## Methods


### onHeadersReceived



```php
public onHeadersReceived(): void
```











***

### onCurlWrite



```php
public onCurlWrite(): void
```











***

### onCompleted



```php
public onCompleted(): void
```











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

