***

# Mailer





* Full name: `\Mailer`



## Properties


### mailer



```php
protected $mailer
```






***

### transport



```php
protected $transport
```






***

### options



```php
protected $options
```






***

## Methods


### __construct



```php
public __construct(mixed $transport = &#039;mail&#039;, mixed $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transport` | **mixed** |  |
| `$options` | **mixed** |  |




***

### mail



```php
public mail(mixed $to, mixed $subject, mixed $message, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **mixed** |  |
| `$subject` | **mixed** |  |
| `$message` | **mixed** |  |
| `$options` | **mixed** |  |




***

### createMessage



```php
public createMessage(mixed $to, mixed $subject, mixed $message, mixed $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **mixed** |  |
| `$subject` | **mixed** |  |
| `$message` | **mixed** |  |
| `$options` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
