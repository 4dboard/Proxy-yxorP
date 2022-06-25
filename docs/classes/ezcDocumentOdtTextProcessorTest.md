***

# ezcDocumentOdtTextProcessorTest

Test suite for class.

* Full name: `\ezcDocumentOdtTextProcessorTest`
* Parent class: [`ezcTestCase`](./ezcTestCase.md)

## Properties

### sourceRoot

```php
protected $sourceRoot
```

***

### targetRoot

```php
protected $targetRoot
```

***

### proc

```php
protected $proc
```

***

## Methods

### suite

```php
public static suite(): mixed
```

* This method is **static**.

***

### setUp

```php
public setUp(): void
```

***

### testNoLiteral

```php
public testNoLiteral(): mixed
```

***

### testLiteralNoReplacement

```php
public testLiteralNoReplacement(): mixed
```

***

### testLiteralReplacement

```php
public testLiteralReplacement(): mixed
```

***

### dumpDom

```php
protected dumpDom(\DOMNode $node, mixed $indent = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |
| `$indent` | **mixed** |  |

***

### assertTextNode

```php
protected assertTextNode(\DOMNode $node, mixed $text): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\DOMNode** |  |
| `$text` | **mixed** |  |

***

### assertSpaceNode

```php
protected assertSpaceNode(mixed $node, mixed $count): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |
| `$count` | **mixed** |  |

***

### assertTabNode

```php
protected assertTabNode(mixed $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |

***

### assertBreakNode

```php
protected assertBreakNode(mixed $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **mixed** |  |

yxorP::get('REQUEST')
