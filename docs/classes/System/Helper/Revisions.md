***

# Revisions





* Full name: `\System\Helper\Revisions`
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
public getList(string $id, int $limit = 50, int $skip): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$limit` | **int** |  |
| `$skip` | **int** |  |




***

### add



```php
public add(mixed $id, mixed $data, mixed $meta = null, mixed $by = null, mixed $created = null, mixed $ref = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$data` | **mixed** |  |
| `$meta` | **mixed** |  |
| `$by` | **mixed** |  |
| `$created` | **mixed** |  |
| `$ref` | **mixed** |  |




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

### latest



```php
public latest(mixed $id): mixed
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
public __construct(\Lime\App $app, mixed $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |




***

### initialize



```php
protected initialize(): mixed
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

