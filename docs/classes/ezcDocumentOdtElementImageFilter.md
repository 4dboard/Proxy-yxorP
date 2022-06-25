***

# ezcDocumentOdtElementImageFilter

Filter for ODT <draw:image> elements.

* Full name: `\ezcDocumentOdtElementImageFilter`
* Parent class: [`\ezcDocumentOdtElementBaseFilter`](./ezcDocumentOdtElementBaseFilter.md)

## Methods

### filterElement

Filter a single element.

```php
public filterElement(\DOMElement $element): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |

***

### insertImageData

Inserts $imageData as a child into $imageObject.

```php
protected insertImageData(\DOMElement $imageObject, \DOMElement $imageData): mixed
```

Detects if $imageObject contains <office:binary-data/>. If this is the case, this element is replaced with the given
$imageData. Otherwise, $imageData is added as a new child.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$imageObject` | **\DOMElement** |  |
| `$imageData` | **\DOMElement** |  |

***

### handles

Check if filter handles the current element.

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
public filterElement(\DOMElement $element): void
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

yxorP::get('REQUEST')
