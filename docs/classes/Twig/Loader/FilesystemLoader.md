***

# FilesystemLoader

Loads template from the filesystem.



* Full name: `\Twig\Loader\FilesystemLoader`
* This class implements:
[`\Twig\Loader\LoaderInterface`](./LoaderInterface.md), [`\Twig\Loader\ExistsLoaderInterface`](./ExistsLoaderInterface.md), [`\Twig\Loader\SourceContextLoaderInterface`](./SourceContextLoaderInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MAIN_NAMESPACE`|public| |&#039;__main__&#039;|

## Properties


### paths



```php
protected $paths
```






***

### cache



```php
protected $cache
```






***

### errorCache



```php
protected $errorCache
```






***

### rootPath



```php
private $rootPath
```






***

## Methods


### __construct



```php
public __construct(string|array $paths = [], string|null $rootPath = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **string&#124;array** | A path or an array of paths where to look for templates |
| `$rootPath` | **string&#124;null** | The root path common to all relative paths (null for getcwd()) |




***

### getPaths

Returns the paths to the templates.

```php
public getPaths(string $namespace = self::MAIN_NAMESPACE): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | A path namespace |


**Return Value:**

The array of paths where to look for templates



***

### getNamespaces

Returns the path namespaces.

```php
public getNamespaces(): array
```

The main namespace is always defined.







**Return Value:**

The array of defined namespaces



***

### setPaths

Sets the paths where templates are stored.

```php
public setPaths(string|array $paths, string $namespace = self::MAIN_NAMESPACE): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$paths` | **string&#124;array** | A path or an array of paths where to look for templates |
| `$namespace` | **string** | A path namespace |




***

### addPath

Adds a path where templates are stored.

```php
public addPath(string $path, string $namespace = self::MAIN_NAMESPACE): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A path where to look for templates |
| `$namespace` | **string** | A path namespace |




***

### prependPath

Prepends a path where templates are stored.

```php
public prependPath(string $path, string $namespace = self::MAIN_NAMESPACE): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | A path where to look for templates |
| `$namespace` | **string** | A path namespace |




***

### getSource

Gets the source code of a template, given its name.

```php
public getSource(mixed $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to load |


**Return Value:**

The template source code



***

### getSourceContext

Returns the source context for a given template logical name.

```php
public getSourceContext(mixed $name): \Twig\Source
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The template logical name |




***

### getCacheKey

Gets the cache key to use for the cache for a given template name.

```php
public getCacheKey(mixed $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to load |


**Return Value:**

The cache key



***

### exists

Check if we have the source code of a template, given its name.

```php
public exists(mixed $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the template to check if we can load |


**Return Value:**

If the template source code is handled by this loader or not



***

### isFresh

Returns true if the template is still fresh.

```php
public isFresh(mixed $name, mixed $time): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The template name |
| `$time` | **mixed** | Timestamp of the last modification time of the<br />cached template |


**Return Value:**

true if the template is fresh, false otherwise



***

### findTemplate

Checks if the template can be found.

```php
protected findTemplate(string $name): string|false|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The template name |


**Return Value:**

The template name or false/null



***

### parseName



```php
protected parseName(mixed $name, mixed $default = self::MAIN_NAMESPACE): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$default` | **mixed** |  |




***

### normalizeName



```php
protected normalizeName(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### validateName



```php
protected validateName(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### isAbsolutePath



```php
private isAbsolutePath(mixed $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
