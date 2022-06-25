***

# Param





* Full name: `\PhpParser\Builder\Param`
* Parent class: [`\PhpParser\BuilderAbstract`](../BuilderAbstract.md)



## Properties


### name



```php
protected $name
```






***

### default



```php
protected $default
```






***

### type



```php
protected $type
```






***

### byRef



```php
protected $byRef
```






***

## Methods


### __construct

Creates a parameter builder.

```php
public __construct(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the parameter |




***

### setDefault

Sets default value for the parameter.

```php
public setDefault(mixed $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Default value to use |


**Return Value:**

The builder instance (for fluid interface)



***

### setTypeHint

Sets type hint for the parameter.

```php
public setTypeHint(string|\PhpParser\Node\Name $type): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string&#124;\PhpParser\Node\Name** | Type hint to use |


**Return Value:**

The builder instance (for fluid interface)



***

### makeByRef

Make the parameter accept the value by reference.

```php
public makeByRef(): $this
```









**Return Value:**

The builder instance (for fluid interface)



***

### getNode

Returns the built parameter node.

```php
public getNode(): \PhpParser\Node\Param
```









**Return Value:**

The built parameter node



***


## Inherited methods


### normalizeNode

Normalizes a node: Converts builder objects to nodes.

```php
protected normalizeNode(\PhpParser\Node|\PhpParser\Builder $node): \PhpParser\Node
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node&#124;\PhpParser\Builder** | The node to normalize |


**Return Value:**

The normalized node



***

### normalizeName

Normalizes a name: Converts plain string names to PhpParser\Node\Name.

```php
protected normalizeName(\PhpParser\Node\Name|string $name): \PhpParser\Node\Name
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\PhpParser\Node\Name&#124;string** | The name to normalize |


**Return Value:**

The normalized name



***

### normalizeValue

Normalizes a value: Converts nulls, booleans, integers,
floats, strings and arrays into their respective nodes

```php
protected normalizeValue(mixed $value): \PhpParser\Node\Expr
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to normalize |


**Return Value:**

The normalized value



***

### normalizeDocComment

Normalizes a doc comment: Converts plain strings to PhpParser\Comment\Doc.

```php
protected normalizeDocComment(\PhpParser\Comment\Doc|string $docComment): \PhpParser\Comment\Doc
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docComment` | **\PhpParser\Comment\Doc&#124;string** | The doc comment to normalize |


**Return Value:**

The normalized doc comment



***

### setModifier

Sets a modifier in the $this->type property.

```php
protected setModifier(int $modifier): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$modifier` | **int** | Modifier to set |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
