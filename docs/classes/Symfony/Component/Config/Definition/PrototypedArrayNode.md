***

# PrototypedArrayNode

Represents a prototyped Array node in the config tree.

* Full name: `\Symfony\Component\Config\Definition\PrototypedArrayNode`
* Parent class: [`\Symfony\Component\Config\Definition\ArrayNode`](./ArrayNode.md)

## Properties

### prototype

```php
protected $prototype
```

***

### keyAttribute

```php
protected $keyAttribute
```

***

### removeKeyAttribute

```php
protected $removeKeyAttribute
```

***

### minNumberOfElements

```php
protected $minNumberOfElements
```

***

### defaultValue

```php
protected $defaultValue
```

***

### defaultChildren

```php
protected $defaultChildren
```

***

### valuePrototypes

```php
private \Symfony\Component\Config\Definition\NodeInterface[] $valuePrototypes
```

***

## Methods

### setMinNumberOfElements

Sets the minimum number of elements that a prototype based node must contain. By default this is zero, meaning no
elements.

```php
public setMinNumberOfElements(int $number): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |

***

### setKeyAttribute

Sets the attribute which value is to be used as key.

```php
public setKeyAttribute(string $attribute, bool $remove = true): mixed
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

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attribute` | **string** | The name of the attribute which value is to be used as a key |
| `$remove` | **bool** | Whether or not to remove the key |

***

### getKeyAttribute

Retrieves the name of the attribute which value should be used as key.

```php
public getKeyAttribute(): string
```

**Return Value:**

The name of the attribute



***

### setDefaultValue

Sets the default value of this node.

```php
public setDefaultValue(string $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### hasDefaultValue

{@inheritdoc}

```php
public hasDefaultValue(): mixed
```

***

### setAddChildrenIfNoneSet

Adds default children when none are set.

```php
public setAddChildrenIfNoneSet(int|string|array|null $children = array(&#039;defaults&#039;)): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$children` | **
int&#124;string&#124;array&#124;null** | The number of children&amp;#124;The child name&amp;#124;The children names to be added |

***

### getDefaultValue

{@inheritdoc}

```php
public getDefaultValue(): mixed
```

The default value could be either explicited or derived from the prototype default value.









***

### setPrototype

Sets the node prototype.

```php
public setPrototype(\Symfony\Component\Config\Definition\PrototypeNodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\PrototypeNodeInterface** |  |

***

### getPrototype

Retrieves the prototype.

```php
public getPrototype(): \Symfony\Component\Config\Definition\PrototypeNodeInterface
```

**Return Value:**

The prototype



***

### addChild

Disable adding concrete children for prototyped nodes.

```php
public addChild(\Symfony\Component\Config\Definition\NodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |

***

### finalizeValue

Finalizes the value of this node.

```php
protected finalizeValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

**Return Value:**

The finalized value



***

### normalizeValue

Normalizes the value.

```php
protected normalizeValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to normalize |

**Return Value:**

The normalized value



***

### mergeValues

Merges values together.

```php
protected mergeValues(mixed $leftSide, mixed $rightSide): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftSide` | **mixed** | The left side to merge |
| `$rightSide` | **mixed** | The right side to merge |

**Return Value:**

The merged values



***

### getPrototypeForChild

Returns a prototype for the child node that is associated to $key in the value array.

```php
private getPrototypeForChild(string $key): mixed
```

For general child nodes, this will be $this->prototype. But if $this->removeKeyAttribute is true and there are only two
keys in the child node:
one is same as this->keyAttribute and the other is 'value', then the prototype will be different.

For example, assume $this->keyAttribute is 'name' and the value array is as follows:

    array(
        array(
            'name' => 'name001',
            'value' => 'value001'
        )
    )

Now, the key is 0 and the child node is:

    array(
       'name' => 'name001',
       'value' => 'value001'
    )

When normalizing the value array, the 'name' element will removed from the child node and its value becomes the new key
of the child node:

    array(
        'name001' => array('value' => 'value001')
    )

Now only 'value' element is left in the child node which can be further simplified into a string:

    array('name001' => 'value001')

Now, the key becomes 'name001' and the child node becomes 'value001' and the prototype of child node 'name001' should be
a ScalarNode instead of an ArrayNode instance.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | The key of the child node |

**Return Value:**

The prototype instance



***

## Inherited methods

### setNormalizeKeys

```php
public setNormalizeKeys(mixed $normalizeKeys): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalizeKeys` | **mixed** |  |

***

### preNormalize

Normalizes the value before any other normalization is applied.

```php
protected preNormalize( $value): \Symfony\Component\Config\Definition\The
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **** |  |

**Return Value:**

normalized array value



***

### getChildren

Retrieves the children of this node.

```php
public getChildren(): array
```

**Return Value:**

The children



***

### setXmlRemappings

Sets the xml remappings that should be performed.

```php
public setXmlRemappings(array $remappings): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$remappings` | **array** | An array of the form array(array(string, string)) |

***

### getXmlRemappings

Gets the xml remappings that should be performed.

```php
public getXmlRemappings(): array
```

**Return Value:**

an array of the form array(array(string, string))



***

### setAddIfNotSet

Sets whether to add default values for this array if it has not been defined in any of the configuration files.

```php
public setAddIfNotSet(bool $boolean): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** |  |

***

### setAllowFalse

Sets whether false is allowed as value indicating that the array should be unset.

```php
public setAllowFalse(bool $allow): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **bool** |  |

***

### setAllowNewKeys

Sets whether new keys can be defined in subsequent configurations.

```php
public setAllowNewKeys(bool $allow): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **bool** |  |

***

### setPerformDeepMerging

Sets if deep merging should occur.

```php
public setPerformDeepMerging(bool $boolean): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** |  |

***

### setIgnoreExtraKeys

Whether extra keys should just be ignore without an exception.

```php
public setIgnoreExtraKeys(bool $boolean, bool $remove = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** | To allow extra keys |
| `$remove` | **bool** | To remove extra keys |

***

### setName

Sets the name of the node.

```php
public setName(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The name of the node |

***

### hasDefaultValue

{@inheritdoc}

```php
public hasDefaultValue(): mixed
```

***

### getDefaultValue

{@inheritdoc}

```php
public getDefaultValue(): mixed
```

***

### addChild

Adds a child node.

```php
public addChild(\Symfony\Component\Config\Definition\NodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |

***

### finalizeValue

Finalizes a value.

```php
protected finalizeValue(mixed $value): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to finalize |

**Return Value:**

The finalized value



***

### validateType

Validates the type of a Node.

```php
protected validateType(mixed $value): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |

***

### normalizeValue

Normalizes the value.

```php
protected normalizeValue(mixed $value): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to normalize |

**Return Value:**

The normalized value



***

### remapXml

Remaps multiple singular values to a single plural value.

```php
protected remapXml(array $value): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array** | The source values |

**Return Value:**

The remapped values



***

### mergeValues

Merges two values together.

```php
protected mergeValues(mixed $leftSide, mixed $rightSide): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftSide` | **mixed** |  |
| `$rightSide` | **mixed** |  |

**Return Value:**

The merged value



***

### __construct

```php
public __construct(string|null $name, \Symfony\Component\Config\Definition\NodeInterface|null $parent = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;null** | The name of the node |
| `$parent` | **\Symfony\Component\Config\Definition\NodeInterface&#124;null** | The parent of this node |

***

### setAttribute

```php
public setAttribute(mixed $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |

***

### getAttribute

```php
public getAttribute(mixed $key, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |

***

### hasAttribute

```php
public hasAttribute(mixed $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |

***

### getAttributes

```php
public getAttributes(): mixed
```

***

### setAttributes

```php
public setAttributes(array $attributes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributes` | **array** |  |

***

### removeAttribute

```php
public removeAttribute(mixed $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |

***

### setInfo

Sets an info message.

```php
public setInfo(string $info): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$info` | **string** |  |

***

### getInfo

Returns info message.

```php
public getInfo(): string
```

**Return Value:**

The info text



***

### setExample

Sets the example configuration for this node.

```php
public setExample(string|array $example): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$example` | **string&#124;array** |  |

***

### getExample

Retrieves the example configuration for this node.

```php
public getExample(): string|array
```

**Return Value:**

The example



***

### addEquivalentValue

Adds an equivalent value.

```php
public addEquivalentValue(mixed $originalValue, mixed $equivalentValue): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$originalValue` | **mixed** |  |
| `$equivalentValue` | **mixed** |  |

***

### setRequired

Set this node as required.

```php
public setRequired(bool $boolean): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** | Required node |

***

### setAllowOverwrite

Sets if this node can be overridden.

```php
public setAllowOverwrite(bool $allow): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allow` | **bool** |  |

***

### setNormalizationClosures

Sets the closures used for normalization.

```php
public setNormalizationClosures(\Closure[] $closures): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closures` | **\Closure[]** | An array of Closures used for normalization |

***

### setFinalValidationClosures

Sets the closures used for final validation.

```php
public setFinalValidationClosures(\Closure[] $closures): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closures` | **\Closure[]** | An array of Closures used for final validation |

***

### isRequired

Returns true when the node is required.

```php
public isRequired(): bool
```

**Return Value:**

If the node is required



***

### getName

Returns the name of the node.

```php
public getName(): string
```

**Return Value:**

The name of the node



***

### getPath

Returns the path of the node.

```php
public getPath(): string
```

**Return Value:**

The node path



***

### merge

Merges two values together.

```php
final public merge(mixed $leftSide, mixed $rightSide): mixed
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftSide` | **mixed** |  |
| `$rightSide` | **mixed** |  |

**Return Value:**

The merged value



***

### normalize

Normalizes a value.

```php
final public normalize(mixed $value): mixed
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to normalize |

**Return Value:**

The normalized value



***

### getParent

Returns parent node for this node.

```php
public getParent(): \Symfony\Component\Config\Definition\NodeInterface|null
```

***

### finalize

Finalizes a value.

```php
final public finalize(mixed $value): mixed
```

* This method is **final**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to finalize |

**Return Value:**

The finalized value yxorP::get('REQUEST')
