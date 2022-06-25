***

# ezcDocumentEzXmlDummyLinkConverter

Class for conversions of links, given as natural URLs into the eZXml storage format, which may result in urlIds,
nodeIds, or similar.

* Full name: `\ezcDocumentEzXmlDummyLinkConverter`
* Parent class: [`\ezcDocumentEzXmlLinkConverter`](./ezcDocumentEzXmlLinkConverter.md)

## Methods

### getUrlProperties

Get URL properties

```php
public getUrlProperties(string $url): array
```

Return an array of the attributes, which should be set for the link.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

***

## Inherited methods

### getUrlProperties

Get URL properties

```php
public getUrlProperties(string $url): array
```

Return an array of the attributes, which should be set for the link.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

yxorP::get('REQUEST')
