***

# Loader

Loader is the abstract class used by all built-in loaders.



* Full name: `\Symfony\Component\Config\Loader\Loader`
* This class implements:
[`\Symfony\Component\Config\Loader\LoaderInterface`](./LoaderInterface.md)
* This class is an **Abstract class**



## Properties


### resolver



```php
protected $resolver
```






***

## Methods


### getResolver

Gets the loader resolver.

```php
public getResolver(): \Symfony\Component\Config\Loader\LoaderResolverInterface
```









**Return Value:**

A LoaderResolverInterface instance



***

### setResolver

Sets the loader resolver.

```php
public setResolver(\Symfony\Component\Config\Loader\LoaderResolverInterface $resolver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resolver` | **\Symfony\Component\Config\Loader\LoaderResolverInterface** |  |




***

### import

Imports a resource.

```php
public import(mixed $resource, string|null $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$type` | **string&#124;null** | The resource type or null if unknown |




***

### resolve

Finds a loader able to load an imported resource.

```php
public resolve(mixed $resource, string|null $type = null): $this|\Symfony\Component\Config\Loader\LoaderInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$type` | **string&#124;null** | The resource type or null if unknown |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
