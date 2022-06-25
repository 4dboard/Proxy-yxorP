***

# ezcDocumentDocbookToOdtMediaObjectHandler

Visit media objects.

Visit docbook <mediaobject/> and transform them into ODT image frames.

* Full name: `\ezcDocumentDocbookToOdtMediaObjectHandler`
* Parent class: [`\ezcDocumentDocbookToOdtBaseHandler`](./ezcDocumentDocbookToOdtBaseHandler.md)

## Properties

### counter

Counter to generate drawing names.

```php
protected int $counter
```

***

## Methods

### handle

Handle a node

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the conversion.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

***

### correctLengthMeasure

Correct length measure value.

```php
protected correctLengthMeasure(\ezcDocumentElementVisitorConverter $converter, string $length): string
```

ODT does not define a default for length measures. This method checks if a valid measure is already given in $length and
appends the $lengthMeasure given in the converter options otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$length` | **string** |  |

***

### extractImageData

Extracts the imagedata part of a media object.

```php
protected extractImageData(\DOMNode $node): \DOMNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

***

### detectAnchorTye

Detects and returns the anchortype of the given $node.

```php
protected detectAnchorTye(\DOMElement $node): string
```

Detects the correct ODT anchortype for the given DocBoom mediaobject which can be:

- 'page' if the image frame is bound to a specific page
- 'paragraph' if the frame is bound to a specific paragraph
- 'char' if the frame is bound to a specific character in a paragraph

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMElement** |  |

***

### isInsidePara

Checks if $node is descendant of a <para/>.

```php
protected isInsidePara(\DOMNode $node): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

***

### isInsideText

Checks if $node occurs in between plain text.

```php
protected isInsideText(\DOMNode $node): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

***

## Inherited methods

### __construct

Creates a new handler which utilizes the given $styler.

```php
public __construct(\ezcDocumentOdtStyler $styler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$styler` | **\ezcDocumentOdtStyler** |  |

***

### handle

Handle a node.

```php
public handle(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node, mixed $root): mixed
```

Handle / transform a given node, and return the result of the conversion.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |
| `$root` | **mixed** |  |

yxorP::get('REQUEST')
