***

# StreamedCopyTrait





* Full name: `\League\Flysystem\Adapter\Polyfill\StreamedCopyTrait`




## Methods


### copy

Copy a file.

```php
public copy(string $path, string $newpath): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$newpath` | **string** |  |




***

### readStream



```php
public readStream(string $path): resource
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### writeStream



```php
public writeStream(string $path, resource $resource, \League\Flysystem\Config $config): resource
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$resource` | **resource** |  |
| `$config` | **\League\Flysystem\Config** |  |




***

***
> yxorP Documentation

