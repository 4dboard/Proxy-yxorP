***

# FileExistsException





* Full name: `\League\Flysystem\FileExistsException`
* Parent class: [`\League\Flysystem\Exception`](./Exception.md)



## Properties


### path



```php
protected string $path
```






***

## Methods


### __construct

Constructor.

```php
public __construct(string $path, int $code, \Exception $previous = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$code` | **int** |  |
| `$previous` | **\Exception** |  |




***

### getPath

Get the path which was found.

```php
public getPath(): string
```











***


***

