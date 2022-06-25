***

# ezcDocumentXhtmlImageElementFilter

Filter for XHtml images.

Filter HTML image elements, and try to find optional captions belonging to the image, and alt tags. Transforming the
images into correct media objects depending wheather they are inlined or not.

* Full name: `\ezcDocumentXhtmlImageElementFilter`
* Parent class: [`\ezcDocumentXhtmlElementBaseFilter`](./ezcDocumentXhtmlElementBaseFilter.md)

## Methods

### filterElement

Filter a single element

```php
public filterElement(\DOMElement $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### extractText

Extract text content

```php
protected extractText(\DOMElement $element): string
```

Extract and remove all textual contents from the node and its descendants.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### handles

Check if filter handles the current element

```php
public handles(\DOMElement $element): void
```

Returns a boolean value, indicating weather this filter can handle the current element.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

## Inherited methods

### filterElement

Filter a single element

```php
public filterElement(\DOMElement $element): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### handles

Check if filter handles the current element

```php
public handles(\DOMElement $element): void
```

Returns a boolean value, indicating weather this filter can handle the current element.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### isBlockLevelElement

Is block level element

```php
protected isBlockLevelElement(\DOMElement $element): bool
```

Returns true, if the element is a block level element in XHtml, and false otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### isInlineElement

Check if node is an inline element

```php
protected isInlineElement(\DOMNode $node): bool
```

Check if the passed node is an inline element, eg. may occur inside a text block, like a paragraph.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |

***

### isInline

Is current element placed inline

```php
protected isInline(\DOMElement $element): void
```

Checks if the current element is placed inline, which means, it is either a descendant of some other inline element, or
part of a paragraph.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### hasClass

Check for element class

```php
protected hasClass(\DOMElement $element, string $class): bool
```

Check if element has the given class in its class attribute. Returns true, if it is contained, or false, if not.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |
| `$class` | **string** |  |

***

### showCurrentNode

Shows a string representation of the current node.

```php
protected showCurrentNode(\DOMElement $element, bool $newLine = true): mixed
```

Is only there for debugging purposes

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |
| `$newLine` | **bool** |  |

yxorP::get('REQUEST')
