***

# Cache





* Full name: `\Lime\Helper\Cache`
* Parent class: [`\Lime\Helper`](../Helper.md)



## Properties


### prefix



```php
public $prefix
```






***

### cachePath



```php
protected $cachePath
```






***

## Methods


### initialize



```php
public initialize(): mixed
```











***

### setCachePath



```php
public setCachePath(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### getCachePath



```php
public getCachePath(): mixed
```











***

### write



```php
public write(mixed $key, mixed $value, mixed $duration = -1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |
| `$duration` | **mixed** |  |




***

### read



```php
public read(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### delete



```php
public delete(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### clear



```php
public clear(): mixed
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

