***

# PhpArray

PHP array loader.



* Full name: `\Zend\I18n\Translator\Loader\PhpArray`
* Parent class: [`\Zend\I18n\Translator\Loader\AbstractFileLoader`](./AbstractFileLoader.md)




## Methods


### load

load(): defined by FileLoaderInterface.

```php
public load(string $locale, string $filename): \Zend\I18n\Translator\TextDomain|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |
| `$filename` | **string** |  |



**See Also:**

* \Zend\I18n\Translator\Loader\FileLoaderInterface::load() - 

***


## Inherited methods


### setUseIncludePath

Indicate whether or not to use the include_path to resolve translation files

```php
public setUseIncludePath(bool $flag = true): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |




***

### useIncludePath

Are we using the include_path to resolve translation files?

```php
public useIncludePath(): bool
```











***

### resolveFile

Resolve a translation file

```php
protected resolveFile(string $filename): string|false
```

Checks if the file exists and is readable, returning a boolean false if not; if the "useIncludePath"
flag is enabled, it will attempt to resolve the file from the
include_path if the file does not exist on the current working path.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***

### resolveViaIncludePath

Resolve a translation file via the include_path

```php
protected resolveViaIncludePath(string $filename): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
