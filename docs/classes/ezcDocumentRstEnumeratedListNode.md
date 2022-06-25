***

# ezcDocumentRstEnumeratedListNode

The enumeration lsit item AST node

* Full name: `\ezcDocumentRstEnumeratedListNode`
* Parent class: [`\ezcDocumentRstBlockNode`](./ezcDocumentRstBlockNode.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NUMERIC`|public| |1|
|`UPPERCASE`|public| |2|
|`LOWERCASE`|public| |3|
|`UPPER_ROMAN`|public| |4|
|`LOWER_ROMAN`|public| |5|

## Properties

### listType

Enumerated list type, should be one of the following:

- 1: Numeric
- 2: Uppercase
- 3: Lowercase
- 4: Uppercase roman
- 5: Lowercase roman

```php
public int $listType
```

***

### text

Storage for complete textual representation of the enunmeration list marker, for the case, that enumeration list items
needs to be converted back to text.

```php
public string $text
```

***

## Methods

### __construct

Construct RST document node

```php
public __construct(\ezcDocumentRstToken $token): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |

***

### content

Return node content, if available somehow

```php
protected content(): string
```

***

## Inherited methods

### __construct

Construct RST node

```php
public __construct(\ezcDocumentRstToken $token, int $type): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$type` | **int** |  |

***

### getTokenName

Get node name from type

```php
public static getTokenName(int $type): string
```

Return a user readable name from the numeric node type.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### content

Return node content, if available somehow

```php
protected content(): string
```

***

### dump

Get dump of document

```php
public dump(int $depth): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$depth` | **int** |  |

yxorP::get('REQUEST')
