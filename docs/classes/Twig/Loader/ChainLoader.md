***

# ChainLoader

Loads templates from other loaders.



* Full name: `\Twig\Loader\ChainLoader`
* This class implements:
[`\Twig\Loader\LoaderInterface`](./LoaderInterface.md), [`\Twig\Loader\ExistsLoaderInterface`](./ExistsLoaderInterface.md), [`\Twig\Loader\SourceContextLoaderInterface`](./SourceContextLoaderInterface.md)



## Properties


### hasSourceCache



```php
private $hasSourceCache
```






***

### loaders



```php
protected $loaders
```






***

## Methods


### __construct



```php
public __construct(\Twig\Loader\LoaderInterface[] $loaders = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loaders` | **\Twig\Loader\LoaderInterface[]** |  |




***

### addLoader



```php
public addLoader(\Twig\Loader\LoaderInterface $loader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Twig\Loader\LoaderInterface** |  |




***

### getLoaders



```php
public getLoaders(): \Twig\Loader\LoaderInterface[]
```











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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
