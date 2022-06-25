***

# ServiceProvider

This provider is responsible for registering the parser component with the given Application.



* Full name: `\phpDocumentor\Parser\ServiceProvider`
* This class implements:
[`\Cilex\ServiceProviderInterface`](../../Cilex/ServiceProviderInterface.md)




## Methods


### register

Registers services on the given app.

```php
public register(\Cilex\Application $app): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Cilex\Application** | An Application instance |




***

### validateDocBlocks

Checks all phpDocumentor whether they match the given rules.

```php
public validateDocBlocks(\phpDocumentor\Reflection\Event\PostDocBlockExtractionEvent $data): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **\phpDocumentor\Reflection\Event\PostDocBlockExtractionEvent** | Event object containing the parameters. |




***

### loadConfiguration

Load the configuration from the plugin.xml file

```php
protected loadConfiguration(): array
```











***

### loadConfigurationByElement

Load the configuration for given element (deprecated/required)

```php
protected loadConfigurationByElement(array $configOptions, string $configType): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configOptions` | **array** | The configuration from the plugin.xml file |
| `$configType` | **string** | Required/Deprecated for the time being |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
