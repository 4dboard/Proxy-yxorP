***

# Factory

* Full name: `\phpDocumentor\Transformer\Template\Factory`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TEMPLATE_DEFINITION_FILENAME`|public| |&#039;template.xml&#039;|

## Properties

### serializer

```php
private \JMS\Serializer\Serializer $serializer
```

***

### pathResolver

```php
private \phpDocumentor\Transformer\Template\PathResolver $pathResolver
```

***

## Methods

### __construct

Constructs a new template factory with its dependencies.

```php
public __construct(\phpDocumentor\Transformer\Template\PathResolver $pathResolver, \JMS\Serializer\Serializer $serializer): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pathResolver` | **\phpDocumentor\Transformer\Template\PathResolver** |  |
| `$serializer` | **\JMS\Serializer\Serializer** | Serializer used to convert the XML files to models. |

***

### get

Attempts to find, construct and return a template object with the given template name or (relative/absolute)
path.

```php
public get(string $nameOrPath): \phpDocumentor\Transformer\Template
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nameOrPath` | **string** |  |

***

### getAllNames

Returns a list of all template names.

```php
public getAllNames(): string[]
```

***

### getTemplatePath

Returns the path where all templates are stored.

```php
public getTemplatePath(): string
```

***

### fetchTemplateXmlFromPath

Loads the template definition file from the given path and returns it's contents.

```php
protected fetchTemplateXmlFromPath(string $path): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |

***

### createTemplateFromXml

Creates and returns a template object based on the provided template definition.

```php
protected createTemplateFromXml(string $xml): \phpDocumentor\Transformer\Template
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xml` | **string** |  |

yxorP::get('REQUEST')
