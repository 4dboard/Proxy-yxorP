***

# Processor

This class is the entry point for config normalization/merging/finalization.



* Full name: `\Symfony\Component\Config\Definition\Processor`




## Methods


### process

Processes an array of configurations.

```php
public process(\Symfony\Component\Config\Definition\NodeInterface $configTree, array $configs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configTree` | **\Symfony\Component\Config\Definition\NodeInterface** | The node tree describing the configuration |
| `$configs` | **array** | An array of configuration items to process |


**Return Value:**

The processed configuration



***

### processConfiguration

Processes an array of configurations.

```php
public processConfiguration(\Symfony\Component\Config\Definition\ConfigurationInterface $configuration, array $configs): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\Symfony\Component\Config\Definition\ConfigurationInterface** | The configuration class |
| `$configs` | **array** | An array of configuration items to process |


**Return Value:**

The processed configuration



***

### normalizeConfig

Normalizes a configuration entry.

```php
public static normalizeConfig(array $config, string $key, string $plural = null): array
```

This method returns a normalize configuration array for a given key
to remove the differences due to the original format (YAML and XML mainly).

Here is an example.

The configuration in XML:

<twig:extension>twig.extension.foo</twig:extension>
<twig:extension>twig.extension.bar</twig:extension>

And the same configuration in YAML:

extensions: ['twig.extension.foo', 'twig.extension.bar']

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** | A config array |
| `$key` | **string** | The key to normalize |
| `$plural` | **string** | The plural form of the key if it is irregular |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
