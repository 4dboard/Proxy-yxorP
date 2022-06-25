***

# Xsl

XSL transformation writer; generates static HTML out of the structure and XSL templates.



* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Xsl`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../../Transformer/Writer/WriterAbstract.md)
* This class implements:
[`\phpDocumentor\Transformer\Writer\Routable`](../../../../Transformer/Writer/Routable.md)



## Properties


### logger



```php
protected \Monolog\Logger $logger
```






***

### xsl_variables



```php
protected string[] $xsl_variables
```






***

### routers



```php
private \phpDocumentor\Transformer\Router\Queue $routers
```






***

## Methods


### __construct

Initialize this writer with the logger so that it can output logs.

```php
public __construct(\Monolog\Logger $logger): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** |  |




***

### checkRequirements

Checks whether XSL handling is enabled with PHP as that is not enabled by default.

```php
public checkRequirements(): void
```

To enable XSL handling you need either the xsl extension or the xslcache extension installed.









***

### setRouters

Sets the routers that can be used to determine the path of links.

```php
public setRouters(\phpDocumentor\Transformer\Router\Queue $routers): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$routers` | **\phpDocumentor\Transformer\Router\Queue** |  |




***

### transform

This method combines the structure.xml and the given target template
and creates a static html page at the artifact location.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***

### getXsltUriFromFilename

Takes the filename and converts it into a correct URI for XSLTProcessor.

```php
protected getXsltUriFromFilename(string $filename): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***

### setProcessorParameters

Sets the parameters of the XSLT processor.

```php
public setProcessorParameters(\phpDocumentor\Transformer\Transformation $transformation, \XSLTProcessor $proc): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation. |
| `$proc` | **\XSLTProcessor** | XSLTProcessor. |




***

### getXslProcessor



```php
protected getXslProcessor(\phpDocumentor\Transformer\Transformation $transformation): \XSLTCache|\XSLTProcessor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### loadAst



```php
private loadAst( $structureFilename): \DOMDocument
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$structureFilename` | **** |  |




***

### registerDefaultVariables



```php
private registerDefaultVariables(\phpDocumentor\Transformer\Transformation $transformation,  $proc,  $structure): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |
| `$proc` | **** |  |
| `$structure` | **** |  |




***

### writeToFile



```php
private writeToFile( $filename,  $proc,  $structure): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **** |  |
| `$proc` | **** |  |
| `$structure` | **** |  |




***

### getAstPath



```php
private getAstPath(\phpDocumentor\Transformer\Transformation $transformation): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### getArtifactPath

Returns the path to the location where the artifact should be written, or null to automatically detect the
location using the router.

```php
private getArtifactPath(\phpDocumentor\Transformer\Transformation $transformation): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### generateUrlForXmlElement



```php
private generateUrlForXmlElement(\phpDocumentor\Descriptor\ProjectDescriptor $project,  $element): false|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$element` | **** |  |




***


## Inherited methods


### checkRequirements

This method verifies whether PHP has all requirements needed to run this writer.

```php
public checkRequirements(): void
```

If one of the requirements is missing for this Writer then an exception of type RequirementMissing
should be thrown; this indicates to the calling process that this writer will not function.









***

### checkForSpacesInPath

Checks if there is a space in the path.

```php
protected checkForSpacesInPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### transform

Abstract definition of the transformation method.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
