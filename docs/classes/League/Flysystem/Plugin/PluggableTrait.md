***

# PluggableTrait





* Full name: `\League\Flysystem\Plugin\PluggableTrait`



## Properties


### plugins



```php
protected array $plugins
```






***

## Methods


### addPlugin

Register a plugin.

```php
public addPlugin(\League\Flysystem\PluginInterface $plugin): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plugin` | **\League\Flysystem\PluginInterface** |  |




***

### findPlugin

Find a specific plugin.

```php
protected findPlugin(string $method): \League\Flysystem\PluginInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |




***

### invokePlugin

Invoke a plugin by method name.

```php
protected invokePlugin(string $method, array $arguments, \League\Flysystem\FilesystemInterface $filesystem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***

### __call

Plugins pass-through.

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** |  |
| `$arguments` | **array** |  |




***

***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

