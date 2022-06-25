***

# Collection

A Collection containing all different text-bases file formats that are supported by Scrybe, their mmime-types and
available extensions.



* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Format\Collection`
* Parent class: [`ArrayObject`](../../../../../ArrayObject.md)




## Methods


### __construct

Constructs this collection with a default set of formats if none are given.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Converter\Format\Format[]|null $input = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\phpDocumentor\Plugin\Scrybe\Converter\Format\Format[]&#124;null** |  |




***

### offsetGet

Finds a format by the given name or throws an exception if that index is not found.

```php
public offsetGet(string $index): \phpDocumentor\Plugin\Scrybe\Converter\Format\Format
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
