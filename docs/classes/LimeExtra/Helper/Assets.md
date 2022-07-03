***

# Assets

Assets class.



* Full name: `\LimeExtra\Helper\Assets`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)




## Methods


### style

Compile styles and return in a link tag

```php
public style(array $assets, string $name, string $path = &quot;&quot;, float $cache, bool $version = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **array** |  |
| `$name` | **string** |  |
| `$path` | **string** |  |
| `$cache` | **float** |  |
| `$version` | **bool** |  |




***

### script

Compile scripts and return in a script tag

```php
public script(array $assets, string $name, string $path = &quot;&quot;, float $cache, bool $version = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **array** |  |
| `$name` | **string** |  |
| `$path` | **string** |  |
| `$cache` | **float** |  |
| `$version` | **bool** |  |




***

### style_and_script

Echo tags for scripts and styles

```php
public style_and_script(array $assets, string $name, string $path = &quot;&quot;, float $cache, bool $version = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **array** |  |
| `$name` | **string** |  |
| `$path` | **string** |  |
| `$cache` | **float** |  |
| `$version` | **bool** |  |




***

### compile

Compile assets into one file

```php
public compile(array $assets, string $type): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **array** |  |
| `$type` | **string** | js or css |




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
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
