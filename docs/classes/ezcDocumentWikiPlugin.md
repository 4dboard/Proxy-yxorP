***

# ezcDocumentWikiPlugin

Visitor for wiki directives

* Full name: `\ezcDocumentWikiPlugin`
* This class is an **Abstract class**

## Properties

### node

Current directive wiki AST node.

```php
protected \ezcDocumentWikiPluginNode $node
```

***

### ast

Complete wiki abstract syntax tree, if this is necessary to render the directive.

```php
protected \ezcDocumentWikiDocumentNode $ast
```

***

### path

Current document base path, especially relevant for file inclusions.

```php
protected string $path
```

***

### visitor

The calling visitor.

```php
protected \ezcDocumentWikiVisitor $visitor
```

***

## Methods

### __construct

Construct directive from AST and node

```php
public __construct(\ezcDocumentWikiDocumentNode $ast, string $path, \ezcDocumentWikiPluginNode $node): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\ezcDocumentWikiDocumentNode** |  |
| `$path` | **string** |  |
| `$node` | **\ezcDocumentWikiPluginNode** |  |

***

### setSourceVisitor

Set the calling vaisitor

```php
public setSourceVisitor(\ezcDocumentWikiVisitor $visitor): void
```

Pass the visitor which called the rendering function on the directive for optional reference.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\ezcDocumentWikiVisitor** |  |

***

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

yxorP::get('REQUEST')
