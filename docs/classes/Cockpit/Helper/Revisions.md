***

# Revisions





* Full name: `\Cockpit\Helper\Revisions`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### storage



```php
protected $storage
```






***

## Methods


### initialize



```php
public initialize(): mixed
```











***

### count



```php
public count(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### getList



```php
public getList(mixed $id, mixed $limit = 50, mixed $skip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$limit` | **mixed** |  |
| `$skip` | **mixed** |  |




***

### add



```php
public add(mixed $id, mixed $data, mixed $meta = null, mixed $creator = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$data` | **mixed** |  |
| `$meta` | **mixed** |  |
| `$creator` | **mixed** |  |




***

### get



```php
public get(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### remove



```php
public remove(mixed $rid): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rid` | **mixed** |  |




***

### removeAll



```php
public removeAll(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




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
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
