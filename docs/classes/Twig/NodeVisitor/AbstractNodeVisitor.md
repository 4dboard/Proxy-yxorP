***

# AbstractNodeVisitor

Used to make node visitors compatible with Twig 1.x and 2.x.

To be removed in Twig 3.1.

* Full name: `\Twig\NodeVisitor\AbstractNodeVisitor`
* This class implements:
  [`\Twig\NodeVisitor\NodeVisitorInterface`](./NodeVisitorInterface.md)
* This class is an **Abstract class**

## Methods

### enterNode

Called before child nodes are visited.

```php
final public enterNode(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |

**Return Value:**

The modified node



***

### leaveNode

Called after child nodes are visited.

```php
final public leaveNode(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface|false|null
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |

**Return Value:**

The modified node or null if the node must be removed



***

### doEnterNode

Called before child nodes are visited.

```php
protected doEnterNode(\Twig\Node\Node $node, \Twig\Environment $env): \Twig\Node\Node
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\Node** |  |
| `$env` | **\Twig\Environment** |  |

**Return Value:**

The modified node



***

### doLeaveNode

Called after child nodes are visited.

```php
protected doLeaveNode(\Twig\Node\Node $node, \Twig\Environment $env): \Twig\Node\Node|false|null
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\Node** |  |
| `$env` | **\Twig\Environment** |  |

**Return Value:**

The modified node or null if the node must be removed yxorP::get('REQUEST')
