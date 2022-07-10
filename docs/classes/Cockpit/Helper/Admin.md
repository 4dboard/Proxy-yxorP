***

# Admin

Admin Helper class.



* Full name: `\Cockpit\Helper\Admin`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### data



```php
public $data
```






***

### options



```php
public $options
```






***

### user



```php
public $user
```






***

### favicon



```php
public $favicon
```






***

## Methods


### initialize



```php
public initialize(): mixed
```











***

### init



```php
public init(): mixed
```











***

### favicon



```php
public favicon(): mixed
```











***

### addMenuItem



```php
public addMenuItem(mixed $menu, mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$menu` | **mixed** |  |
| `$data` | **mixed** |  |




***

### addAssets



```php
public addAssets(mixed $assets): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **mixed** |  |




***

### extractVar



```php
public extractVar(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### getOption



```php
public getOption(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### setOption



```php
public setOption(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### getUserOption



```php
public getUserOption(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### setUserOption



```php
public setUserOption(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### isResourceLocked



```php
public isResourceLocked(mixed $resourceId, mixed $ttl = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |
| `$ttl` | **mixed** |  |




***

### isResourceEditableByCurrentUser



```php
public isResourceEditableByCurrentUser(mixed $resourceId, mixed& $meta = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |
| `$meta` | **mixed** |  |




***

### lockResourceId



```php
public lockResourceId(mixed $resourceId, mixed $user = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |
| `$user` | **mixed** |  |




***

### unlockResourceId



```php
public unlockResourceId(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




***

### denyRequest



```php
public denyRequest(): mixed
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
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
