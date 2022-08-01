***

# auth





* Full name: `\App\Helper\auth`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### sessionKey



```php
public string $sessionKey
```






***

## Methods


### authenticate



```php
public authenticate(array $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### getUser



```php
public getUser(?string $prop = null, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prop` | **?string** |  |
| `$default` | **mixed** |  |




***

### setUser



```php
public setUser(array $user, bool $permanent = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$user` | **array** |  |
| `$permanent` | **bool** |  |




***

### logout



```php
public logout(): void
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

