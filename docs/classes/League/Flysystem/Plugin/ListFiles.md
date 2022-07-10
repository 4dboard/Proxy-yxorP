***

# ListFiles





* Full name: `\League\Flysystem\Plugin\ListFiles`
* Parent class: [`\League\Flysystem\Plugin\AbstractPlugin`](./AbstractPlugin.md)




## Methods


### getMethod

Get the method name.

```php
public getMethod(): string
```











***

### handle

List all files in the directory.

```php
public handle(string $directory = &#039;&#039;, bool $recursive = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |
| `$recursive` | **bool** |  |




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

