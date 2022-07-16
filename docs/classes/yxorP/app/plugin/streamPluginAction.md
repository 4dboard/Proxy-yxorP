***

# streamPluginAction





* Full name: `\yxorP\app\plugin\streamPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)



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


### onSent



```php
public onSent(): void
```











***

### onWrite



```php
public onWrite(): void
```











***

### onComplete



```php
public onComplete(): void
```











***


## Inherited methods


### subscribe



```php
final public subscribe(\yxorP\app\yP $dispatcher): void
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\yxorP\app\yP** |  |




***

### onCheck



```php
public onCheck(): void
```











***

### onBuildCache



```php
public onBuildCache(): void
```











***

### onBuildContext



```php
public onBuildContext(): void
```











***

### onBuildIncludes



```php
public onBuildIncludes(): void
```











***

### onBuildHeaders



```php
public onBuildHeaders(): void
```











***

### onBuildRequest



```php
public onBuildRequest(): void
```











***

### onBeforeSend



```php
public onBeforeSend(): void
```











***

### onSend



```php
public onSend(): void
```











***

### onSent



```php
public onSent(): void
```











***

### onWrite



```php
public onWrite(): void
```











***

### onComplete



```php
public onComplete(): void
```











***

### onFinal



```php
public onFinal(): void
```











***

### onBuildException



```php
public onBuildException(\Exception $e): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Exception** |  |




***

### route



```php
private route(string $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-16 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
