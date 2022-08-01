***

# fileStorage





* Full name: `\fileStorage`



## Properties


### config



```php
protected array $config
```






***

### storages



```php
protected array $storages
```






***

### manager



```php
protected \League\Flysystem\MountManager $manager
```






***

## Methods


### __construct



```php
public __construct(array $config = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### addStorage



```php
public addStorage(string $name, array $config): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$config` | **array** |  |




***

### initStorage



```php
protected initStorage(string $name): \League\Flysystem\Filesystem
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### use



```php
public use(string $name): ?\League\Flysystem\Filesystem
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getURL



```php
public getURL(string $file): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |




***

### __call



```php
public __call(mixed $name, mixed $args): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$args` | **mixed** |  |




***


***

