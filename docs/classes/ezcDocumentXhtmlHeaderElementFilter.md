***

# ezcDocumentXhtmlHeaderElementFilter

Filter for XHtml header elements, including grouping all following siblings on the same header level in a section.

* Full name: `\ezcDocumentXhtmlHeaderElementFilter`
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

### getHeaderLevel

Get header level

```php
protected getHeaderLevel(\DOMElement $element): int
```

Get the header level of a HTML heading. Additionally to the default levels h1-6 we repect a level specified in the class
attribute, which is for example used by the RST to XHtml conversion to specify header levels higher then 6.

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
