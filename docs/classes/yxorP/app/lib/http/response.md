***

# response





* Full name: `\yxorP\app\lib\http\response`



## Properties


### status



```php
public $status
```






***

### headers



```php
public \yxorP\app\lib\http\ParamStore $headers
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
public __construct(mixed $content = CHAR_EMPTY_STRING, mixed $status = 200, mixed $headers = array()): mixed
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
public setContent(mixed $content): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




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

### printContent



```php
public printContent(): void
```











***


***

