***

# BaseNode

The base node class.



* Full name: `\Symfony\Component\Config\Definition\BaseNode`
* This class implements:
[`\Symfony\Component\Config\Definition\NodeInterface`](./NodeInterface.md)
* This class is an **Abstract class**



## Properties


### name



```php
protected $name
```






***

### parent



```php
protected $parent
```






***

### normalizationClosures



```php
protected $normalizationClosures
```






***

### finalValidationClosures



```php
protected $finalValidationClosures
```






***

### allowOverwrite



```php
protected $allowOverwrite
```






***

### required



```php
protected $required
```






***

### equivalentValues



```php
protected $equivalentValues
```






***

### attributes



```php
protected $attributes
```






***

## Methods


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
