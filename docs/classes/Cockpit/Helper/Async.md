***

# Async

Async Helper class.

Use only if you know what you're doing!!!

Usage:

cockpit()->helper('async')->exec('
   sleep(10);
   file_put_contents(COCKPIT_DIR."/debug.txt", json_encode(ASYNC_PARAMS));
', ['test' => 222]);

* Full name: `\Cockpit\Helper\Async`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### phpPath



```php
public $phpPath
```






***

## Methods


### exec



```php
public exec(mixed $script, mixed $params = null, mixed $maxTime = 60): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$script` | **mixed** |  |
| `$params` | **mixed** |  |
| `$maxTime` | **mixed** |  |




***

### finished



```php
public finished(mixed $processId, mixed& $error = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processId` | **mixed** |  |
| `$error` | **mixed** |  |




***

### execInBackground



```php
protected execInBackground(mixed $scriptfile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$scriptfile` | **mixed** |  |




***

### isExecAvailable



```php
protected isExecAvailable(): mixed
```











***


## Inherited methods


### __construct



```php
public __construct(mixed $app): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **mixed** |  |




***

### initialize



```php
public initialize(): mixed
```











***

### __call



```php
public __call(mixed $name, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |




***

### __invoke



```php
public __invoke(mixed $helper): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |




***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-02 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
