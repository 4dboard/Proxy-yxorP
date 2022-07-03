***

# RestApi

Class Controller



* Full name: `\Collections\Controller\RestApi`
* Parent class: [`\LimeExtra\Controller`](../../LimeExtra/Controller.md)




## Methods


### before



```php
protected before(): mixed
```











***

### get

Deprecated! use /entries instead

```php
public get(mixed $collection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |




***

### entries



```php
public entries(mixed $collection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |




***

### entry



```php
public entry(mixed $collection = null, mixed $id = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |
| `$id` | **mixed** |  |




***

### save



```php
public save(mixed $collection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |




***

### remove



```php
public remove(mixed $collection = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$collection` | **mixed** |  |




***

### createCollection



```php
public createCollection(): mixed
```











***

### updateCollection



```php
public updateCollection(mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### collection



```php
public collection(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### listCollections



```php
public listCollections(mixed $extended = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extended` | **mixed** |  |




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
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
