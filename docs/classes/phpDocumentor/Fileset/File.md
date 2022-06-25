***

# File





* Full name: `\phpDocumentor\Fileset\File`
* Parent class: [`SplFileInfo`](../../SplFileInfo.md)




## Methods


### __construct

Open file for reading, and if it doesn't exist create it.

```php
public __construct(string|\SplFileInfo $file): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string&#124;\SplFileInfo** |  |




***

### getMimeType

Returns the mime type for this file.

```php
public getMimeType(): string
```











***

### fread

Returns the file contents as a string.

```php
public fread(): string
```











***

### getFilenameRelativeToRoot

Returns the filename, relative to the given root.

```php
protected getFilenameRelativeToRoot(string $root_path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root_path` | **string** | The root_path of which this file is composed. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
