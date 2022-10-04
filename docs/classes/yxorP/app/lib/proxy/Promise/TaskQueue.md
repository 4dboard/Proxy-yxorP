***

# taskQueue





* Full name: `\yxorP\lib\proxy\promise\taskQueue`
* This class implements:
[`\yxorP\lib\proxy\promise\taskQueueInterface`](./taskQueueInterface.md)



## Properties


### enableShutdown



```php
private $enableShutdown
```






***

### queue



```php
private $queue
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
public isEmpty(): mixed
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

