***

# ArrayNode

Represents an Array node in the config tree.



* Full name: `\Symfony\Component\Config\Definition\ArrayNode`
* Parent class: [`\Symfony\Component\Config\Definition\BaseNode`](./BaseNode.md)
* This class implements:
[`\Symfony\Component\Config\Definition\PrototypeNodeInterface`](./PrototypeNodeInterface.md)



## Properties


### xmlRemappings



```php
protected $xmlRemappings
```






***

### children



```php
protected $children
```






***

### allowFalse



```php
protected $allowFalse
```






***

### allowNewKeys



```php
protected $allowNewKeys
```






***

### addIfNotSet



```php
protected $addIfNotSet
```






***

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

### normalizeKeys



```php
protected $normalizeKeys
```






***

## Methods


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

Normalizes keys between the different configuration formats.

```php
protected preNormalize(mixed $value): array
```

Namely, you mostly have foo_bar in YAML while you have foo-bar in XML.
After running this method, all keys are normalized to foo_bar.

If you have a mixed key like foo-bar_moo, it will not be altered.
The key will also not be altered if the target key already exists.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |


**Return Value:**

The value with normalized keys



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

Sets whether to add default values for this array if it has not been
defined in any of the configuration files.

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

Finalizes the value of this node.

```php
protected finalizeValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |


**Return Value:**

The finalised value



***

### validateType

Validates the type of the value.

```php
protected validateType(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




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

The finalized value



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
