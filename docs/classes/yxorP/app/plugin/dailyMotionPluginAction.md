***

# dailyMotionPluginAction





* Full name: `\yxorP\app\plugin\dailyMotionPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)



## Properties


### url_pattern



```php
protected ?string $url_pattern
```






***

## Methods


### onComplete



```php
public onComplete(): void
```











***

### completed



```php
public static completed(mixed $matches, mixed $content): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |
| `$content` | **mixed** |  |




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

### route



```php
private route(string $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **string** |  |




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


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)