***

# Media

Class Controller



* Full name: `\Cockpit\Controller\Media`
* Parent class: [`\Cockpit\AuthController`](../AuthController.md)



## Properties


### root



```php
protected $root
```






***

## Methods


### api



```php
public api(): mixed
```











***

### ls



```php
protected ls(): mixed
```











***

### upload



```php
protected upload(): mixed
```











***

### uploadfolder



```php
protected uploadfolder(): mixed
```











***

### createfolder



```php
protected createfolder(): mixed
```











***

### createfile



```php
protected createfile(): mixed
```











***

### removefiles



```php
protected removefiles(): mixed
```











***

### _rrmdir



```php
protected _rrmdir(mixed $dir): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **mixed** |  |




***

### rename



```php
protected rename(): mixed
```











***

### readfile



```php
protected readfile(): mixed
```











***

### writefile



```php
protected writefile(): mixed
```











***

### unzip



```php
protected unzip(): mixed
```











***

### download



```php
protected download(): mixed
```











***

### downloadfolder



```php
protected downloadfolder(): mixed
```











***

### getfilelist



```php
protected getfilelist(): mixed
```











***

### savebookmarks



```php
public savebookmarks(): mixed
```











***

### loadbookmarks



```php
public loadbookmarks(): mixed
```











***

### _getPathParameter



```php
protected _getPathParameter(): mixed
```











***

### _isFileTypeAllowed



```php
protected _isFileTypeAllowed(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




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

### index



```php
public index(): string
```











***

### before



```php
protected before(): mixed
```











***

### render



```php
protected render( $view, array $params = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$view` | **** |  |
| `$params` | **array** |  |




***

### param



```php
protected param( $key, null $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$default` | **null** |  |




***

### module



```php
protected module( $module): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **** |  |




***

### helper



```php
protected helper( $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




***

### stop



```php
protected stop(mixed $data = false, mixed $status = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **mixed** |  |




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
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
