***

# ezcDocumentOdtFormattingProperties

Class for representing formatting properties of a certain type.

An instance of this class represents formatting properties of a certain type
(indicated by a PROPERTIES_* constant). The formatting properties set inside such an object must obay to the ODF
specification.

* Full name: `\ezcDocumentOdtFormattingProperties`
* Parent class: [`ArrayObject`](./ArrayObject.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PROPERTIES_PAGE_LAYOUT`|public| |&#039;page-layout-properties&#039;|
|`PROPERTIES_HEADER_FOOTER`|public| |&#039;header-footer-properties&#039;|
|`PROPERTIES_TEXT`|public| |&#039;text-properties&#039;|
|`PROPERTIES_PARAGRAPH`|public| |&#039;paragraph-properties&#039;|
|`PROPERTIES_RUBY_TEXT`|public| |&#039;ruby-properties&#039;|
|`PROPERTIES_SECTION`|public| |&#039;section-properties&#039;|
|`PROPERTIES_TABLE`|public| |&#039;table-properties&#039;|
|`PROPERTIES_COLUMN`|public| |&#039;table-column-properties&#039;|
|`PROPERTIES_TABLE_ROW`|public| |&#039;table-row-properties&#039;|
|`PROPERTIES_TABLE_CELL`|public| |&#039;table-cell-properties&#039;|
|`PROPERTIES_LIST_LEVEL`|public| |&#039;list-level-properties&#039;|
|`PROPERTIES_GRAPHIC`|public| |&#039;graphic-properties&#039;|
|`PROPERTIES_CHART`|public| |&#039;chart-properties&#039;|

## Properties

### properties

Properties.

```php
protected $properties
```

***

## Methods

### __construct

Creates a new property object of $type.

```php
public __construct(\const $type): mixed
```

$type must be one of the FAMILY_* constants.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\const** |  |

***

### append

Appending a new value is not allowed.

```php
public append(mixed $value): void
```

Only {@link} is allowed, using a valid property type.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### exchangeArray

Exchanging the array is not allowed.

```php
public exchangeArray(array $array): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |

***

### offsetSet

Sets a formatting property.

```php
public offsetSet(string $offset, mixed $value): void
```

The $offset is the name of the formatting property, the $value the value to be assigned (usually string, but might be of
different type).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **string** |  |
| `$value` | **mixed** |  |

yxorP::get('REQUEST')
