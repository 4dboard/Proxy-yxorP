***

# NormalizationBuilder

This class builds normalization conditions.

* Full name: `\Symfony\Component\Config\Definition\Builder\NormalizationBuilder`

## Properties

### node

```php
protected $node
```

***

### before

```php
public $before
```

***

### remappings

```php
public $remappings
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

### remap

Registers a key to remap to its plural form.

```php
public remap(string $key, string $plural = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | The key to remap |
| `$plural` | **string** | The plural of the key in case of irregular plural |

***

### before

Registers a closure to run before the normalization or an expression builder to build it if null is provided.

```php
public before(\Closure $closure = null): \Symfony\Component\Config\Definition\Builder\ExprBuilder|$this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |

yxorP::get('REQUEST')
