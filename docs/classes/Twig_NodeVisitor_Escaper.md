***

# Twig_NodeVisitor_Escaper

Used to make node visitors compatible with Twig 1.x and 2.x.

* Full name: `\Twig_NodeVisitor_Escaper`
* Parent class: [`\Twig\NodeVisitor\EscaperNodeVisitor`](./Twig/NodeVisitor/EscaperNodeVisitor.md)

## Inherited methods

### __construct

```php
public __construct(): mixed
```

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

### shouldUnwrapConditional

```php
private shouldUnwrapConditional(\Twig\Node\Expression\ConditionalExpression $expression, \Twig\Environment $env, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **\Twig\Node\Expression\ConditionalExpression** |  |
| `$env` | **\Twig\Environment** |  |
| `$type` | **mixed** |  |

***

### unwrapConditional

```php
private unwrapConditional(\Twig\Node\Expression\ConditionalExpression $expression, \Twig\Environment $env, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expression` | **\Twig\Node\Expression\ConditionalExpression** |  |
| `$env` | **\Twig\Environment** |  |
| `$type` | **mixed** |  |

***

### escapeInlinePrintNode

```php
private escapeInlinePrintNode(\Twig\Node\Expression\InlinePrint $node, \Twig\Environment $env, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\Expression\InlinePrint** |  |
| `$env` | **\Twig\Environment** |  |
| `$type` | **mixed** |  |

***

### escapePrintNode

```php
protected escapePrintNode(\Twig\Node\PrintNode $node, \Twig\Environment $env, mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\PrintNode** |  |
| `$env` | **\Twig\Environment** |  |
| `$type` | **mixed** |  |

***

### preEscapeFilterNode

```php
protected preEscapeFilterNode(\Twig\Node\Expression\FilterExpression $filter, \Twig\Environment $env): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\Twig\Node\Expression\FilterExpression** |  |
| `$env` | **\Twig\Environment** |  |

***

### isSafeFor

```php
protected isSafeFor(mixed $type, \Twig_NodeInterface $expression, mixed $env): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$expression` | **\Twig_NodeInterface** |  |
| `$env` | **mixed** |  |

***

### needEscaping

```php
protected needEscaping(\Twig\Environment $env): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |

***

### getEscaperFilter

```php
protected getEscaperFilter(mixed $type, \Twig_NodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$node` | **\Twig_NodeInterface** |  |

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
