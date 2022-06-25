***

# Factory

Factory class that is able to return a contract between an input and output format (Definition).



* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory`



## Properties


### format_collection



```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Format\Collection $format_collection
```






***

## Methods


### __construct

Registers the available formats for use in creating definitions.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Converter\Format\Collection $formats): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formats` | **\phpDocumentor\Plugin\Scrybe\Converter\Format\Collection** |  |




***

### get

Creates a definition of the given input and output formats.

```php
public get(string $input_format, string $output_format): \phpDocumentor\Plugin\Scrybe\Converter\Definition\Definition
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input_format` | **string** |  |
| `$output_format` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
