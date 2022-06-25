***

# ezcDocumentListItemGenerator

List item generator

Generator for list items, like bullet list items, and more important, enumerated lists.

Intended to return a list item, which is most likely a single character, based on the passed number. The list item
generator implementation is choosen in the list renderer, depending on the properties of the element to render.

* Full name: `\ezcDocumentListItemGenerator`
* This class is an **Abstract class**

## Methods

### getListItem

Get list item

```php
public getListItem(int $number): string
```

Get the n-th list item. The index of the list item is specified by the number parameter.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |

yxorP::get('REQUEST')
