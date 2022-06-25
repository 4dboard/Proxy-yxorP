***

# OverridePlugin





* Full name: `\OverridePlugin`
* Parent class: [`\yxorP\Http\EventWrapper`](./yxorP/Http/EventWrapper.md)




## Methods


### onCompleted



```php
public onCompleted(): mixed
```











***

### merge



```php
public merge(mixed $array1, mixed $array2 = null, mixed $array3 = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array1` | **mixed** |  |
| `$array2` | **mixed** |  |
| `$array3` | **mixed** |  |




***

### REWRITE



```php
public REWRITE(mixed $content): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




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

### route



```php
private route(mixed $event_name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_name` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
