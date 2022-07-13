***

# Filesystem





* Full name: `\LimeExtra\Helper\Filesystem`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)




## Methods


### path



```php
public path(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### ls



```php
public ls(): array
```











***

### read



```php
public read(): bool|mixed
```











***

### write



```php
public write(): bool|mixed
```











***

### mkdir



```php
public mkdir( $path, int $mode = 0755): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |
| `$mode` | **int** |  |




***

### copy



```php
public copy( $path,  $dest, bool|true $_init = true): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |
| `$dest` | **** |  |
| `$_init` | **bool&#124;true** |  |




***

### rename



```php
public rename( $path,  $newpath, bool|true $overwrite = true): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |
| `$newpath` | **** |  |
| `$overwrite` | **bool&#124;true** |  |




***

### delete



```php
public delete( $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |




***

### getDirSize



```php
public getDirSize( $dir): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **** |  |




***

### removeEmptySubFolders



```php
public removeEmptySubFolders( $dir, bool|false $selfremove = false): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **** |  |
| `$selfremove` | **bool&#124;false** |  |




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
> Automatically generated from source code comments on 2022-07-13 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
