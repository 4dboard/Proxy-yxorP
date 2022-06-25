***

# ezcDocumentOdtStyle

Class for ODT styles.

Note that list styles are represented by the dedicated {@link} class.

* Full name: `\ezcDocumentOdtStyle`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`FAMILY_COLUMN`|public| |&#039;column&#039;|
|`FAMILY_GRAPHIC`|public| |&#039;graphic&#039;|
|`FAMILY_PARAGRAPH`|public| |&#039;paragraph&#039;|
|`FAMILY_SECTION`|public| |&#039;section&#039;|
|`FAMILY_TABLE_CELL`|public| |&#039;table-cell&#039;|
|`FAMILY_TABLE_COLUMN`|public| |&#039;table-column&#039;|
|`FAMILY_TABLE_ROW`|public| |&#039;table-row&#039;|
|`FAMILY_TABLE`|public| |&#039;table&#039;|
|`FAMILY_TEXT`|public| |&#039;text&#039;|
|`FAMILY_CHART`|public| |&#039;chart&#039;|
|`FAMILY_CONTROL`|public| |&#039;control&#039;|
|`FAMILY_DRAWING_PAGE`|public| |&#039;drawing-page&#039;|
|`FAMILY_PRESENTATION`|public| |&#039;presentation&#039;|
|`FAMILY_RUBY`|public| |&#039;ruby&#039;|
|`FAMILY_TABLE_PAGE`|public| |&#039;table-page&#039;|

## Properties

### properties

Properties

```php
protected $properties
```

***

## Methods

### __construct

Creates a new style.

```php
public __construct(\const $family, string $name): mixed
```

Creates a style in the given style $family with the given $name. $family must be one of the FAMILY_* constants. $name
can be an arbitrary string. Note that $name and $family properties can not be changed at a later time.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$family` | **\const** |  |
| `$name` | **string** |  |

yxorP::get('REQUEST')
