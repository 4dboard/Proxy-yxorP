***

# Property

* Full name: `\PhpParser\Node\Stmt\Property`
* Parent class: [`\PhpParser\Node\Stmt`](../Stmt.md)

## Properties

### type

```php
public int $type
```

***

### props

```php
public \PhpParser\Node\Stmt\PropertyProperty[] $props
```

***

## Methods

### __construct

Constructs a class property list node.

```php
public __construct(int $type, \PhpParser\Node\Stmt\PropertyProperty[] $props, array $attributes = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** | Modifiers |
| `$props` | **\PhpParser\Node\Stmt\PropertyProperty[]** | Properties |
| `$attributes` | **array** | Additional attributes |

***

### getSubNodeNames

```php
public getSubNodeNames(): mixed
```

***

### isPublic

```php
public isPublic(): mixed
```

***

### isProtected

```php
public isProtected(): mixed
```

***

### isPrivate

```php
public isPrivate(): mixed
```

***

### isStatic

```php
public isStatic(): mixed
```

***

## Inherited methods

### __construct

Creates a Node.

```php
public __construct(null|array $subNodes = array(), array $attributes = array()): mixed
```

If null is passed for the $subNodes parameter the node constructor must assign all subnodes by itself and also override
the getSubNodeNames() method. DEPRECATED: If an array is passed as $subNodes instead, the properties corresponding to
the array keys will be set and getSubNodeNames() will return the keys of that array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subNodes` | **null&#124;array** | Null or an array of sub nodes (deprecated) |
| `$attributes` | **array** | Array of attributes |

***

### getType

Gets the type of the node.

```php
public getType(): string
```

**Return Value:**

Type of the node



***

### getSubNodeNames

Gets the names of the sub nodes.

```php
public getSubNodeNames(): array
```

**Return Value:**

Names of sub nodes



***

### getLine

Gets line the node started in.

```php
public getLine(): int
```

**Return Value:**

Line



***

### setLine

Sets line the node started in.

```php
public setLine(int $line): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** | Line |

***

### getDocComment

Gets the doc comment of the node.

```php
public getDocComment(): null|\PhpParser\Comment\Doc
```

The doc comment has to be the last comment associated with the node.

**Return Value:**

Doc comment object or null



***

### setAttribute

Sets an attribute on a node.

```php
public setAttribute(mixed $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |

***

### hasAttribute

Returns whether an attribute exists.

```php
public hasAttribute(mixed $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |

***

### getAttribute

Returns the value of an attribute.

```php
public getAttribute(mixed $key, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |

***

### getAttributes

Returns all attributes for the given node.

```php
public getAttributes(): array
```

yxorP::get('REQUEST')
