***

# AbstractLogger

This is a simple Logger implementation that other Loggers can inherit from.

It simply delegates all log-level-specific methods to the `log` method to
reduce boilerplate code that a simple Logger that does the same thing with
messages regardless of the error level has to implement.

* Full name: `\Psr\Log\AbstractLogger`
* This class implements:
[`\Psr\Log\LoggerInterface`](./LoggerInterface.md)
* This class is an **Abstract class**






## Inherited methods


### emergency

System is unusable.

```php
public emergency(string|\Stringable $message, array $context = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### alert

Action must be taken immediately.

```php
public alert(string|\Stringable $message, array $context = []): void
```

Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### critical

Critical conditions.

```php
public critical(string|\Stringable $message, array $context = []): void
```

Example: Application component unavailable, unexpected exception.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### error

Runtime errors that do not require immediate action but should typically
be logged and monitored.

```php
public error(string|\Stringable $message, array $context = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### warning

Exceptional occurrences that are not errors.

```php
public warning(string|\Stringable $message, array $context = []): void
```

Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### notice

Normal but significant events.

```php
public notice(string|\Stringable $message, array $context = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### info

Interesting events.

```php
public info(string|\Stringable $message, array $context = []): void
```

Example: User logs in, SQL logs.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### debug

Detailed debug information.

```php
public debug(string|\Stringable $message, array $context = []): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***

### log

Logs with an arbitrary level.

```php
public log(mixed $level, string|\Stringable $message, array $context = []): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |




***


***

