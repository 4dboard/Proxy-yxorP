***

# Twig_Profiler_NodeVisitor_Profiler

Used to make node visitors compatible with Twig 1.x and 2.x.

* Full name: `\Twig_Profiler_NodeVisitor_Profiler`
* Parent class: [`\Twig\Profiler\NodeVisitor\ProfilerNodeVisitor`](./Twig/Profiler/NodeVisitor/ProfilerNodeVisitor.md)

## Inherited methods

### __construct

```php
public __construct(mixed $extensionName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensionName` | **mixed** |  |

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

The modified node or null if the node must be removed



***

### getVarName

```php
private getVarName(): mixed
```

***

### getPriority

```php
public getPriority(): mixed
```

***

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

The modified node or null if the node must be removed yxorP::get('REQUEST')
