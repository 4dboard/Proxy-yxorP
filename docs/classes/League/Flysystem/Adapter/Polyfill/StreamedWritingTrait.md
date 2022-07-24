***

# StreamedWritingTrait





* Full name: `\League\Flysystem\Adapter\Polyfill\StreamedWritingTrait`




## Methods


### stream

Stream fallback delegator.

```php
protected stream(string $path, resource $resource, \League\Flysystem\Config $config, string $fallback): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** |  |
| `$fallback` | **string** |  |


**Return Value:**

fallback result



***

### writeStream

Write using a stream.

```php
public writeStream(string $path, resource $resource, \League\Flysystem\Config $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** |  |


**Return Value:**

false or file metadata



***

### updateStream

Update a file using a stream.

```php
public updateStream(string $path, resource $resource, \League\Flysystem\Config $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** | Config object or visibility setting |


**Return Value:**

false of file metadata



***

### write



```php
public write(mixed $pash, mixed $contents, \League\Flysystem\Config $config): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pash` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

### update



```php
public update(mixed $pash, mixed $contents, \League\Flysystem\Config $config): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pash` | **mixed** |  |
| `$contents` | **mixed** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

