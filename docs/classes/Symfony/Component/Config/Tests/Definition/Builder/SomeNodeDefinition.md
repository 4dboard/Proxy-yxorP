***

# SomeNodeDefinition

This class provides a fluent interface for defining a node.



* Full name: `\Symfony\Component\Config\Tests\Definition\Builder\SomeNodeDefinition`
* Parent class: [`\Symfony\Component\Config\Definition\Builder\VariableNodeDefinition`](../../../Definition/Builder/VariableNodeDefinition.md)






## Inherited methods


### instantiateNode

Instantiate a Node.

```php
protected instantiateNode(): \Symfony\Component\Config\Definition\VariableNode
```









**Return Value:**

The node



***

### createNode

Instantiate and configure the node according to this definition.

```php
protected createNode(): \Symfony\Component\Config\Definition\NodeInterface
```




* This method is **abstract**.




**Return Value:**

The node instance



***

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

The expression receives the value of the node and must return it. It can
modify it.
An exception should be thrown when the node is not valid.









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


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
