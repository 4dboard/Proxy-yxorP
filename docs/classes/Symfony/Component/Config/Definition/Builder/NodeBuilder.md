***

# NodeBuilder

This class provides a fluent interface for building a node.

* Full name: `\Symfony\Component\Config\Definition\Builder\NodeBuilder`
* This class implements:
  [`\Symfony\Component\Config\Definition\Builder\NodeParentInterface`](./NodeParentInterface.md)

## Properties

### parent

```php
protected $parent
```

***

### nodeMapping

```php
protected $nodeMapping
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### setParent

Set the parent node.

```php
public setParent(\Symfony\Component\Config\Definition\Builder\ParentNodeDefinitionInterface $parent = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\Symfony\Component\Config\Definition\Builder\ParentNodeDefinitionInterface** |  |

***

### arrayNode

Creates a child array node.

```php
public arrayNode(string $name): \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The child node



***

### scalarNode

Creates a child scalar node.

```php
public scalarNode(string $name): \Symfony\Component\Config\Definition\Builder\ScalarNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The child node



***

### booleanNode

Creates a child Boolean node.

```php
public booleanNode(string $name): \Symfony\Component\Config\Definition\Builder\BooleanNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The child node



***

### integerNode

Creates a child integer node.

```php
public integerNode(string $name): \Symfony\Component\Config\Definition\Builder\IntegerNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The child node



***

### floatNode

Creates a child float node.

```php
public floatNode(string $name): \Symfony\Component\Config\Definition\Builder\FloatNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The child node



***

### enumNode

Creates a child EnumNode.

```php
public enumNode(string $name): \Symfony\Component\Config\Definition\Builder\EnumNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### variableNode

Creates a child variable node.

```php
public variableNode(string $name): \Symfony\Component\Config\Definition\Builder\VariableNodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node |

**Return Value:**

The builder of the child node



***

### end

Returns the parent node.

```php
public end(): \Symfony\Component\Config\Definition\Builder\NodeDefinition&amp;\Symfony\Component\Config\Definition\Builder\ParentNodeDefinitionInterface
```

**Return Value:**

The parent node



***

### node

Creates a child node.

```php
public node(string|null $name, string $type): \Symfony\Component\Config\Definition\Builder\NodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;null** | The name of the node |
| `$type` | **string** | The type of the node |

**Return Value:**

The child node



***

### append

Appends a node definition.

```php
public append(\Symfony\Component\Config\Definition\Builder\NodeDefinition $node): $this
```

Usage:

$node = new ArrayNodeDefinition('name')
->children()
->scalarNode('foo')->end()
->scalarNode('baz')->end()
->append($this->getBarNodeDefinition())
->end()
;

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\Builder\NodeDefinition** |  |

***

### setNodeClass

Adds or overrides a node Type.

```php
public setNodeClass(string $type, string $class): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The name of the type |
| `$class` | **string** | The fully qualified name the node definition class |

***

### getNodeClass

Returns the class name of the node definition.

```php
protected getNodeClass(string $type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The node type |

**Return Value:**

The node definition class name yxorP::get('REQUEST')
