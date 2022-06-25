***

# Response





* Full name: `\yxorP\Http\Response`



## Properties


### status



```php
public $status
```






***

### headers



```php
public \yxorP\Http\ParamStore $headers
```






***

### content



```php
private string $content
```






***

### statusCodes



```php
private array $statusCodes
```






***

## Methods


### __construct



```php
public __construct(mixed $content = &#039;&#039;, mixed $status = 200, mixed $headers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$status` | **mixed** |  |
| `$headers` | **mixed** |  |




***

### setStatusCode



```php
public setStatusCode(mixed $code): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### getContent



```php
public getContent(): string
```











***

### setContent



```php
public setContent(mixed $content): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### printContent



```php
public printContent(): void
```











***

### sendHeaders



```php
public sendHeaders(): void
```











***

### getStatusText



```php
public getStatusText(): string
```











***

### getStatusCode



```php
public getStatusCode(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
