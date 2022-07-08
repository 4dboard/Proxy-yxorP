***

# PhpRequest





* Full name: `\yxorP\snag\Request\PhpRequest`
* This class implements:
[`\yxorP\snag\Request\RequestInterface`](./RequestInterface.md)



## Properties


### server



```php
private array $server
```






***

### session



```php
private array $session
```






***

### cookies



```php
private array $cookies
```






***

### headers



```php
private array $headers
```






***

### input



```php
private ?array $input
```






***

## Methods


### __construct



```php
public __construct(array $server, array $session, array $cookies, array $headers, array $input = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **array** |  |
| `$session` | **array** |  |
| `$cookies` | **array** |  |
| `$headers` | **array** |  |
| `$input` | **array** |  |




***

### isRequest



```php
public isRequest(): bool
```











***

### getSession



```php
public getSession(): array
```











***

### getCookies



```php
public getCookies(): array
```











***

### getMetaData



```php
public getMetaData(): array
```











***

### getContext



```php
public getContext(): ?string
```











***

### getUserId



```php
public getUserId(): mixed
```











***

### getCurrentUrl



```php
protected getCurrentUrl(): string
```











***

### getRequestIp



```php
protected getRequestIp(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
