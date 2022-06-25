***

# FunctionLike





* Full name: `\PhpParser\Builder\FunctionLike`
* Parent class: [`\PhpParser\Builder\Declaration`](./Declaration.md)
* This class is an **Abstract class**



## Properties


### returnByRef



```php
protected $returnByRef
```






***

### params



```php
protected $params
```






***

## Methods


### makeReturnByRef

Make the function return by reference.

```php
public makeReturnByRef(): $this
```









**Return Value:**

The builder instance (for fluid interface)



***

### addParam

Adds a parameter.

```php
public addParam(\PhpParser\Node\Param|\PhpParser\Builder\Param $param): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **\PhpParser\Node\Param&#124;\PhpParser\Builder\Param** | The parameter to add |


**Return Value:**

The builder instance (for fluid interface)



***

### addParams

Adds multiple parameters.

```php
public addParams(array $params): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** | The parameters to add |


**Return Value:**

The builder instance (for fluid interface)



***


## Inherited methods


### addStmt



```php
public addStmt(mixed $stmt): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmt` | **mixed** |  |




***

### addStmts

Adds multiple statements.

```php
public addStmts(array $stmts): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **array** | The statements to add |


**Return Value:**

The builder instance (for fluid interface)



***

### setDocComment

Sets doc comment for the declaration.

```php
public setDocComment(\PhpParser\Comment\Doc|string $docComment): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docComment` | **\PhpParser\Comment\Doc&#124;string** | Doc comment to set |


**Return Value:**

The builder instance (for fluid interface)



***

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
