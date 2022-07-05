***

# http





* Full name: `\yxorP\protocols\http`



## Properties


### _requestClass



```php
protected static $_requestClass
```



* This property is **static**.


***

### _uploadTmpDir



```php
protected static $_uploadTmpDir
```



* This property is **static**.


***

### _enableCache



```php
protected static $_enableCache
```



* This property is **static**.


***

## Methods


### requestClass



```php
public static requestClass(mixed $class_name = null): mixed
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
public static encode(mixed $response, \yxorP\connection\tcpConnection $connection): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **mixed** |  |
| `$connection` | **\yxorP\connection\tcpConnection** |  |




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

### uploadTmpDir



```php
public static uploadTmpDir(mixed $dir = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
