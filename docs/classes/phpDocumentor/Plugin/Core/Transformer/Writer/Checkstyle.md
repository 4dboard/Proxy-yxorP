***

# Checkstyle

Checkstyle transformation writer; generates checkstyle report

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Writer\Checkstyle`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../../Transformer/Writer/WriterAbstract.md)
* This class implements:
  [`\phpDocumentor\Transformer\Writer\Translatable`](../../../../Transformer/Writer/Translatable.md)

## Properties

### translator

```php
protected \phpDocumentor\Translator\Translator $translator
```

***

## Methods

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

## Inherited methods

### checkRequirements

This method verifies whether PHP has all requirements needed to run this writer.

```php
public checkRequirements(): void
```

If one of the requirements is missing for this Writer then an exception of type RequirementMissing should be thrown;
this indicates to the calling process that this writer will not function.









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

yxorP::get('REQUEST')
