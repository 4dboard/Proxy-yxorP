***

# ArrayNodeDefinition

This class provides a fluent interface for defining an array node.

* Full name: `\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition`
* Parent class: [`\Symfony\Component\Config\Definition\Builder\NodeDefinition`](./NodeDefinition.md)
* This class implements:
  [`\Symfony\Component\Config\Definition\Builder\ParentNodeDefinitionInterface`](./ParentNodeDefinitionInterface.md)

## Properties

### performDeepMerging

```php
protected $performDeepMerging
```

***

### ignoreExtraKeys

```php
protected $ignoreExtraKeys
```

***

### removeExtraKeys

```php
protected $removeExtraKeys
```

***

### children

```php
protected $children
```

***

### prototype

```php
protected $prototype
```

***

### atLeastOne

```php
protected $atLeastOne
```

***

### allowNewKeys

```php
protected $allowNewKeys
```

***

### key

```php
protected $key
```

***

### removeKeyItem

```php
protected $removeKeyItem
```

***

### addDefaults

```php
protected $addDefaults
```

***

### addDefaultChildren

```php
protected $addDefaultChildren
```

***

### nodeBuilder

```php
protected $nodeBuilder
```

***

### normalizeKeys

```php
protected $normalizeKeys
```

***

## Methods

### __construct

```php
public __construct(mixed $name, \Symfony\Component\Config\Definition\Builder\NodeParentInterface $parent = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the node |
| `$parent` | **\Symfony\Component\Config\Definition\Builder\NodeParentInterface** | The parent |

***

### setBuilder

Sets a custom children builder.

```php
public setBuilder(\Symfony\Component\Config\Definition\Builder\NodeBuilder $builder): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$builder` | **\Symfony\Component\Config\Definition\Builder\NodeBuilder** |  |

***

### children

Returns a builder to add children nodes.

```php
public children(): \Symfony\Component\Config\Definition\Builder\NodeBuilder
```

***

### prototype

Sets a prototype for child nodes.

```php
public prototype(string $type): \Symfony\Component\Config\Definition\Builder\NodeDefinition
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The type of node |

***

### addDefaultsIfNotSet

Adds the default value if the node is not set in the configuration.

```php
public addDefaultsIfNotSet(): $this
```

This method is applicable to concrete nodes only (not to prototype nodes). If this function has been called and the node
is not set during the finalization phase, it's default value will be derived from its children default values.









***

### addDefaultChildrenIfNoneSet

Adds children with a default value when none are defined.

```php
public addDefaultChildrenIfNoneSet(int|string|array|null $children = null): $this
```

This method is applicable to prototype nodes only.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$children` | **
int&#124;string&#124;array&#124;null** | The number of children&amp;#124;The child name&amp;#124;The children names to be added |

***

### requiresAtLeastOneElement

Requires the node to have at least one element.

```php
public requiresAtLeastOneElement(): $this
```

This method is applicable to prototype nodes only.









***

### disallowNewKeysInSubsequentConfigs

Disallows adding news keys in a subsequent configuration.

```php
public disallowNewKeysInSubsequentConfigs(): $this
```

If used all keys have to be defined in the same configuration file.









***

### fixXmlConfig

Sets a normalization rule for XML configurations.

```php
public fixXmlConfig(string $singular, string $plural = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singular` | **string** | The key to remap |
| `$plural` | **string** | The plural of the key for irregular plurals |

***

### useAttributeAsKey

Sets the attribute which value is to be used as key.

```php
public useAttributeAsKey(string $name, bool $removeKeyItem = true): $this
```

This is useful when you have an indexed array that should be an associative array. You can select an item from within
the array to be the key of the particular item. For example, if "id" is the
"key", then:

    array(
        array('id' => 'my_name', 'foo' => 'bar'),
    );

becomes

    array(
        'my_name' => array('foo' => 'bar'),
    );

If you'd like "'id' => 'my_name'" to still be present in the resulting array, then you can set the second argument of
this method to false.

This method is applicable to prototype nodes only.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the key |
| `$removeKeyItem` | **bool** | Whether or not the key item should be removed |

***

### canBeUnset

Sets whether the node can be unset.

```php
public canBeUnset(bool $allow = true): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **bool** |  |

***

### canBeEnabled

Adds an "enabled" boolean to enable the current section.

```php
public canBeEnabled(): $this
```

By default, the section is disabled. If any configuration is specified then the node will be automatically enabled:

enableableArrayNode: {enabled: true, ...} # The config is enabled & default values get overridden enableableArrayNode: ~
# The config is enabled & use the default values enableableArrayNode: true # The config is enabled & use the default
values enableableArrayNode: {other: value, ...} # The config is enabled & default values get overridden
enableableArrayNode: {enabled: false, ...} # The config is disabled enableableArrayNode: false # The config is disabled









***

### canBeDisabled

Adds an "enabled" boolean to enable the current section.

```php
public canBeDisabled(): $this
```

By default, the section is enabled.









***

### performNoDeepMerging

Disables the deep merging of the node.

```php
public performNoDeepMerging(): $this
```

***

### ignoreExtraKeys

Allows extra config keys to be specified under an array without throwing an exception.

```php
public ignoreExtraKeys(bool $remove = true): $this
```

Those config values are simply ignored and removed from the resulting array. This should be used only in special cases
where you want to send an entire configuration array through a special tree that processes only part of the array.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$remove` | **bool** | Whether to remove the extra keys |

***

### normalizeKeys

Sets key normalization.

```php
public normalizeKeys(bool $bool): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **bool** | Whether to enable key normalization |

***

### append

Appends a node definition.

```php
public append(\Symfony\Component\Config\Definition\Builder\NodeDefinition $node): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\Builder\NodeDefinition** |  |

***

### getNodeBuilder

Returns a node builder to be used to add children and prototype.

```php
protected getNodeBuilder(): \Symfony\Component\Config\Definition\Builder\NodeBuilder
```

**Return Value:**

The node builder



***

### createNode

Instantiate and configure the node according to this definition.

```php
protected createNode(): \Symfony\Component\Config\Definition\NodeInterface
```

**Return Value:**

The node instance



***

### validateConcreteNode

Validate the configuration of a concrete node.

```php
protected validateConcreteNode(\Symfony\Component\Config\Definition\ArrayNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\ArrayNode** |  |

***

### validatePrototypeNode

Validate the configuration of a prototype node.

```php
protected validatePrototypeNode(\Symfony\Component\Config\Definition\PrototypedArrayNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\PrototypedArrayNode** |  |

***

## Inherited methods

### __construct

```php
public __construct(string|null $name, \Symfony\Component\Config\Definition\Builder\NodeParentInterface|null $parent = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;null** | The name of the node |
| `$parent` | **\Symfony\Component\Config\Definition\Builder\NodeParentInterface&#124;null** | The parent |

***

### setParent

Sets the parent node.

```php
public setParent(\Symfony\Component\Config\Definition\Builder\NodeParentInterface $parent): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\Symfony\Component\Config\Definition\Builder\NodeParentInterface** |  |

***

### info

Sets info message.

```php
public info(string $info): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$info` | **string** | The info text |

***

### example

Sets example configuration.

```php
public example(string|array $example): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$example` | **string&#124;array** |  |

***

### attribute

Sets an attribute on the node.

```php
public attribute(string $key, mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

***

### end

Returns the parent node.

```php
public end(): \Symfony\Component\Config\Definition\Builder\NodeParentInterface|\Symfony\Component\Config\Definition\Builder\NodeBuilder|\Symfony\Component\Config\Definition\Builder\NodeDefinition|\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition|\Symfony\Component\Config\Definition\Builder\VariableNodeDefinition|null
```

**Return Value:**

The builder of the parent node



***

### getNode

Creates the node.

```php
public getNode(bool $forceRootNode = false): \Symfony\Component\Config\Definition\NodeInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$forceRootNode` | **bool** | Whether to force this node as the root node |

***

### defaultValue

Sets the default value.

```php
public defaultValue(mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The default value |

***

### isRequired

Sets the node as required.

```php
public isRequired(): $this
```

***

### treatNullLike

Sets the equivalent value used when the node contains null.

```php
public treatNullLike(mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### treatTrueLike

Sets the equivalent value used when the node contains true.

```php
public treatTrueLike(mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### treatFalseLike

Sets the equivalent value used when the node contains false.

```php
public treatFalseLike(mixed $value): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### defaultNull

Sets null as the default value.

```php
public defaultNull(): $this
```

***

### defaultTrue

Sets true as the default value.

```php
public defaultTrue(): $this
```

***

### defaultFalse

Sets false as the default value.

```php
public defaultFalse(): $this
```

***

### beforeNormalization

Sets an expression to run before the normalization.

```php
public beforeNormalization(): \Symfony\Component\Config\Definition\Builder\ExprBuilder
```

***

### cannotBeEmpty

Denies the node value being empty.

```php
public cannotBeEmpty(): $this
```

***

### validate

Sets an expression to run for the validation.

```php
public validate(): \Symfony\Component\Config\Definition\Builder\ExprBuilder
```

The expression receives the value of the node and must return it. It can modify it. An exception should be thrown when
the node is not valid.









***

### cannotBeOverwritten

Sets whether the node can be overwritten.

```php
public cannotBeOverwritten(bool $deny = true): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$deny` | **bool** | Whether the overwriting is forbidden or not |

***

### validation

Gets the builder for validation rules.

```php
protected validation(): \Symfony\Component\Config\Definition\Builder\ValidationBuilder
```

***

### merge

Gets the builder for merging rules.

```php
protected merge(): \Symfony\Component\Config\Definition\Builder\MergeBuilder
```

***

### normalization

Gets the builder for normalization rules.

```php
protected normalization(): \Symfony\Component\Config\Definition\Builder\NormalizationBuilder
```

***

### createNode

Instantiate and configure the node according to this definition.

```php
protected createNode(): \Symfony\Component\Config\Definition\NodeInterface
```

* This method is **abstract**.

**Return Value:**

The node instance yxorP::get('REQUEST')
