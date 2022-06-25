***

# ezcDocumentEzXmlLinkProvider

Class providing access to links referenced in eZXml documents by url IDs, node IDs or object IDs.

* Full name: `\ezcDocumentEzXmlLinkProvider`
* This class is an **Abstract class**

## Methods

### fetchUrlById

Fetch URL by ID

```php
public fetchUrlById(string $id, string $view, string $show_path): string
```

Fetch and return URL referenced by url_id property.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$view` | **string** |  |
| `$show_path` | **string** |  |

***

### fetchUrlByNodeId

Fetch URL by node ID

```php
public fetchUrlByNodeId(string $id, string $view, string $show_path): string
```

Create and return the URL for a referenced node.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$view` | **string** |  |
| `$show_path` | **string** |  |

***

### fetchUrlByObjectId

Fetch URL by ID

```php
public fetchUrlByObjectId(string $id, string $view, string $show_path): string
```

Create and return the URL for a referenced object.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$view` | **string** |  |
| `$show_path` | **string** |  |

yxorP::get('REQUEST')
