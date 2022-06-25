***

# ExecutableFinder

Generic executable finder.



* Full name: `\Symfony\Component\Process\ExecutableFinder`



## Properties


### suffixes



```php
private $suffixes
```






***

## Methods


### setSuffixes

Replaces default suffixes of executable.

```php
public setSuffixes(array $suffixes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffixes` | **array** |  |




***

### addSuffix

Adds new possible suffix to check for executable.

```php
public addSuffix(string $suffix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |




***

### find

Finds an executable by name.

```php
public find(string $name, string $default = null, array $extraDirs = array()): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The executable name (without the extension) |
| `$default` | **string** | The default to return if no executable is found |
| `$extraDirs` | **array** | Additional dirs to check into |


**Return Value:**

The executable path or default value



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
