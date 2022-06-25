***

# PhpArray





* Full name: `\Zend\Config\Writer\PhpArray`
* Parent class: [`\Zend\Config\Writer\AbstractWriter`](./AbstractWriter.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INDENT_STRING`|public|string|&#039;    &#039;|

## Properties


### useBracketArraySyntax



```php
protected bool $useBracketArraySyntax
```






***

## Methods


### processConfig

processConfig(): defined by AbstractWriter.

```php
public processConfig(array $config): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### setUseBracketArraySyntax

Sets whether or not to use the PHP 5.4+ "[]" array syntax.

```php
public setUseBracketArraySyntax(bool $value): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **bool** |  |




***

### toFile

toFile(): defined by Writer interface.

```php
public toFile(string $filename, mixed $config, bool $exclusiveLock = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **mixed** |  |
| `$exclusiveLock` | **bool** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toFile() - 

***

### processIndented

Recursively processes a PHP config array structure into a readable format.

```php
protected processIndented(array $config, array $arraySyntax, int& $indentLevel = 1): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |
| `$arraySyntax` | **array** |  |
| `$indentLevel` | **int** |  |




***


## Inherited methods


### toFile

toFile(): defined by Writer interface.

```php
public toFile(string $filename, mixed $config, bool $exclusiveLock = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **mixed** |  |
| `$exclusiveLock` | **bool** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toFile() - 

***

### toString

toString(): defined by Writer interface.

```php
public toString(mixed $config): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toString() - 

***

### processConfig



```php
protected processConfig(array $config): string
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
