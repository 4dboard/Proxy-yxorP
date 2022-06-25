***

# ValidationBuilder

This class builds validation conditions.

* Full name: `\Symfony\Component\Config\Definition\Builder\ValidationBuilder`

## Properties

### node

```php
protected $node
```

***

### rules

```php
public $rules
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

### rule

Registers a closure to run as normalization or an expression builder to build it if null is provided.

```php
public rule(\Closure $closure = null): \Symfony\Component\Config\Definition\Builder\ExprBuilder|$this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

yxorP::get('REQUEST')
