***

# FileStorage





* Full name: `\FileStorage`



## Properties


### config



```php
protected $config
```






***

### storages



```php
protected $storages
```






***

### manager



```php
protected $manager
```






***

## Methods


### __construct



```php
public __construct(mixed $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |




***

### addStorage



```php
public addStorage(mixed $name, mixed $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$config` | **mixed** |  |




***

### initStorage



```php
protected initStorage(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### use



```php
public use(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getURL



```php
public getURL(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***

### __call



```php
public __call(mixed $name, mixed $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$args` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
