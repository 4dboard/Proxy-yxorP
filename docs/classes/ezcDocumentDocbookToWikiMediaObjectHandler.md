***

# ezcDocumentDocbookToWikiMediaObjectHandler

Visit media objects

Media objects are all kind of other media types, embedded in the document, like images.

* Full name: `\ezcDocumentDocbookToWikiMediaObjectHandler`
* Parent class: [`\ezcDocumentDocbookToWikiBaseHandler`](./ezcDocumentDocbookToWikiBaseHandler.md)

## Methods

### getImageParameters

Extract image parameters

```php
protected getImageParameters(\ezcDocumentElementVisitorConverter $converter, \DOMElement $node): array
```

Extract the image parameters from a media object or inline media object node in the Docbook document. Returns an array
with named keys containing the directive parameters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$converter` | **\ezcDocumentElementVisitorConverter** |  |
| `$node` | **\DOMElement** |  |

***

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

## Inherited methods

### renderDirective

Render a directive

```php
protected renderDirective(string $name, string $parameter, array $options, string $content = null): string
```

Render a directive with the given paramters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$parameter` | **string** |  |
| `$options` | **array** |  |
| `$content` | **string** |  |

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
