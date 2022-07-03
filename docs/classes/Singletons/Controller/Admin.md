***

# Admin

Class Controller



* Full name: `\Singletons\Controller\Admin`
* Parent class: [`\Cockpit\AuthController`](../../Cockpit/AuthController.md)




## Methods


### index



```php
public index(): mixed
```











***

### singleton



```php
public singleton(mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### form



```php
public form(mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### remove_singleton



```php
public remove_singleton(mixed $singleton): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singleton` | **mixed** |  |




***

### update_data



```php
public update_data(mixed $singleton): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singleton` | **mixed** |  |




***

### revisions



```php
public revisions(mixed $singleton, mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singleton` | **mixed** |  |
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
