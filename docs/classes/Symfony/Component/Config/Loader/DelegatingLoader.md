***

# DelegatingLoader

DelegatingLoader delegates loading to other loaders using a loader resolver.

This loader acts as an array of LoaderInterface objects - each having
a chance to load a given resource (handled by the resolver)

* Full name: `\Symfony\Component\Config\Loader\DelegatingLoader`
* Parent class: [`\Symfony\Component\Config\Loader\Loader`](./Loader.md)




## Methods


### __construct



```php
public __construct(\Symfony\Component\Config\Loader\LoaderResolverInterface $resolver): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resolver` | **\Symfony\Component\Config\Loader\LoaderResolverInterface** |  |




***

### load

{@inheritdoc}

```php
public load(mixed $resource, mixed $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |
| `$type` | **mixed** |  |




***

### supports

{@inheritdoc}

```php
public supports(mixed $resource, mixed $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |
| `$type` | **mixed** |  |




***


## Inherited methods


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
