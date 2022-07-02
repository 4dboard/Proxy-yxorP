***

# proxifyPluginAction





* Full name: `\proxifyPluginAction`
* Parent class: [`\yxorP\http\wrapper`](./yxorP/http/wrapper.md)



## Properties


### base_url



```php
private string $base_url
```






***

## Methods


### onBeforeRequest



```php
public onBeforeRequest(): void
```











***

### onCompleted



```php
public onCompleted(): void
```











***

### clean_content_type



```php
public clean_content_type(mixed $content_type): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content_type` | **mixed** |  |




***

### proxify_head



```php
private proxify_head(mixed $str): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### proxify_css



```php
private proxify_css(mixed $str): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### css_url



```php
private css_url(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### css_import



```php
private css_import(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### html_attr



```php
private html_attr(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### form_action



```php
private form_action(mixed $matches): array|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$matches` | **mixed** |  |




***

### meta_refresh



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
> Automatically generated from source code comments on 2022-07-02 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
