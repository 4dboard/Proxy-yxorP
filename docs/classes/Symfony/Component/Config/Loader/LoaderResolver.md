***

# LoaderResolver

LoaderResolver selects a loader for a given resource.

A resource can be anything (e.g. a full path to a config file or a Closure).
Each loader determines whether it can load a resource and how.

* Full name: `\Symfony\Component\Config\Loader\LoaderResolver`
* This class implements:
[`\Symfony\Component\Config\Loader\LoaderResolverInterface`](./LoaderResolverInterface.md)



## Properties


### loaders



```php
private \Symfony\Component\Config\Loader\LoaderInterface[] $loaders
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Config\Loader\LoaderInterface[] $loaders = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loaders` | **\Symfony\Component\Config\Loader\LoaderInterface[]** | An array of loaders |




***

### resolve

Returns a loader able to load the resource.

```php
public resolve(mixed $resource, mixed $type = null): \Symfony\Component\Config\Loader\LoaderInterface|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$type` | **mixed** | The resource type or null if unknown |


**Return Value:**

The loader or false if none is able to load the resource



***

### addLoader



```php
public addLoader(\Symfony\Component\Config\Loader\LoaderInterface $loader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Symfony\Component\Config\Loader\LoaderInterface** |  |




***

### getLoaders

Returns the registered loaders.

```php
public getLoaders(): \Symfony\Component\Config\Loader\LoaderInterface[]
```









**Return Value:**

An array of LoaderInterface instances



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
