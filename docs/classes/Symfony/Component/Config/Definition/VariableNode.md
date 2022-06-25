***

# VariableNode

This node represents a value of variable type in the config tree.

This node is intended for values of arbitrary type. Any PHP type is accepted as a value.

* Full name: `\Symfony\Component\Config\Definition\VariableNode`
* Parent class: [`\Symfony\Component\Config\Definition\BaseNode`](./BaseNode.md)
* This class implements:
  [`\Symfony\Component\Config\Definition\PrototypeNodeInterface`](./PrototypeNodeInterface.md)

## Properties

### defaultValueSet

```php
protected $defaultValueSet
```

***

### defaultValue

```php
protected $defaultValue
```

***

### allowEmptyValue

```php
protected $allowEmptyValue
```

***

## Methods

### setDefaultValue

```php
public setDefaultValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

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

### setAllowEmptyValue

Sets if this node is allowed to have an empty value.

```php
public setAllowEmptyValue(bool $boolean): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** | True if this entity will accept empty values |

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

### validateType

Validates the type of a Node.

```php
protected validateType(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to validate |

***

### finalizeValue

Finalizes a value.

```php
protected finalizeValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to finalize |

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

Merges two values together.

```php
protected mergeValues(mixed $leftSide, mixed $rightSide): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leftSide` | **mixed** |  |
| `$rightSide` | **mixed** |  |

**Return Value:**

The merged value



***

### isValueEmpty

Evaluates if the given value is to be treated as empty.

```php
protected isValueEmpty(mixed $value): bool
```

By default, PHP's empty() function is used to test for emptiness. This method may be overridden by subtypes to better
match their understanding of empty data.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

## Inherited methods

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

The finalized value yxorP::get('REQUEST')
