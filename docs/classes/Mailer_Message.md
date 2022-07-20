***

# Mailer_Message





* Full name: `\Mailer_Message`



## Properties


### mail



```php
public $mail
```






***

## Methods


### __construct



```php
public __construct(mixed $mail): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mail` | **mixed** |  |




***

### setCharset



```php
public setCharset(mixed $charset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charset` | **mixed** |  |




***

### setSubject



```php
public setSubject(mixed $subject): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **mixed** |  |




***

### setFrom



```php
public setFrom(mixed $email, mixed $name = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |
| `$name` | **mixed** |  |




***

### addReplyTo



```php
public addReplyTo(mixed $email, mixed $name = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |
| `$name` | **mixed** |  |




***

### addTo



```php
public addTo(mixed $email, mixed $name = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |
| `$name` | **mixed** |  |




***

### addCC



```php
public addCC(mixed $email, mixed $name = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **mixed** |  |
| `$name` | **mixed** |  |




***

### send



```php
public send(): mixed
```











***

### attach



```php
public attach(mixed $file, mixed $alias = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$alias` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
