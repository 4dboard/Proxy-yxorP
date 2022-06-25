***

# NameResolver

* Full name: `\PhpParser\NodeVisitor\NameResolver`
* Parent class: [`\PhpParser\NodeVisitorAbstract`](../NodeVisitorAbstract.md)

## Properties

### namespace

```php
protected null|\PhpParser\Node\Name $namespace
```

***

### aliases

```php
protected array $aliases
```

***

## Methods

### beforeTraverse

Called once before traversal.

```php
public beforeTraverse(array $nodes): null|\PhpParser\Node[]
```

Return value semantics:

* null:      $nodes stays as-is
* otherwise: $nodes is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Array of nodes |

**Return Value:**

Array of nodes



***

### enterNode

Called when entering a node.

```php
public enterNode(\PhpParser\Node $node): null|\PhpParser\Node
```

Return value semantics:

* null:      $node stays as-is
* otherwise: $node is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node |

**Return Value:**

Node



***

### resetState

```php
protected resetState(\PhpParser\Node\Name $namespace = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **\PhpParser\Node\Name** |  |

***

### addAlias

```php
protected addAlias(\PhpParser\Node\Stmt\UseUse $use, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$use` | **\PhpParser\Node\Stmt\UseUse** |  |
| `$type` | **mixed** |  |

***

### resolveSignature

```php
private resolveSignature(\PhpParser\Node\Stmt\Function_|\PhpParser\Node\Stmt\ClassMethod|\PhpParser\Node\Expr\Closure $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node\Stmt\Function_
&#124;\PhpParser\Node\Stmt\ClassMethod&#124;\PhpParser\Node\Expr\Closure** |  |

***

### resolveClassName

```php
protected resolveClassName(\PhpParser\Node\Name $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\PhpParser\Node\Name** |  |

***

### resolveOtherName

```php
protected resolveOtherName(\PhpParser\Node\Name $name, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\PhpParser\Node\Name** |  |
| `$type` | **mixed** |  |

***

### addNamespacedName

```php
protected addNamespacedName(\PhpParser\Node $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** |  |

***

## Inherited methods

### beforeTraverse

Called once before traversal.

```php
public beforeTraverse(array $nodes): null|\PhpParser\Node[]
```

Return value semantics:

* null:      $nodes stays as-is
* otherwise: $nodes is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Array of nodes |

**Return Value:**

Array of nodes



***

### enterNode

Called when entering a node.

```php
public enterNode(\PhpParser\Node $node): null|\PhpParser\Node
```

Return value semantics:

* null:      $node stays as-is
* otherwise: $node is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node |

**Return Value:**

Node



***

### leaveNode

Called when leaving a node.

```php
public leaveNode(\PhpParser\Node $node): null|\PhpParser\Node|false|\PhpParser\Node[]
```

Return value semantics:

* null:      $node stays as-is
* false:     $node is removed from the parent array
* array:     The return value is merged into the parent array (at the position of the $node)
* otherwise: $node is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node |

**Return Value:**

Node



***

### afterTraverse

Called once after traversal.

```php
public afterTraverse(array $nodes): null|\PhpParser\Node[]
```

Return value semantics:

* null:      $nodes stays as-is
* otherwise: $nodes is set to the return value

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | Array of nodes |

**Return Value:**

Array of nodes yxorP::get('REQUEST')
