***

# Ini

INI config reader.



* Full name: `\Zend\Config\Reader\Ini`
* This class implements:
[`\Zend\Config\Reader\ReaderInterface`](./ReaderInterface.md)



## Properties


### nestSeparator

Separator for nesting levels of configuration data identifiers.

```php
protected string $nestSeparator
```






***

### directory

Directory of the file to process.

```php
protected string $directory
```






***

## Methods


### setNestSeparator

Set nest separator.

```php
public setNestSeparator(string $separator): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** |  |




***

### getNestSeparator

Get nest separator.

```php
public getNestSeparator(): string
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




***

### process

Process data from the parsed ini file.

```php
protected process(array $data): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### buildNestedSection

Process a nested section

```php
private buildNestedSection(array $sections, mixed $value): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sections` | **array** |  |
| `$value` | **mixed** |  |




***

### processSection

Process a section.

```php
protected processSection(array $section): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$section` | **array** |  |




***

### processKey

Process a key.

```php
protected processKey(string $key, string $value, array& $config): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **string** |  |
| `$config` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
