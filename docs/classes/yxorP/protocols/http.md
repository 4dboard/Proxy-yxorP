***

# http





* Full name: `\yxorP\protocols\http`



## Properties


### _requestClass



```php
private static string $_requestClass
```



* This property is **static**.


***

### _uploadTmpDir



```php
private static string $_uploadTmpDir
```



* This property is **static**.


***

### _enableCache



```php
private static bool $_enableCache
```



* This property is **static**.


***

## Methods


### requestClass



```php
public static requestClass(mixed $class_name = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class_name` | **mixed** |  |




***

### enableCache



```php
public static enableCache(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### input



```php
public static input(mixed $recv_buffer, \yxorP\connection\tcpConnection $connection): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recv_buffer` | **mixed** |  |
| `$connection` | **\yxorP\connection\tcpConnection** |  |




***

### decode



```php
public static decode(mixed $recv_buffer, \yxorP\connection\tcpConnection $connection): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recv_buffer` | **mixed** |  |
| `$connection` | **\yxorP\connection\tcpConnection** |  |




***

### encode



```php
public static encode(mixed $response, \yxorP\connection\tcpConnection $connection): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **mixed** |  |
| `$connection` | **\yxorP\connection\tcpConnection** |  |




***

### uploadTmpDir



```php
public static uploadTmpDir(mixed $dir = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |




***

### sendStream



```php
protected static sendStream(\yxorP\connection\tcpConnection $connection, mixed $handler, mixed $offset, mixed $length): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$connection` | **\yxorP\connection\tcpConnection** |  |
| `$handler` | **mixed** |  |
| `$offset` | **mixed** |  |
| `$length` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
