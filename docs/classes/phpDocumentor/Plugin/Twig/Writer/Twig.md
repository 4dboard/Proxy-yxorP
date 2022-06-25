***

# Twig

A specialized writer which uses the Twig templating engine to convert templates to HTML output.

This writer support the Query attribute of a Transformation to generate multiple templates in one transformation.

The Query attribute supports a simplified version of Twig queries and will use each individual result as the 'node'
global variable in the Twig template.

Example:

Suppose a Query `indexes.classes` is given then this writer will be invoked as many times as there are classes in the
project and the
'node' global variable in twig will be filled with each individual class entry.

When using the Query attribute in the transformation it is important to use a variable in the Artifact attribute as
well (otherwise the same file would be overwritten several times).

A simple example transformation line could be:

    ```
    <transformation
        writer="twig"
        source="templates/twig/index.twig"
        artifact="index.html"/>
    ```

    This example transformation would use this writer to transform the
    index.twig template file in the twig template folder into index.html at
    the destination location.
    Since no Query is provided the 'node' global variable will contain
    the Project Descriptor of the Object Graph.

A complex example transformation line could be:

    ```
    <transformation
        query="indexes.classes"
        writer="twig"
        source="templates/twig/class.twig"
        artifact="{{name}}.html"/>
    ```

    This example transformation would use this writer to transform the
    class.twig template file in the twig template folder into a file with
    the 'name' property for an individual class inside the Object Graph.
    Since a Query *is* provided will the 'node' global variable contain a
    specific instance of a class applicable to the current iteration.

* Full name: `\phpDocumentor\Plugin\Twig\Writer\Twig`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../Transformer/Writer/WriterAbstract.md)
* This class implements:
  [`\phpDocumentor\Transformer\Writer\Routable`](../../../Transformer/Writer/Routable.md)

**See Also:**

* \phpDocumentor\Plugin\Twig\Writer\self::getDestinationPath() - for more information about variables in the Artifact
  attribute.

## Properties

### routers

```php
protected \phpDocumentor\Transformer\Router\Queue $routers
```

***

### translator

```php
protected \phpDocumentor\Translator\Translator $translator
```

***

## Methods

### transform

This method combines the ProjectDescriptor and the given target template and creates a static html page at the artifact
location.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |

***

### initializeEnvironment

Initializes the Twig environment with the template, base extension and additionally defined extensions.

```php
protected initializeEnvironment(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation, string $destination): \Twig_Environment
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |
| `$destination` | **string** |  |

***

### addPhpDocumentorExtension

Adds the phpDocumentor base extension to the Twig Environment.

```php
protected addPhpDocumentorExtension(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation, string $destination, \Twig_Environment $twigEnvironment): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |
| `$destination` | **string** |  |
| `$twigEnvironment` | **\Twig_Environment** |  |

***

### addExtensionsFromTemplateConfiguration

Tries to add any custom extensions that have been defined in the template or the transformation's configuration.

```php
protected addExtensionsFromTemplateConfiguration(\phpDocumentor\Transformer\Transformation $transformation, \phpDocumentor\Descriptor\ProjectDescriptor $project, \Twig_Environment $twigEnvironment): void
```

This method will read the `twig-extension` parameter of the transformation (which inherits the template's parameter set)
and try to add those extensions to the environment.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$twigEnvironment` | **\Twig_Environment** |  |

***

### getDestinationPath

Uses the currently selected node and transformation to assemble the destination path for the file.

```php
protected getDestinationPath(\phpDocumentor\Descriptor\DescriptorAbstract $node, \phpDocumentor\Transformer\Transformation $transformation): string|false
```

The Twig writer accepts the use of a Query to be able to generate output for multiple objects using the same template.

The given node is the result of such a query, or if no query given the selected element, and the transformation contains
the destination file.

Since it is important to be able to generate a unique name per element can the user provide a template variable in the
name of the file. Such a template variable always resides between double braces and tries to take the node value of a
given query string.

Example:

An artifact stating `classes/{{name}}.html` will try to find the node 'name' as a child of the given $node and use that
value instead.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\phpDocumentor\Descriptor\DescriptorAbstract** |  |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |

**Return Value:**

returns the destination location or false if generation should be aborted.



***

### getTemplatePath

Returns the path belonging to the template.

```php
protected getTemplatePath(\phpDocumentor\Transformer\Transformation $transformation): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |

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

### setTranslator

```php
public setTranslator(\phpDocumentor\Translator\Translator $translator): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\phpDocumentor\Translator\Translator** |  |

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
