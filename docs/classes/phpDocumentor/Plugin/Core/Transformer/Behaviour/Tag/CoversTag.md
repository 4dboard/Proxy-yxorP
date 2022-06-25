***

# CoversTag

Behaviour that adds support for the @covers tag

* Full name: `\phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag\CoversTag`

## Methods

### process

Find all return tags that contain 'self' or '$this' and replace those terms for the name of the current class' type.

```php
public process(\DOMDocument $xml): \DOMDocument
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$xml` | **\DOMDocument** | Structure source to apply behaviour onto. |

yxorP::get('REQUEST')
