***

# FullyQualified

* Full name: `\PhpParser\Node\Name\FullyQualified`
* Parent class: [`\PhpParser\Node\Name`](../Name.md)

## Methods

### isUnqualified

Checks whether the name is unqualified. (E.g. Name)

```php
public isUnqualified(): bool
```

**Return Value:**

Whether the name is unqualified



***

### isQualified

Checks whether the name is qualified. (E.g. Name\Name)

```php
public isQualified(): bool
```

**Return Value:**

Whether the name is qualified



***

### isFullyQualified

Checks whether the name is fully qualified. (E.g. \Name)

```php
public isFullyQualified(): bool
```

**Return Value:**

Whether the name is fully qualified



***

### isRelative

Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\Name)

```php
public isRelative(): bool
```

**Return Value:**

Whether the name is relative



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

### getSubNodeNames

Gets the names of the sub nodes.

```php
public getSubNodeNames(): array
```

**Return Value:**

Names of sub nodes



***

### getFirst

Gets the first part of the name, i.e. everything before the first namespace separator.

```php
public getFirst(): string
```

**Return Value:**

First part of the name



***

### getLast

Gets the last part of the name, i.e. everything after the last namespace separator.

```php
public getLast(): string
```

**Return Value:**

Last part of the name



***

### isUnqualified

Checks whether the name is unqualified. (E.g. Name)

```php
public isUnqualified(): bool
```

**Return Value:**

Whether the name is unqualified



***

### isQualified

Checks whether the name is qualified. (E.g. Name\Name)

```php
public isQualified(): bool
```

**Return Value:**

Whether the name is qualified



***

### isFullyQualified

Checks whether the name is fully qualified. (E.g. \Name)

```php
public isFullyQualified(): bool
```

**Return Value:**

Whether the name is fully qualified



***

### isRelative

Checks whether the name is explicitly relative to the current namespace. (E.g. namespace\Name)

```php
public isRelative(): bool
```

**Return Value:**

Whether the name is relative



***

### toString

Returns a string representation of the name by imploding the namespace parts with a separator.

```php
public toString(string $separator = &#039;\&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$separator` | **string** | The separator to use (defaults to the namespace separator \) |

**Return Value:**

String representation



***

### __toString

Returns a string representation of the name by imploding the namespace parts with the namespace separator.

```php
public __toString(): string
```

**Return Value:**

String representation



***

### set

Sets the whole name.

```php
public set(string|array|self $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | The name to set the whole name to |

***

### prepend

Prepends a name to this name.

```php
public prepend(string|array|self $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | Name to prepend |

***

### append

Appends a name to this name.

```php
public append(string|array|self $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | Name to append |

***

### setFirst

Sets the first part of the name.

```php
public setFirst(string|array|self $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | The name to set the first part to |

***

### setLast

Sets the last part of the name.

```php
public setLast(string|array|self $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | The name to set the last part to |

***

### prepareName

Prepares a (string, array or Name node) name for use in name changing methods by converting it to an array.

```php
protected prepareName(string|array|self $name): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;array&#124;self** | Name to prepare |

**Return Value:**

Prepared name



***

### getType

Gets the type of the node.

```php
public getType(): string
```

**Return Value:**

Type of the node



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
