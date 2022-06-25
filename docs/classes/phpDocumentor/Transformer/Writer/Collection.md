***

# Collection

A collection of Writer objects.

In this collection we can receive writers, and if they implement the Routable interface assign the router queue that
was provided to this class so that those writers can generate urls for various Descriptors.

In addition this class can also verify if all requirements for the various writers in it are met.

* Full name: `\phpDocumentor\Transformer\Writer\Collection`
* Parent class: [`ArrayObject`](../../../ArrayObject.md)



## Properties


### routers



```php
protected \phpDocumentor\Transformer\Router\Queue $routers
```






***

## Methods


### __construct

Initializes this writer collection with the necessary requirements.

```php
public __construct(\phpDocumentor\Transformer\Router\Queue $routers): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$routers` | **\phpDocumentor\Transformer\Router\Queue** | A series of routers, in order of importance, that are used to generate urls with. |




***

### offsetSet

Registers a writer with a given name.

```php
public offsetSet(string $index, \phpDocumentor\Transformer\Writer\WriterAbstract $newval): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string** | a Writer&#039;s name, must be at least 3<br />characters, alphanumeric and/or contain one or more hyphens,<br />underscores and forward slashes. |
| `$newval` | **\phpDocumentor\Transformer\Writer\WriterAbstract** | The Writer object to register to this name. |




***

### offsetGet

Retrieves a writer from the collection.

```php
public offsetGet(string $index): \phpDocumentor\Transformer\Writer\WriterAbstract
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string** | the name of the writer to retrieve. |




***

### checkRequirements

Iterates over each writer in this collection and checks its requirements.

```php
public checkRequirements(): void
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
