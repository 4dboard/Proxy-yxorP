***

# timer





* Full name: `\yxorP\http\timer`



## Properties


### _tasks



```php
private static array $_tasks
```



* This property is **static**.


***

### _event



```php
private static $_event
```



* This property is **static**.


***

### _timerId



```php
private static int $_timerId
```



* This property is **static**.


***

### _status



```php
private static array $_status
```



* This property is **static**.


***

## Methods


### init



```php
public static init(mixed $event = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **mixed** |  |




***

### signalHandle



```php
public static signalHandle(): mixed
```



* This method is **static**.







***

### tick



```php
public static tick(): mixed
```



* This method is **static**.







***

### delay



```php
public static delay(float $delay, mixed $func, mixed $args = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delay` | **float** |  |
| `$func` | **mixed** |  |
| `$args` | **mixed** |  |




***

### add



```php
public static add(float $time_interval, mixed $func, mixed $args = [], mixed $persistent = true): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$time_interval` | **float** |  |
| `$func` | **mixed** |  |
| `$args` | **mixed** |  |
| `$persistent` | **mixed** |  |




***

### del



```php
public static del(mixed $timer_id): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timer_id` | **mixed** |  |




***

### delAll



```php
public static delAll(): mixed
```



* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
