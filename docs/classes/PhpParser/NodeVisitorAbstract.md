***

# NodeVisitorAbstract

* Full name: `\PhpParser\NodeVisitorAbstract`
* This class implements:
  [`\PhpParser\NodeVisitor`](./NodeVisitor.md)

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
