***

# TestFileLoader

FileLoader is the abstract class used by all built-in loaders that are file based.



* Full name: `\Symfony\Component\Config\Tests\Loader\TestFileLoader`
* Parent class: [`\Symfony\Component\Config\Loader\FileLoader`](../../Loader/FileLoader.md)



## Properties


### supports



```php
private $supports
```






***

## Methods


### load



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



```php
public supports(mixed $resource, mixed $type = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |
| `$type` | **mixed** |  |




***

### addLoading



```php
public addLoading(mixed $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### removeLoading



```php
public removeLoading(mixed $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### clearLoading



```php
public clearLoading(): mixed
```











***

### setSupports



```php
public setSupports(mixed $supports): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$supports` | **mixed** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Symfony\Component\Config\FileLocatorInterface $locator): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locator` | **\Symfony\Component\Config\FileLocatorInterface** |  |




***

### setCurrentDir

Sets the current directory.

```php
public setCurrentDir(string $dir): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dir` | **string** |  |




***

### getLocator

Returns the file locator used by this loader.

```php
public getLocator(): \Symfony\Component\Config\FileLocatorInterface
```











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
