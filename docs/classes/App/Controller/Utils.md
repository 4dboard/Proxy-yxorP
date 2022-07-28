***

# Utils

Class Controller



* Full name: `\App\Controller\Utils`
* Parent class: [`\App\Controller\App`](./App.md)




## Methods


### generateToken



```php
public generateToken(mixed $length = 20): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***

### csrf



```php
public csrf(mixed $name = null, mixed $generate = false, mixed $expire = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$generate` | **mixed** |  |
| `$expire` | **mixed** |  |




***

### search



```php
public search(): mixed
```











***


## Inherited methods


### render



```php
protected render( $view, array $params = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$view` | **** |  |
| `$params` | **array** |  |




***

### unlockResource



```php
public unlockResource(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




***

### isAllowed



```php
protected isAllowed(string $permission): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permission` | **string** |  |




***

### initialize



```php
protected initialize(): mixed
```











***

### checkAndLockResource



```php
protected checkAndLockResource(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




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

### path



```php
protected path( $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |




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
protected module( $module): mixed
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
protected stop(mixed $data = null, mixed $status = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **mixed** |  |




***

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

