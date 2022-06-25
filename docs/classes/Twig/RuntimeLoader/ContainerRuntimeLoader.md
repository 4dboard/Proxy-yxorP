***

# ContainerRuntimeLoader

Lazily loads Twig runtime implementations from a PSR-11 container.

Note that the runtime services MUST use their class names as identifiers.

* Full name: `\Twig\RuntimeLoader\ContainerRuntimeLoader`
* This class implements:
[`\Twig\RuntimeLoader\RuntimeLoaderInterface`](./RuntimeLoaderInterface.md)



## Properties


### container



```php
private $container
```






***

## Methods


### __construct



```php
public __construct(\Psr\Container\ContainerInterface $container): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Psr\Container\ContainerInterface** |  |




***

### load

Creates the runtime implementation of a Twig element (filter/function/test).

```php
public load(mixed $class): object|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** | A runtime class |


**Return Value:**

The runtime instance or null if the loader does not know how to create the runtime for this class



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
