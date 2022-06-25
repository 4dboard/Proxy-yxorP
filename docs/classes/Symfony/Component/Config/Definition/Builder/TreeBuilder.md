***

# TreeBuilder

This is the entry class for building a config tree.

* Full name: `\Symfony\Component\Config\Definition\Builder\TreeBuilder`
* This class implements:
  [`\Symfony\Component\Config\Definition\Builder\NodeParentInterface`](./NodeParentInterface.md)

## Properties

### tree

```php
protected $tree
```

***

### root

```php
protected $root
```

***

### builder

```php
protected $builder
```

***

## Methods

### root

Creates the root node.

```php
public root(string $name, string $type = &#039;array&#039;, \Symfony\Component\Config\Definition\Builder\NodeBuilder $builder = null): \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition|\Symfony\Component\Config\Definition\Builder\NodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the root node |
| `$type` | **string** | The type of the root node |
| `$builder` | **\Symfony\Component\Config\Definition\Builder\NodeBuilder** | A custom node builder instance |

**Return Value:**

The root node (as an ArrayNodeDefinition when the type is 'array')



***

### buildTree

Builds the tree.

```php
public buildTree(): \Symfony\Component\Config\Definition\NodeInterface
```

yxorP::get('REQUEST')
