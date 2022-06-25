***

# ezcDocumentPdfFooterPdfPart

Basic foot class, which renders a simple page footer including information from the document.

Configured using the ezcDocumentPdfFooterOptions options class.

A footer, or any other PDF part, can be registered for rendering in the main PDF class using the registerPdfPart()
method, like:

<code>
 $pdf = new ezcDocumentPdf();

// Add a customized footer $pdf->registerPdfPart( new ezcDocumentPdfFooterPdfPart(
new ezcDocumentPdfFooterOptions( array(
'showDocumentTitle' => false,
'showDocumentAuthor' => false,
'height' => '10mm',
) )
) );

$pdf->createFromDocbook( $docbook ); file_put_contents( __FILE__ . '.pdf', $pdf );
</code>

* Full name: `\ezcDocumentPdfFooterPdfPart`
* Parent class: [`\ezcDocumentPdfPart`](./ezcDocumentPdfPart.md)

## Properties

### options

Options of footer

```php
protected \ezcDocumentPdfFooterOptions $options
```

***

### document

Reference to rendered document

```php
protected \DOMDocument $document
```

***

### documentTitle

Extracted title information

```php
protected mixed $documentTitle
```

***

### documentAuthor

Extracted author information

```php
protected mixed $documentAuthor
```

***

## Methods

### __construct

Create a new footer PDF part

```php
public __construct(\ezcDocumentPdfFooterOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentPdfFooterOptions** |  |

***

### hookPageCreation

Hook on page creation

```php
public hookPageCreation(\ezcDocumentPdfPage $page): void
```

Hook called on page creation, so that certain areas might be reserved or it already may render stuff on the frshly
created page.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |

***

### hookDocumentCreation

Hook on document creation

```php
public hookDocumentCreation(\ezcDocumentLocateableDomElement $element): void
```

Hook called when a new document is created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |

***

## Inherited methods

### registerContext

Registration function called by the renderer.

```php
public registerContext(\ezcDocumentPdfMainRenderer $renderer, \ezcDocumentPdfDriver $driver, \ezcDocumentPcssStyleInferencer $styles): void
```

Function called by the renderer, to set its properties, which pass the relevant state objects to the part.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$renderer` | **\ezcDocumentPdfMainRenderer** |  |
| `$driver` | **\ezcDocumentPdfDriver** |  |
| `$styles` | **\ezcDocumentPcssStyleInferencer** |  |

***

### hookPageCreation

Hook on page creation

```php
public hookPageCreation(\ezcDocumentPdfPage $page): void
```

Hook called on page creation, so that certain areas might be reserved or it already may render stuff on the frshly
created page.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |

***

### hookPageRendering

Hook on page rendering

```php
public hookPageRendering(\ezcDocumentPdfPage $page): void
```

Hook called on page rendering, which means, that a page is complete, by all knowledge of the main renderer.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **\ezcDocumentPdfPage** |  |

***

### hookDocumentCreation

Hook on document creation

```php
public hookDocumentCreation(\ezcDocumentLocateableDomElement $element): void
```

Hook called when a new document is created.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentLocateableDomElement** |  |

***

### hookDocumentRendering

Hook on document rendering

```php
public hookDocumentRendering(): void
```

Hook called once a document is completely rendered.

yxorP::get('REQUEST')
