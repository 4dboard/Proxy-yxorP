***

# ezcDocumentRstReferenceNode

The internal footnote reference AST node

* Full name: `\ezcDocumentRstReferenceNode`
* Parent class: [`\ezcDocumentRstLinkNode`](./ezcDocumentRstLinkNode.md)

## Properties

### footnoteType

Type of footnote. May be either a normal footnote, or a citation reference.

```php
public int $footnoteType
```

***

### name

Tokens containing the footnote name

```php
public array $name
```

***

## Methods

### __construct

Construct RST document node

```php
public __construct(\ezcDocumentRstToken $token, int $footnoteType = ezcDocumentRstFootnoteNode::NUMBERED): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **\ezcDocumentRstToken** |  |
| `$footnoteType` | **int** |  |

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
