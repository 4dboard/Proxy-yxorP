***

# Request





* Full name: `\Lime\Request`



## Properties


### request



```php
public array $request
```






***

### post



```php
public array $post
```






***

### query



```php
public array $query
```






***

### files



```php
public array $files
```






***

### cookies



```php
public array $cookies
```






***

### headers



```php
public array $headers
```






***

### server



```php
public array $server
```






***

### body



```php
public array $body
```






***

### site_url



```php
public string $site_url
```






***

### base_url



```php
public string $base_url
```






***

### base_route



```php
public string $base_route
```






***

### route



```php
public string $route
```






***

### method



```php
public string $method
```






***

### stopped



```php
public bool $stopped
```






***

## Methods


### fromGlobalRequest



```php
public static fromGlobalRequest(array $config = []): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### __construct



```php
public __construct(array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### param



```php
public param(?string $index = null, mixed $default = null, mixed $source = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **?string** |  |
| `$default` | **mixed** |  |
| `$source` | **mixed** |  |




***

### getClientIp



```php
public getClientIp(): ?string
```











***

### getClientLang



```php
public getClientLang(string $default = &#039;en&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **string** |  |




***

### getSiteUrl



```php
public getSiteUrl(bool $withpath = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withpath` | **bool** |  |




***

### is



```php
public is(string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### getBearerToken



```php
public getBearerToken(): ?string
```











***

### getAllHeaders



```php
public static getAllHeaders(array $server): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **array** |  |




***


***

