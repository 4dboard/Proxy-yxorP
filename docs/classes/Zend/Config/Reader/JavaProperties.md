***

# JavaProperties

Java-style properties config reader.



* Full name: `\Zend\Config\Reader\JavaProperties`
* This class implements:
[`\Zend\Config\Reader\ReaderInterface`](./ReaderInterface.md)



## Properties


### directory

Directory of the Java-style properties file

```php
protected string $directory
```






***

## Methods


### fromFile

fromFile(): defined by Reader interface.

```php
public fromFile(string $filename): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |



**See Also:**

* \Zend\Config\Reader\ReaderInterface::fromFile() - 

***

### fromString

fromString(): defined by Reader interface.

```php
public fromString(string $string): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |



**See Also:**

* \Zend\Config\Reader\ReaderInterface::fromString() - 

***

### process

Process the array for @include

```php
protected process(array $data): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### parse

Parse Java-style properties string

```php
protected parse(string $string): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
