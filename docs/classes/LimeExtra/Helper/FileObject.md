***

# FileObject

Use custom FileObject to prevent "too many files open" error



* Full name: `\LimeExtra\Helper\FileObject`



## Properties


### path



```php
protected $path
```






***

### fileObject



```php
protected $fileObject
```






***

## Methods


### __construct



```php
public __construct(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### getFilename



```php
public getFilename(): mixed
```











***

### getPathName



```php
public getPathName(): mixed
```











***

### getRealPath



```php
public getRealPath(): mixed
```











***

### getBasename



```php
public getBasename(mixed $suffix = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **mixed** |  |




***

### getSize



```php
public getSize(): mixed
```











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


***
> Automatically generated from source code comments on 2022-07-27 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
