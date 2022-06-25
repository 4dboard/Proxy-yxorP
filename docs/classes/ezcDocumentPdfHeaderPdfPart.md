***

# ezcDocumentPdfHeaderPdfPart

Just an alias for the footer class, but will be positioned on the top of a page by default.

A header, or any other PDF part, can be registered for rendering in the main PDF class using the registerPdfPart()
method, like:

<code>
 $pdf = new ezcDocumentPdf();

// Add a customized footer $pdf->registerPdfPart( new ezcDocumentPdfHeaderPdfPart(
new ezcDocumentPdfFooterOptions( array(
'showPageNumber' => false,
'height' => '10mm',
) )
) );

$pdf->createFromDocbook( $docbook ); file_put_contents( __FILE__ . '.pdf', $pdf );
</code>

Since it is just an alias class for the ezcDocumentPdfFooterPdfPart it is also confugured by using the
ezcDocumentPdfFooterOptions class.

* Full name: `\ezcDocumentPdfHeaderPdfPart`
* Parent class: [`\ezcDocumentPdfFooterPdfPart`](./ezcDocumentPdfFooterPdfPart.md)

## Methods

### __construct

Create a new footer PDF part.

```php
public __construct(\ezcDocumentPdfFooterOptions $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcDocumentPdfFooterOptions** |  |

***

## Inherited methods

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

### hookDocumentRendering

Hook on document rendering

```php
public hookDocumentRendering(): void
```

Hook called once a document is completely rendered.

yxorP::get('REQUEST')
