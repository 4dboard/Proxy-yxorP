***

# ezcDocumentRstDirective

Visitor for RST directives

* Full name: `\ezcDocumentRstDirective`
* This class is an **Abstract class**

## Properties

### node

Current directive RST AST node.

```php
protected \ezcDocumentRstDirectiveNode $node
```

***

### ast

Complete RST abstract syntax tree, if this is necessary to render the directive.

```php
protected \ezcDocumentRstDocumentNode $ast
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
protected \ezcDocumentRstVisitor $visitor
```

***

## Methods

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
