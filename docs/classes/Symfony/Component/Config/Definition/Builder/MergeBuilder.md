***

# MergeBuilder

This class builds merge conditions.

* Full name: `\Symfony\Component\Config\Definition\Builder\MergeBuilder`

## Properties

### node

```php
protected $node
```

***

### allowFalse

```php
public $allowFalse
```

***

### allowOverwrite

```php
public $allowOverwrite
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Config\Definition\Builder\NodeDefinition $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\Builder\NodeDefinition** |  |

***

### allowUnset

Sets whether the node can be unset.

```php
public allowUnset(bool $allow = true): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **bool** |  |

***

### denyOverwrite

Sets whether the node can be overwritten.

```php
public denyOverwrite(bool $deny = true): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$deny` | **bool** | Whether the overwriting is forbidden or not |

***

### end

Returns the related node.

```php
public end(): \Symfony\Component\Config\Definition\Builder\NodeDefinition|\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition|\Symfony\Component\Config\Definition\Builder\VariableNodeDefinition
```

yxorP::get('REQUEST')
