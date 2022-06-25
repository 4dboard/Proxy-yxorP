***

# Statistics

Statistics transformation writer; generates statistic report as XML.

Generated XML structure:
```
 <?xml version="1.0"?>
 <phpdoc-stats version="2.4.0">
   <stat date="2014-06-02T19:26:15+02:00">
     <counters>
       <deprecated>100</deprecated>
       <errors>377</errors>
       <markers>2</markers>
     </counters>
   </stat>
 </phpdoc-stats>
```

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Statistics`
* Parent class: [`\phpDocumentor\Plugin\Core\Transformer\Writer\Checkstyle`](./Checkstyle.md)




## Methods


### transform

This method generates the checkstyle.xml report

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***

### appendPhpdocStatsElement

Append phpdoc-stats element to the document.

```php
protected appendPhpdocStatsElement(\DOMDocument $document): \DOMDocument
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |




***

### appendStatElement

Appends a stat fragment.

```php
protected appendStatElement(\DOMDocument $document, \phpDocumentor\Descriptor\ProjectDescriptor $project, string $date): \DOMDocument
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$date` | **string** |  |




***

### getFilesCounter

Get number of files.

```php
protected getFilesCounter(\phpDocumentor\Descriptor\ProjectDescriptor $project): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### getDeprecatedCounter

Get number of deprecated elements.

```php
protected getDeprecatedCounter(\phpDocumentor\Descriptor\ProjectDescriptor $project): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### getErrorCounter

Get number of errors.

```php
protected getErrorCounter(\phpDocumentor\Descriptor\ProjectDescriptor $project): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***

### getMarkerCounter

Get number of markers.

```php
protected getMarkerCounter(\phpDocumentor\Descriptor\ProjectDescriptor $project): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |




***


## Inherited methods


### getTranslator

Returns an instance of the object responsible for translating content.

```php
public getTranslator(): \phpDocumentor\Translator\Translator
```











***

### setTranslator

Sets a new object capable of translating strings on this writer.

```php
public setTranslator(\phpDocumentor\Translator\Translator $translator): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\phpDocumentor\Translator\Translator** |  |




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

### getDestinationPath

Retrieves the destination location for this artifact.

```php
protected getDestinationPath(\phpDocumentor\Transformer\Transformation $transformation): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### saveCheckstyleReport

Save the checkstyle report to the artifact

```php
protected saveCheckstyleReport(string $artifact, \DOMDocument $document): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$artifact` | **string** | Target name for the report |
| `$document` | **\DOMDocument** | The actual xml document being saved |




***

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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
