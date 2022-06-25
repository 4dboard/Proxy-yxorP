***

# BaseConverter

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\BaseConverter`
* This class implements:
  [`\phpDocumentor\Plugin\Scrybe\Converter\ConverterInterface`](./ConverterInterface.md)
* This class is an **Abstract class**

## Properties

### definition

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Definition\Definition $definition
```

***

### options

```php
protected string[] $options
```

***

### fileset

```php
protected \phpDocumentor\Fileset\Collection $fileset
```

***

### assets

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets $assets
```

***

### toc

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents $toc
```

***

### glossary

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Glossary $glossary
```

***

### logger

```php
protected \Monolog\Logger $logger
```

***

## Methods

### __construct

Initializes this converter and sets the definition.

```php
public __construct(\phpDocumentor\Plugin\Scrybe\Converter\Definition\Definition $definition, \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets $assets, \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents $tableOfContents, \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Glossary $glossary): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\phpDocumentor\Plugin\Scrybe\Converter\Definition\Definition** |  |
| `$assets` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets** |  |
| `$tableOfContents` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents** |  |
| `$glossary` | **\phpDocumentor\Plugin\Scrybe\Converter\Metadata\Glossary** |  |

***

### setLogger

Set a logger for this converter.

```php
public setLogger(\Monolog\Logger $logger): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** |  |

***

### getAssets

Returns the AssetManager that keep track of which assets are used.

```php
public getAssets(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets
```

***

### getTableOfContents

Returns the table of contents object that keeps track of all headings and their titles.

```php
public getTableOfContents(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\TableOfContents
```

***

### getGlossary

Returns the glossary object that keeps track of all the glossary terms that have been provided.

```php
public getGlossary(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Glossary
```

***

### getDefinition

Returns the definition for this Converter.

```php
public getDefinition(): \phpDocumentor\Plugin\Scrybe\Converter\Definition\Definition
```

***

### setOption

Sets an option with the given name.

```php
public setOption(string $name, string $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **string** |  |

***

### getOption

Returns the option with the given name or null if the option does not exist.

```php
public getOption(string $name): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### configure

Configures and initializes the subcomponents specific to this converter.

```php
public configure(): void
```

***

### discover

Discovers the data that is spanning all files.

```php
protected discover(): void
```

This method tries to find any data that needs to be collected before the actual creation and substitution phase begins.

Examples of data that needs to be collected during an initial phase is a table of contents, list of document titles for
references, assets and more.

* This method is **abstract**.

**See Also:**

* manual://extending#build_cycle - for more information regarding the build process.

***

### create

Converts the input files into one or more output files in the intended format.

```php
protected create(\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface $template): string[]|null
```

This method reads the files, converts them into the correct format and returns the contents of the conversion.

The template is used to decorate the individual files and can be obtained using
the `\phpDocumentor\Plugin\Scrybe\Template\Factory` class.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface** |  |

**Return Value:**

The contents of the resulting file(s) or null if the files are written directly to file.

**See Also:**

* manual://extending#build_cycle - for more information regarding the build process.

***

### convert

Converts the given $source using the formats that belong to this converter.

```php
public convert(\phpDocumentor\Fileset\Collection $source, \phpDocumentor\Plugin\Scrybe\Template\TemplateInterface $template): string[]|null
```

This method will return null unless the 'scrybe://result' is used.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\phpDocumentor\Fileset\Collection** | Collection of input files. |
| `$template` | **
\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface** | Template used to decorate the<br />output with. |

***

### addTemplateAssets

Adds the assets of the template to the Assets manager.

```php
protected addTemplateAssets(\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface $template): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **\phpDocumentor\Plugin\Scrybe\Template\TemplateInterface** |  |

***

### getDestinationFilename

Returns the filename used for the output path.

```php
protected getDestinationFilename(\phpDocumentor\Fileset\File $file): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\phpDocumentor\Fileset\File** |  |

***

### getDestinationFilenameRelativeToProjectRoot

Returns the filename relative to the Project Root of the fileset.

```php
public getDestinationFilenameRelativeToProjectRoot(\phpDocumentor\Fileset\File $file): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **\phpDocumentor\Fileset\File** |  |

***

### getLogger

Returns the logger for this converter.

```php
protected getLogger(): \Monolog\Logger
```

yxorP::get('REQUEST')
