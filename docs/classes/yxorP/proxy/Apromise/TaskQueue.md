***

# TaskQueue





* Full name: `\yxorP\proxy\Apromise\TaskQueue`
* This class implements:
[`\yxorP\proxy\Apromise\TaskQueueInterface`](./TaskQueueInterface.md)



## Properties


### enableShutdown



```php
private bool $enableShutdown
```






***

### queue



```php
private array $queue
```






***

## Methods


### __construct



```php
public __construct(mixed $withShutdown = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withShutdown` | **mixed** |  |




***

### run



```php
public run(): mixed
```











***

### isEmpty



```php
public isEmpty(): bool
```











***

### add



```php
public add(callable $task): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$task` | **callable** |  |




***

### disableShutdown



```php
public disableShutdown(): mixed
```











***


***

