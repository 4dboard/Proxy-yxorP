***

# Request





* Full name: `\Lime\Request`



## Properties


### request



```php
public $request
```






***

### post



```php
public $post
```






***

### query



```php
public $query
```






***

### files



```php
public $files
```






***

### cookies



```php
public $cookies
```






***

### headers



```php
public $headers
```






***

### server



```php
public $server
```






***

### body



```php
public $body
```






***

### site_url



```php
public $site_url
```






***

### base_url



```php
public $base_url
```






***

### base_route



```php
public $base_route
```






***

### route



```php
public $route
```






***

## Methods


### __construct



```php
public __construct(mixed $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |




***

### fromGlobalRequest



```php
public static fromGlobalRequest(mixed $config = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |




***

### getAllHeaders



```php
public static getAllHeaders(mixed $server): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **mixed** |  |




***

### param



```php
public param(mixed $index = null, mixed $default = null, mixed $source = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |
| `$default` | **mixed** |  |
| `$source` | **mixed** |  |




***

### getClientIp



```php
public getClientIp(): mixed
```











***

### getClientLang



```php
public getClientLang(mixed $default = &quot;en&quot;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **mixed** |  |




***

### getSiteUrl



```php
public getSiteUrl(mixed $withpath = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withpath` | **mixed** |  |




***

### is



```php
public is(mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***


***

