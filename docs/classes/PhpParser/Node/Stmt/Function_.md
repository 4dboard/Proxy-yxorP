***

# Function_

* Full name: `\PhpParser\Node\Stmt\Function_`
* Parent class: [`\PhpParser\Node\Stmt`](../Stmt.md)
* This class implements:
  [`\PhpParser\Node\FunctionLike`](../FunctionLike.md)

## Properties

### byRef

```php
public bool $byRef
```

***

### name

```php
public string $name
```

***

### params

```php
public \PhpParser\Node\Param[] $params
```

***

### returnType

```php
public null|string|\PhpParser\Node\Name $returnType
```

***

### stmts

```php
public \PhpParser\Node[] $stmts
```

***

## Methods

### __construct

Constructs a function node.

```php
public __construct(string $name, array $subNodes = array(), array $attributes = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name |
| `$subNodes` | **
array** | Array of the following optional subnodes:<br />&#039;byRef&#039; =&gt; false  : Whether to return by reference<br />&#039;params&#039; =&gt; array(): Parameters<br />&#039;returnType&#039; =&gt; null   : Return type<br />&#039;stmts&#039; =&gt; array(): Statements |
| `$attributes` | **array** | Additional attributes |

***

### getSubNodeNames

```php
public getSubNodeNames(): mixed
```

***

### returnsByRef

Whether to return by reference

```php
public returnsByRef(): bool
```

***

### getParams

List of parameters

```php
public getParams(): \PhpParser\Node\Param[]
```

***

### getReturnType

Get the declared return type or null

```php
public getReturnType(): null|string|\PhpParser\Node\Name
```

***

### getStmts

The function body

```php
public getStmts(): \PhpParser\Node\Stmt[]
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
