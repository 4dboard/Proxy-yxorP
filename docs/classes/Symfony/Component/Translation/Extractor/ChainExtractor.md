***

# ChainExtractor

ChainExtractor extracts translation messages from template files.



* Full name: `\Symfony\Component\Translation\Extractor\ChainExtractor`
* This class implements:
[`\Symfony\Component\Translation\Extractor\ExtractorInterface`](./ExtractorInterface.md)



## Properties


### extractors

The extractors.

```php
private \Symfony\Component\Translation\Extractor\ExtractorInterface[] $extractors
```






***

## Methods


### addExtractor

Adds a loader to the translation extractor.

```php
public addExtractor(string $format, \Symfony\Component\Translation\Extractor\ExtractorInterface $extractor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$format` | **string** | The format of the loader |
| `$extractor` | **\Symfony\Component\Translation\Extractor\ExtractorInterface** | The loader |




***

### setPrefix

Sets the prefix that should be used for new found messages.

```php
public setPrefix(mixed $prefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **mixed** | The prefix |




***

### extract

Extracts translation messages from files, a file or a directory to the catalogue.

```php
public extract(mixed $directory, \Symfony\Component\Translation\MessageCatalogue $catalogue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **mixed** |  |
| `$catalogue` | **\Symfony\Component\Translation\MessageCatalogue** | The catalogue |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
