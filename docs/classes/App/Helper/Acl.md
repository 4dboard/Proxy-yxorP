***

# acl





* Full name: `\App\Helper\acl`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### roles



```php
protected array $roles
```






***

## Methods


### roles



```php
public roles(): array
```











***

### isAllowed



```php
public isAllowed(string $permission, ?string $role = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permission` | **string** |  |
| `$role` | **?string** |  |




***

### isSuperAdmin



```php
public isSuperAdmin(mixed $role = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$role` | **mixed** |  |




***

### cache



```php
public cache(): array
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

