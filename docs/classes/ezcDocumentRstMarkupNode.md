***

# ezcDocumentRstMarkupNode

The abstract inline markup base AST node

* Full name: `\ezcDocumentRstMarkupNode`
* Parent class: [`\ezcDocumentRstNode`](./ezcDocumentRstNode.md)
* This class is an **Abstract class**

## Properties

### openTag

Indicator wheather this is an open or closing tag.

```php
public bool $openTag
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
