***

# TableOfContents

This collection manages which headings were discovered during the discovery phase and stores them as entries.



* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents`
* Parent class: [`ArrayObject`](../../../../../ArrayObject.md)



## Properties


### modules

Contains the list of modules for this Table of Contents.

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\Module[] $modules
```






***

## Methods


### offsetGet



```php
public offsetGet(mixed $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |




***

### offsetSet

Override offsetSet to force the use of the relative filename.

```php
public offsetSet(void $index, \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\File $newval): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **void** |  |
| `$newval` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\File** |  |




***

### getModules

Returns the list of modules.

```php
public getModules(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents\Module[]
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
