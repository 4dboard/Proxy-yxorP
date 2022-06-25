***

# Format

Defines a conversion format in Scrybe.



* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Format\Format`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MARKDOWN`|public| |&#039;markdown&#039;|
|`JSON`|public| |&#039;json&#039;|
|`RST`|public| |&#039;rst&#039;|
|`HTML`|public| |&#039;html&#039;|
|`LATEX`|public| |&#039;latex&#039;|
|`PDF`|public| |&#039;pdf&#039;|
|`DOCBOOK`|public| |&#039;docbook&#039;|

## Properties


### name



```php
protected string $name
```






***

### mime_type



```php
protected string $mime_type
```






***

### extensions



```php
protected string[] $extensions
```






***

## Methods


### __construct

Initializes a new format.

```php
public __construct(string $name, string $mime_type, string|string[] $extensions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$mime_type` | **string** |  |
| `$extensions` | **string&#124;string[]** |  |




***

### setName

Sets the name for this format.

```php
public setName(string $name): void
```

The names of built-in formats are defined as class constants of this class.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getName

Returns the name for this format.

```php
public getName(): string
```











***

### setMimeType

Sets the mime type commonly associated with files of this format.

```php
public setMimeType(string $mime_type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mime_type` | **string** |  |




***

### getMimeType

Returns the Mime type commonly associated with files of this format.

```php
public getMimeType(): string
```











***

### setExtensions

Sets the file extensions commonly associated with files of this format.

```php
public setExtensions(string[] $extensions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensions` | **string[]** |  |




***

### getExtensions

Returns the file extensions commonly associated with files of this format.

```php
public getExtensions(): string[]
```











***

### convertFilename

Converts the given filename to be math this format.

```php
public convertFilename(string $filename): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
