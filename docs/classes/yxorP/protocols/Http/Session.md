***

# Session





* Full name: `\yxorP\protocols\Http\Session`



## Properties


### name



```php
public static string $name
```



* This property is **static**.


***

### autoUpdateTimestamp



```php
public static bool $autoUpdateTimestamp
```



* This property is **static**.


***

### lifetime



```php
public static int $lifetime
```



* This property is **static**.


***

### cookieLifetime



```php
public static int $cookieLifetime
```



* This property is **static**.


***

### cookiePath



```php
public static string $cookiePath
```



* This property is **static**.


***

### domain



```php
public static string $domain
```



* This property is **static**.


***

### secure



```php
public static bool $secure
```



* This property is **static**.


***

### httpOnly



```php
public static bool $httpOnly
```



* This property is **static**.


***

### sameSite



```php
public static string $sameSite
```



* This property is **static**.


***

### gcProbability



```php
public static array $gcProbability
```



* This property is **static**.


***

### _handlerClass



```php
private static string $_handlerClass
```



* This property is **static**.


***

### _handlerConfig



```php
private static $_handlerConfig
```



* This property is **static**.


***

### _handler



```php
private static $_handler
```



* This property is **static**.


***

### _data



```php
private string|array|object|null $_data
```






***

### _needSave



```php
private bool $_needSave
```






***

### _sessionId



```php
private $_sessionId
```






***

## Methods


### __construct



```php
public __construct(mixed $session_id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** |  |




***

### checkSessionId



```php
protected static checkSessionId(mixed $session_id): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$session_id` | **mixed** |  |




***

### initHandler



```php
protected static initHandler(): mixed
```



* This method is **static**.







***

### init



```php
public static init(): mixed
```



* This method is **static**.







***

### handlerClass



```php
public static handlerClass(mixed $class_name = null, mixed $config = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class_name` | **mixed** |  |
| `$config` | **mixed** |  |




***

### getCookieParams



```php
public static getCookieParams(): array
```



* This method is **static**.







***

### pull



```php
public pull(mixed $name, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### get



```php
public get(mixed $name, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### delete



```php
public delete(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### put



```php
public put(mixed $key, mixed $value = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### set



```php
public set(mixed $name, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **mixed** |  |




***

### forget



```php
public forget(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### all



```php
public all(): mixed
```











***

### flush



```php
public flush(): mixed
```











***

### has



```php
public has(mixed $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### exists



```php
public exists(mixed $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### __destruct



```php
public __destruct(): mixed
```











***

### save



```php
public save(): mixed
```











***

### refresh



```php
public refresh(): mixed
```











***

### getId



```php
public getId(): mixed
```











***

### gc



```php
public gc(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
