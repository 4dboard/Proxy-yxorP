***

# Extension

Basic extension adding phpDocumentor specific functionality for Twig templates.

Global variables:

- *ast_node*, the current $data element

Functions:

- *path(string) *, converts the given relative path to be based of the projects root instead of the current directory

Filters:

- *markdown*, converts the associated text from Markdown formatting to HTML.
- *trans*, translates the given string
- *route*, attempts to generate a URL for a given Descriptor
- *sort_desc*, sorts the given objects by their Name property/getter in a descending fashion
- *sort_asc*, sorts the given objects by their Name property/getter in a ascending fashion

* Full name: `\phpDocumentor\Plugin\Twig\Extension`
* Parent class: [`\Twig_Extension`](../../../Twig_Extension.md)
* This class implements:
  [`\phpDocumentor\Plugin\Twig\ExtensionInterface`](./ExtensionInterface.md)
  , [`\Twig_Extension_GlobalsInterface`](../../../Twig_Extension_GlobalsInterface.md)

## Properties

### data

```php
protected \phpDocumentor\Descriptor\ProjectDescriptor $data
```

***

### translator

```php
protected \phpDocumentor\Translator\Translator $translator
```

***

### routeRenderer

```php
protected \phpDocumentor\Transformer\Router\Renderer $routeRenderer
```

***

## Methods

### __construct

Registers the structure and transformation with this extension.

```php
public __construct(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Represents the complete Abstract Syntax Tree. |
| `$transformation` | **
\phpDocumentor\Transformer\Transformation** | Represents the transformation meta data used in the current generation<br />cycle. |

***

### setRouters

Sets the router used to render the URL where a Descriptor can be found.

```php
public setRouters(\phpDocumentor\Transformer\Router\Queue $routers): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$routers` | **\phpDocumentor\Transformer\Router\Queue** |  |

***

### setTranslator

Sets the translation component.

```php
public setTranslator(\phpDocumentor\Translator\Translator $translator): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\phpDocumentor\Translator\Translator** |  |

***

### setDestination

Sets the destination directory relative to the Project's Root.

```php
public setDestination(string $destination): void
```

The destination is the target directory containing the resulting file. This destination is relative to the Project's
root and can be used for the calculation of nesting depths, etc.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **string** |  |

**See Also:**

* \phpDocumentor\Plugin\Twig\phpDocumentor\Plugin\Twig\Transformer\Writer\Twig - for the invocation of this method.

***

### getDestination

Returns the target directory relative to the Project's Root.

```php
public getDestination(): string
```

***

### getGlobals

Returns an array of global variables to inject into a Twig template.

```php
public getGlobals(): array
```

***

### getFunctions

Returns a listing of all functions that this extension adds.

```php
public getFunctions(): \Twig_FunctionInterface[]
```

This method is automatically used by Twig upon registering this extension (which is done automatically by phpDocumentor)
to determine an additional list of functions.

See the Class' DocBlock for a listing of functionality added by this Extension.









***

### getFilters

Returns a list of all filters that are exposed by this extension.

```php
public getFilters(): \Twig_SimpleFilter[]
```

***

### convertToRootPath

Converts the given path to be relative to the root of the documentation target directory.

```php
public convertToRootPath(string $relative_path): string
```

It is not possible to use absolute paths in documentation templates since they may be used locally, or in a subfolder.
As such we need to calculate the number of levels to go up from the current document's directory and then append the
given path.

For example:

    Suppose you are in <root>/classes/my/class.html and you want open
    <root>/my/index.html then you provide 'my/index.html' to this method
    and it will convert it into ../../my/index.html (<root>/classes/my is
    two nesting levels until the root).

This method does not try to normalize or optimize the paths in order to save on development time and performance, and
because it adds no real value.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$relative_path` | **string** |  |

***

## Inherited methods

### initRuntime

Initializes the runtime environment.

```php
public initRuntime(\Twig\Environment $environment): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$environment` | **\Twig\Environment** |  |

***

### getTokenParsers

Returns the token parser instances to add to the existing list.

```php
public getTokenParsers(): \Twig\TokenParser\TokenParserInterface[]
```

***

### getNodeVisitors

Returns the node visitor instances to add to the existing list.

```php
public getNodeVisitors(): \Twig\NodeVisitor\NodeVisitorInterface[]
```

***

### getFilters

Returns a list of filters to add to the existing list.

```php
public getFilters(): \Twig\TwigFilter[]
```

***

### getTests

Returns a list of tests to add to the existing list.

```php
public getTests(): \Twig\TwigTest[]
```

***

### getFunctions

Returns a list of functions to add to the existing list.

```php
public getFunctions(): \Twig\TwigFunction[]
```

***

### getOperators

Returns a list of operators to add to the existing list.

```php
public getOperators(): array[]
```

**Return Value:**

First array of unary operators, second array of binary operators



***

### getGlobals

Returns a list of global variables to add to the existing list.

```php
public getGlobals(): array
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

An array of global variables



***

### getName

Returns the name of the extension.

```php
public getName(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

The extension name yxorP::get('REQUEST')
