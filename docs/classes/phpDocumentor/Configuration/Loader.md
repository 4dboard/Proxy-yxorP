***

# Loader

Loads the template and user-defined configuration file from disk and creates a Configuration object from it.

This class will merge the template file and the user-defined configuration file together and serialize it into a
configuration object (defaults to `phpDocumentor\Configuration`).

* Full name: `\phpDocumentor\Configuration\Loader`



## Properties


### serializer



```php
private \JMS\Serializer\Serializer $serializer
```






***

### merger



```php
private \phpDocumentor\Configuration\Merger $merger
```






***

## Methods


### __construct

Registers the dependencies with the loader.

```php
public __construct(\JMS\Serializer\Serializer $serializer, \phpDocumentor\Configuration\Merger $merger): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializer` | **\JMS\Serializer\Serializer** | Object used to serialize configuration files to objects. |
| `$merger` | **\phpDocumentor\Configuration\Merger** | Object that merges variables, including objects. |




***

### load

Loads the configuration from the provided paths and returns a populated configuration object.

```php
public load(string $templatePath, string $userConfigurationPath, string $class = &#039;phpDocumentor\Configuration&#039;): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templatePath` | **string** | Path to configuration file containing default settings. |
| `$userConfigurationPath` | **string** | Path to a file containing user overrides. |
| `$class` | **string** | The class to instantiate and populate with these options. |




***

### fetchUserConfigFileFromCommandLineOptions

Reads the `--config`, or `-c`, command line option and returns a path to the configuration file from those
options or false if no existing path was given.

```php
private fetchUserConfigFileFromCommandLineOptions(): bool|string
```











***

### isValidFile

Verifies if the given path is valid and readable.

```php
private isValidFile(bool|string $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **bool&#124;string** |  |




***

### createConfigurationObject

Combines the given configuration files and serializes a new Configuration object from them.

```php
private createConfigurationObject(string $templatePath, string $defaultUserConfigPath, null|bool|string $customUserConfigPath, string $class): null|object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$templatePath` | **string** | Path to the template configuration file. |
| `$defaultUserConfigPath` | **string** | Path to the phpdoc.xml or phpdoc,dist.xml in the current working<br />directory. |
| `$customUserConfigPath` | **null&#124;bool&#124;string** | Path to the user-defined config file given using the command-line. |
| `$class` | **string** | Base Configuration class name to construct and populate. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
