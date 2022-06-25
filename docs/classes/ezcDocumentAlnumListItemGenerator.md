***

# ezcDocumentAlnumListItemGenerator

List item generator

Abstract base class for alphanumeric list item generators, which implements an applyStyle() method and an additional
constructor argument, so that all alphanumeric list item generators extending from this class cann be called to generate
lower- and uppercase variants of their list items.

* Full name: `\ezcDocumentAlnumListItemGenerator`
* Parent class: [`\ezcDocumentListItemGenerator`](./ezcDocumentListItemGenerator.md)
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`UPPER`|public| |1|
|`LOWER`|public| |2|

## Properties

### style

Style defining if the alphanumeric list items should be lower or upper case.

```php
protected int $style
```

***

## Methods

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

## Inherited methods

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
