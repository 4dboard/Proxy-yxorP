***

# ezcDocumentAlphaListItemGenerator

Numbered list item generator

Generator for alphabetical list items. Generated list items start with "a"
to "z" and will use more characters for lists with more then 26 list items, like "ab" for the 28th list item.

Basically implements a number recoding to base 26, only using alphabetical characters.

* Full name: `\ezcDocumentAlphaListItemGenerator`
* Parent class: [`\ezcDocumentAlnumListItemGenerator`](./ezcDocumentAlnumListItemGenerator.md)

## Methods

### getListItem

Get list item

```php
public getListItem(int $number): string
```

Get the n-th list item. The index of the list item is specified by the number parameter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |

***

## Inherited methods

### __construct

Constructn for upper/lower output

```php
public __construct(int $style = self::LOWER): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$style` | **int** |  |

***

### applyStyle

Apply upper/lower-case style to return value.

```php
protected applyStyle(string $string): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

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
