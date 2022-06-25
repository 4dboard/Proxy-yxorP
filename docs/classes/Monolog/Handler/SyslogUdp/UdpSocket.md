***

# UdpSocket





* Full name: `\Monolog\Handler\SyslogUdp\UdpSocket`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DATAGRAM_MAX_LENGTH`|public| |65023|

## Properties


### ip



```php
protected $ip
```






***

### port



```php
protected $port
```






***

### socket



```php
protected $socket
```






***

## Methods


### __construct



```php
public __construct(mixed $ip, mixed $port = 514): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ip` | **mixed** |  |
| `$port` | **mixed** |  |




***

### write



```php
public write(mixed $line, mixed $header = &quot;&quot;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$header` | **mixed** |  |




***

### close



```php
public close(): mixed
```











***

### send



```php
protected send(mixed $chunk): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chunk` | **mixed** |  |




***

### assembleMessage



```php
protected assembleMessage(mixed $line, mixed $header): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$header` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
