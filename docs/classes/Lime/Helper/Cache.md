***

# cache





* Full name: `\Lime\Helper\cache`
* Parent class: [`\Lime\Helper`](../Helper.md)



## Properties


### prefix



```php
public ?string $prefix
```






***

### cachePath



```php
protected ?string $cachePath
```






***

## Methods


### getCachePath



```php
public getCachePath(): mixed
```











***

### setCachePath



```php
public setCachePath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### write



```php
public write(string $key, mixed $value, int $duration = -1, bool $encrypt = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |
| `$duration` | **int** |  |
| `$encrypt` | **bool** |  |




***

### read



```php
public read(string $key, mixed $default = null, mixed $decrypt = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |
| `$decrypt` | **mixed** |  |




***

### delete



```php
public delete(string $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |




***

### clear



```php
public clear(): void
```











***

### initialize



```php
protected initialize(): mixed
```











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

