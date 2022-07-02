***

# Session





* Full name: `\Lime\Helper\Session`
* Parent class: [`\Lime\Helper`](../Helper.md)



## Properties


### initialized



```php
protected $initialized
```






***

### name



```php
public $name
```






***

## Methods


### init



```php
public init(mixed $sessionname = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionname` | **mixed** |  |




***

### write



```php
public write(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




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

### destroy



```php
public destroy(): mixed
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
