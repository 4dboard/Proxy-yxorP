***

# Utils





* Full name: `\yxorP\Controller\Utils`
* Parent class: [`\yxorP\AuthController`](../AuthController.md)




## Methods


### thumb_url



```php
public thumb_url(): mixed
```











***

### getCacheSize



```php
public getCacheSize(): mixed
```











***

### revisionsCount



```php
public revisionsCount(): mixed
```











***

### revisionsRemove



```php
public revisionsRemove(): mixed
```











***

### revisionsRemoveAll



```php
public revisionsRemoveAll(): mixed
```











***

### isResourceLocked



```php
public isResourceLocked(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




***

### lockResourceId



```php
public lockResourceId(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




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

### unlockResourceIdByCurrentUser



```php
public unlockResourceIdByCurrentUser(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




***

### startJobRunner



```php
public startJobRunner(): mixed
```











***

### restartJobRunner



```php
public restartJobRunner(): mixed
```











***

### stopJobRunner



```php
public stopJobRunner(): mixed
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

### before



```php
protected before(): mixed
```











***

### index



```php
public index(): mixed
```











***

### render



```php
protected render(mixed $view, mixed $params = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$view` | **mixed** |  |
| `$params` | **mixed** |  |




***

### param



```php
protected param(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### module



```php
protected module(mixed $module): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **mixed** |  |




***

### helper



```php
protected helper(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




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

