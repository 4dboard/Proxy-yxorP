***

# LoggerTrait

This is a simple Logger trait that classes unable to extend AbstractLogger
(because they extend another class, etc) can include.

It simply delegates all log-level-specific methods to the `log` method to
reduce boilerplate code that a simple Logger that does the same thing with
messages regardless of the error level has to implement.

* Full name: `\Psr\Log\LoggerTrait`




## Methods


### emergency

System is unusable.

```php
public emergency(string $message, array $context = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### alert

Action must be taken immediately.

```php
public alert(string $message, array $context = array()): void
```

Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### critical

Critical conditions.

```php
public critical(string $message, array $context = array()): void
```

Example: Application component unavailable, unexpected exception.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### error

Runtime errors that do not require immediate action but should typically
be logged and monitored.

```php
public error(string $message, array $context = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### warning

Exceptional occurrences that are not errors.

```php
public warning(string $message, array $context = array()): void
```

Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### notice

Normal but significant events.

```php
public notice(string $message, array $context = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### info

Interesting events.

```php
public info(string $message, array $context = array()): void
```

Example: User logs in, SQL logs.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### debug

Detailed debug information.

```php
public debug(string $message, array $context = array()): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |




***

### log

Logs with an arbitrary level.

```php
public log(mixed $level, string $message, array $context = array()): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **string** |  |
| `$context` | **array** |  |




***

***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

