***

# NotSupportedException





* Full name: `\League\Flysystem\NotSupportedException`
* Parent class: [`RuntimeException`](../../RuntimeException.md)
* This class implements:
[`\League\Flysystem\FilesystemException`](./FilesystemException.md)




## Methods


### forLink

Create a new exception for a link.

```php
public static forLink(\SplFileInfo $file): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\SplFileInfo** |  |




***

### forFtpSystemType

Create a new exception for a link.

```php
public static forFtpSystemType(string $systemType): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$systemType` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
