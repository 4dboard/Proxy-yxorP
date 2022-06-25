***

# ezcDocumentOdtElementHeaderFilter

Filter for ODT <text:h/> elements.

* Full name: `\ezcDocumentOdtElementHeaderFilter`
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
