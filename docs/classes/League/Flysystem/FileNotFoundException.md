***

# FileNotFoundException





* Full name: `\League\Flysystem\FileNotFoundException`
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

Get the path which was not found.

```php
public getPath(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
