***

# TestLogger

Used for testing purposes.

It records all records and gives you access to them for verification.

* Full name: `\Psr\Log\Test\TestLogger`
* Parent class: [`\Psr\Log\AbstractLogger`](../AbstractLogger.md)



## Properties


### records



```php
public array $records
```






***

### recordsByLevel



```php
public $recordsByLevel
```






***

## Methods


### log



```php
public log(mixed $level, mixed $message, array $context = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **mixed** |  |
| `$context` | **array** |  |




***

### hasRecords



```php
public hasRecords(mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |




***

### hasRecord



```php
public hasRecord(mixed $record, mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **mixed** |  |
| `$level` | **mixed** |  |




***

### hasRecordThatContains



```php
public hasRecordThatContains(mixed $message, mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$level` | **mixed** |  |




***

### hasRecordThatMatches



```php
public hasRecordThatMatches(mixed $regex, mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regex` | **mixed** |  |
| `$level` | **mixed** |  |




***

### hasRecordThatPasses



```php
public hasRecordThatPasses(callable $predicate, mixed $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$predicate` | **callable** |  |
| `$level` | **mixed** |  |




***

### __call



```php
public __call(mixed $method, mixed $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$args` | **mixed** |  |




***

### reset



```php
public reset(): mixed
```











***


## Inherited methods


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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
