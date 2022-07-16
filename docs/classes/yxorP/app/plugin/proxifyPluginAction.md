***

# proxifyPluginAction





* Full name: `\yxorP\app\plugin\proxifyPluginAction`
* Parent class: [`\yxorP\app\lib\http\wrapper`](../lib/http/wrapper.md)



## Properties


### base_url



```php
private string $base_url
```






***

## Methods


### onBeforeSend



```php
public onBeforeSend(): void
```











***

### onComplete



```php
public onComplete(): void
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

