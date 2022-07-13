***

# YAML

Class YAML



* Full name: `\LimeExtra\Helper\YAML`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### cachePath



```php
protected $cachePath
```






***

## Methods


### fromString



```php
public static fromString( $string): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **** |  |




***

### setCachePath



```php
public setCachePath( $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |




***

### fromFile



```php
public fromFile( $file): array|mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **** |  |




***

### get_cached_file



```php
protected get_cached_file( $file): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **** |  |




***

### cache_file



```php
protected cache_file( $file,  $cachedfile, null $filemtime = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **** |  |
| `$cachedfile` | **** |  |
| `$filemtime` | **null** |  |




***

### toFile



```php
public toFile( $file,  $array): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **** |  |
| `$array` | **** |  |




***

### toYAML



```php
public toYAML( $array): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **** |  |




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
