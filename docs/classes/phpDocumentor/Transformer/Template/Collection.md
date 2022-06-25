***

# Collection

Contains a collection of Templates that may be queried.



* Full name: `\phpDocumentor\Transformer\Template\Collection`
* Parent class: [`ArrayObject`](../../../ArrayObject.md)



## Properties


### factory



```php
private \phpDocumentor\Transformer\Template\Factory $factory
```






***

### writerCollection



```php
private \phpDocumentor\Transformer\Writer\Collection $writerCollection
```






***

## Methods


### __construct

Constructs this collection and requires a factory to load templates.

```php
public __construct(\phpDocumentor\Transformer\Template\Factory $factory, \phpDocumentor\Transformer\Writer\Collection $writerCollection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\phpDocumentor\Transformer\Template\Factory** |  |
| `$writerCollection` | **\phpDocumentor\Transformer\Writer\Collection** |  |




***

### load

Loads a template with the given name or file path.

```php
public load(string $nameOrPath): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nameOrPath` | **string** |  |




***

### getTransformations

Returns a list of all transformations contained in the templates of this collection.

```php
public getTransformations(): \phpDocumentor\Transformer\Transformation[]
```











***

### getTemplatesPath

Returns the path where all templates are stored.

```php
public getTemplatesPath(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
