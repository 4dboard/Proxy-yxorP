***

# ServiceProvider

Creates and binds the components for the generation of manuals.

Scrybe is a plugin that allows authors to write documentation in a markup format of their choosing and generate
human-readable documentation from it.

* Full name: `\phpDocumentor\Plugin\Scrybe\ServiceProvider`
* This class implements:
[`\Cilex\ServiceProviderInterface`](../../../Cilex/ServiceProviderInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CONVERTER_FACTORY`|public| |&#039;converter-factory&#039;|
|`TEMPLATE_FACTORY`|public| |&#039;template-factory&#039;|
|`CONVERTER_DEFINITION_FACTORY`|public| |&#039;converter_definition_factory&#039;|
|`FORMATS`|public| |&#039;converter_formats&#039;|
|`CONVERTERS`|public| |&#039;converters&#039;|
|`TEMPLATE_FOLDER`|public| |&#039;template_folder&#039;|


## Methods


### register

Registers services on the given app.

```php
public register(\Cilex\Application $app): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance. |




***

### addCommands

Method responsible for adding the commands for this application.

```php
protected addCommands(\Cilex\Application $app): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
