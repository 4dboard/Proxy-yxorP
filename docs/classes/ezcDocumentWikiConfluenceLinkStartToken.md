***

# ezcDocumentWikiConfluenceLinkStartToken

Struct for Wiki document link start marker tokens.

* Full name: `\ezcDocumentWikiConfluenceLinkStartToken`
* Parent class: [`\ezcDocumentWikiLinkStartToken`](./ezcDocumentWikiLinkStartToken.md)

## Methods

### getLinkParameterOrder

Get link parameter order.

```php
public getLinkParameterOrder(int $count): array
```

Links may have any amount of parameters and the order may not be the same for each amount. This method should return an
ordered list of parameter names for the given amount of parameters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |

***

## Inherited methods

### getLinkParameterOrder

Get link parameter order

```php
public getLinkParameterOrder(int $count): array
```

Links may have any amount of parameters and the order may not be the same for each amount. This method should return an
ordered list of parameter names for the given amount of parameters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |

yxorP::get('REQUEST')
