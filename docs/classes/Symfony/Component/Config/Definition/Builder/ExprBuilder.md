***

# ExprBuilder

This class builds an if expression.



* Full name: `\Symfony\Component\Config\Definition\Builder\ExprBuilder`



## Properties


### node



```php
protected $node
```






***

### ifPart



```php
public $ifPart
```






***

### thenPart



```php
public $thenPart
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

### always

Marks the expression as being always used.

```php
public always(\Closure $then = null): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$then` | **\Closure** |  |




***

### ifTrue

Sets a closure to use as tests.

```php
public ifTrue(\Closure $closure = null): $this
```

The default one tests if the value is true.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |




***

### ifString

Tests if the value is a string.

```php
public ifString(): $this
```











***

### ifNull

Tests if the value is null.

```php
public ifNull(): $this
```











***

### ifArray

Tests if the value is an array.

```php
public ifArray(): $this
```











***

### ifInArray

Tests if the value is in an array.

```php
public ifInArray(array $array): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### ifNotInArray

Tests if the value is not in an array.

```php
public ifNotInArray(array $array): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |




***

### then

Sets the closure to run if the test pass.

```php
public then(\Closure $closure): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$closure` | **\Closure** |  |




***

### thenEmptyArray

Sets a closure returning an empty array.

```php
public thenEmptyArray(): $this
```











***

### thenInvalid

Sets a closure marking the value as invalid at processing time.

```php
public thenInvalid(string $message): $this
```

if you want to add the value of the node in your message just use a %s placeholder.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### thenUnset

Sets a closure unsetting this key of the array at processing time.

```php
public thenUnset(): $this
```











***

### end

Returns the related node.

```php
public end(): \Symfony\Component\Config\Definition\Builder\NodeDefinition|\Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition|\Symfony\Component\Config\Definition\Builder\VariableNodeDefinition
```











***

### buildExpressions

Builds the expressions.

```php
public static buildExpressions(\Symfony\Component\Config\Definition\Builder\ExprBuilder[] $expressions): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expressions` | **\Symfony\Component\Config\Definition\Builder\ExprBuilder[]** | An array of ExprBuilder instances to build |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
