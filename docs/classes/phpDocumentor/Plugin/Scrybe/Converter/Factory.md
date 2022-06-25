***

# Factory

This factory attempts to create a converter given an input and output format and return that.

<code>
    use phpDocumentor\Plugin\Scrybe\Converter\ConverterFactory;
    use phpDocumentor\Plugin\Scrybe\Converter\Format\Format;

    $converter_factory = new ConverterFactory();
    $converter = $converter_factory->get(
        Format::MARKDOWN, Format::HTML
    );
<code>

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Factory`



## Properties


### definition_factory



```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory $definition_factory
```






***

### converters



```php
protected \phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface[] $converters
```






***

### logger



```php
protected \Monolog\Logger $logger
```






***

## Methods


### __construct

Constructs a new factory.

```php
public __construct(string[] $converters, \phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory|null $definition_factory, \Monolog\Logger $logger): mixed
```

A Definition\Factory may optionally be passed to provide an alternate method of creating Definitions or to
construct the Definition\Factory with a different Format\Collection to influence the possible options.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converters` | **string[]** |  |
| `$definition_factory` | **\phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory&#124;null** |  |
| `$logger` | **\Monolog\Logger** |  |




***

### get

Retrieves a new instance of the converter necessary to convert the give input format to the given output format.

```php
public get(string $input_format, string $output_format): \phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input_format` | **string** |  |
| `$output_format` | **string** |  |




***

### getSupportedInputFormats

Returns a list of supported input formats for the given output format.

```php
public getSupportedInputFormats(string $given_output_format): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$given_output_format` | **string** | A format definition per the constants in the Format class. |


**Return Value:**

An array of format definitions per the constantst in the Format class.



***

### setConverters

Sets the converters for this Factory.

```php
public setConverters(\phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface[] $converters): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converters` | **\phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface[]** |  |




***

### getDefaultDefinitionFactory

Method used to retrieve the default Definition Factory.

```php
protected getDefaultDefinitionFactory(): \phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory
```

This is used when the user has not provided their own definition factory in the constructor.








**See Also:**

* \phpDocumentor\Plugin\Scrybe\Converter\__construct() - where this method is used.

***

### setDefinitionFactory

Sets the Definition Factory used to retrieve definitions from.

```php
protected setDefinitionFactory(\phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory $definition_factory): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition_factory` | **\phpDocumentor\Plugin\Scrybe\Converter\Definition\Factory** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
