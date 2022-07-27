***

# Mailer





* Full name: `\Mailer`



## Properties


### transport



```php
protected string $transport
```






***

### options



```php
protected array $options
```






***

## Methods


### __construct



```php
public __construct(string $transport = &#039;mail&#039;, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transport` | **string** |  |
| `$options` | **array** |  |




***

### mail



```php
public mail(mixed $to, string $subject, string $message, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **mixed** |  |
| `$subject` | **string** |  |
| `$message` | **string** |  |
| `$options` | **array** |  |




***

### createMessage



```php
public createMessage(mixed $to, string $subject, string $message, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **mixed** |  |
| `$subject` | **string** |  |
| `$message` | **string** |  |
| `$options` | **array** |  |




***


***

