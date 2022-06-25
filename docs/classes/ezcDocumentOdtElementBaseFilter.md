***

# ezcDocumentOdtElementBaseFilter

Basic filter class for ODT element filters.

* Full name: `\ezcDocumentOdtElementBaseFilter`
* This class is an **Abstract class**

## Methods

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
