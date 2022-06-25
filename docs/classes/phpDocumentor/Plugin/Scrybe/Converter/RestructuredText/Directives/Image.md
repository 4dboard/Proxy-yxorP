***

# Image

Directive used to process `.. image::` and collect images as assets to be copied.

The filenames of the images are taken from the directive and added onto the assets collection during the discovery
phase. These assets may then be copied to the destination location by the invoker.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives\Image`
* Parent class: [`\ezcDocumentRstImageDirective`](../../../../../../ezcDocumentRstImageDirective.md)

**See Also:**

* \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets -

## Properties

### visitor

```php
protected \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Visitors\Discover $visitor
```

***

## Methods

### toDocbook

Converts the Image directive to aDocBook image tag.

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

This method takes an image directive and converts it into its DocBook representation and stores a reference in the Asset
manager of the Converter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

**See Also:**

* \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives\ConverterInterface::getAssets() - for the asset
  manager

***

### toXhtml

Converts the Image directive to an <img/> tag.

```php
public toXhtml(\DOMDocument $document, \DOMElement $root): void
```

This method takes an image directive and converts it into its HTML representation and stores a reference in the Asset
manager of the Converter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

**See Also:**

* \phpDocumentor\Plugin\Scrybe\Converter\RestructuredText\Directives\ConverterInterface::getAssets() - for the asset
  manager

***

### storeAsset

Stores the asset in the asset manager.

```php
protected storeAsset(): void
```

This method takes an asset defined in the directive and stores that in the asset manager.

The following rules apply:

1. The source of the asset is the relative path of the asset prefixed with a path based on the following rules:

    1. If the asset starts with a slash then the path is calculated from the project's root or
    2. if the asset does not start with a slash then the path is calculated from the file's directory.

2. the destination of the asset is the path relative to the project root.

    1. When the asset starts with a slash then this equals that path without the leading slash.
    2. If not, the destination must be calculated by subtracting the project root from the current file's path and
       prepending that to the asset path (resolving `../` patterns in the mean time).

***

### getAssetManager

Returns the asset manager.

```php
protected getAssetManager(): \phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets
```

***

## Inherited methods

### toDocbook

Transform directive to docbook

```php
public toDocbook(\DOMDocument $document, \DOMElement $root): void
```

Create a docbook XML structure at the directives position in the document.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

***

### toXhtmlObject

Create iframe for media object

```php
protected toXhtmlObject(\DOMDocument $document, \DOMElement $root): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

***

### toXhtmlImage

Create common img element for media object

```php
protected toXhtmlImage(\DOMDocument $document, \DOMElement $root): void
```

For all images we use the common <img> XHtml element.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

***

### toXhtml

Transform directive to HTML

```php
public toXhtml(\DOMDocument $document, \DOMElement $root): void
```

Create a XHTML structure at the directives position in the document.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\DOMDocument** |  |
| `$root` | **\DOMElement** |  |

***

### __construct

Construct directive from AST and node

```php
public __construct(\ezcDocumentRstDocumentNode $ast, string $path, \ezcDocumentRstDirectiveNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentRstDocumentNode** |  |
| `$path` | **string** |  |
| `$node` | **\ezcDocumentRstDirectiveNode** |  |

***

### setSourceVisitor

Set the calling vaisitor

```php
public setSourceVisitor(\ezcDocumentRstVisitor $visitor): void
```

Pass the visitor which called the rendering function on the directive for optional reference.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentRstVisitor** |  |

***

### parseTokens

Parse directive token list with RST parser

```php
protected parseTokens(array $tokens, \ezcDocumentRstVisitor $visitor): \DOMDocument
```

This method is intended to parse the token list, provided for the RST contents using the standard RST parser. It will be
visited afterwards by the provided RST-visitor implementation.

The method returns the created document as a DOMDocument. You normally need to use DOMDocument::importNode to embed the
conatined nodes in your target document.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$visitor` | **\ezcDocumentRstVisitor** |  |

yxorP::get('REQUEST')
