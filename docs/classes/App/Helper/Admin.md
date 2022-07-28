***

# Admin





* Full name: `\App\Helper\Admin`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)




## Methods


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

### updateLockedResourceId



```php
public updateLockedResourceId(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




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

### unlockResourceId



```php
public unlockResourceId(mixed $resourceId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resourceId` | **mixed** |  |




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

