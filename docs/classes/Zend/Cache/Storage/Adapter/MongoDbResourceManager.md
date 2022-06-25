***

# MongoDbResourceManager





* Full name: `\Zend\Cache\Storage\Adapter\MongoDbResourceManager`



## Properties


### resources

Registered resources

```php
private array[] $resources
```






***

## Methods


### hasResource

Check if a resource exists

```php
public hasResource(string $id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setResource

Set a resource

```php
public setResource(string $id, array|\MongoCollection $resource): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$resource` | **array&#124;\MongoCollection** |  |




***

### getResource

Instantiate and return the MongoCollection resource

```php
public getResource(string $id): \MongoCollection
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setServer



```php
public setServer(mixed $id, mixed $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$server` | **mixed** |  |




***

### getServer



```php
public getServer(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### setConnectionOptions



```php
public setConnectionOptions(mixed $id, array $connectionOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$connectionOptions` | **array** |  |




***

### getConnectionOptions



```php
public getConnectionOptions(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### setDriverOptions



```php
public setDriverOptions(mixed $id, array $driverOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$driverOptions` | **array** |  |




***

### getDriverOptions



```php
public getDriverOptions(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### setDatabase



```php
public setDatabase(mixed $id, mixed $database): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$database` | **mixed** |  |




***

### getDatabase



```php
public getDatabase(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***

### setCollection



```php
public setCollection(mixed $id, mixed $collection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$collection` | **mixed** |  |




***

### getCollection



```php
public getCollection(mixed $id): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
