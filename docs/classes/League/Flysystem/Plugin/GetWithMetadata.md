***

# GetWithMetadata





* Full name: `\League\Flysystem\Plugin\GetWithMetadata`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)




## Methods


### getMethod

Get the method name.

```php
public getMethod(): string
```











***

### handle

Get metadata for an object with required metadata.

```php
public handle(string $path, string[] $metadata): array|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | path to file |
| `$metadata` | **string[]** | metadata keys |


**Return Value:**

metadata



***


## Inherited methods


### setFilesystem

Set the Filesystem object.

```php
public setFilesystem(\League\Flysystem\FilesystemInterface $filesystem): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filesystem` | **\League\Flysystem\FilesystemInterface** |  |




***


***

