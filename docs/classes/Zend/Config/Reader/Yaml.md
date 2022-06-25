***

# Yaml

YAML config reader.



* Full name: `\Zend\Config\Reader\Yaml`
* This class implements:
[`\Zend\Config\Reader\ReaderInterface`](./ReaderInterface.md)



## Properties


### directory

Directory of the YAML file

```php
protected string $directory
```






***

### yamlDecoder

YAML decoder callback

```php
protected callable $yamlDecoder
```






***

## Methods


### __construct

Constructor

```php
public __construct(callable $yamlDecoder = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yamlDecoder` | **callable** |  |




***

### setYamlDecoder

Set callback for decoding YAML

```php
public setYamlDecoder(string|callable $yamlDecoder): \Zend\Config\Reader\Yaml
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yamlDecoder` | **string&#124;callable** | the decoder to set |




***

### getYamlDecoder

Get callback for decoding YAML

```php
public getYamlDecoder(): callable
```











***

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
public fromString(string $string): array|bool
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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
