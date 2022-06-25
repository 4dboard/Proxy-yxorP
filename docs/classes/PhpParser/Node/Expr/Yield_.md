***

# Yield_





* Full name: `\PhpParser\Node\Expr\Yield_`
* Parent class: [`\PhpParser\Node\Expr`](../Expr.md)



## Properties


### key



```php
public null|\PhpParser\Node\Expr $key
```






***

### value



```php
public null|\PhpParser\Node\Expr $value
```






***

## Methods


### __construct

Constructs a yield expression node.

```php
public __construct(null|\PhpParser\Node\Expr $value = null, null|\PhpParser\Node\Expr $key = null, array $attributes = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **null&#124;\PhpParser\Node\Expr** | Value expression |
| `$key` | **null&#124;\PhpParser\Node\Expr** | Key expression |
| `$attributes` | **array** | Additional attributes |




***

### getSubNodeNames



```php
public getSubNodeNames(): mixed
```











***


## Inherited methods


### __construct

Creates a Node.

```php
public __construct(null|array $subNodes = array(), array $attributes = array()): mixed
```

If null is passed for the $subNodes parameter the node constructor must assign
all subnodes by itself and also override the getSubNodeNames() method.
DEPRECATED: If an array is passed as $subNodes instead, the properties corresponding
to the array keys will be set and getSubNodeNames() will return the keys of that
array.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subNodes` | **null&#124;array** | Null or an array of sub nodes (deprecated) |
| `$attributes` | **array** | Array of attributes |




***

### getType

Gets the type of the node.

```php
public getType(): string
```









**Return Value:**

Type of the node



***

### getSubNodeNames

Gets the names of the sub nodes.

```php
public getSubNodeNames(): array
```









**Return Value:**

Names of sub nodes



***

### getLine

Gets line the node started in.

```php
public getLine(): int
```









**Return Value:**

Line



***

### setLine

Sets line the node started in.

```php
public setLine(int $line): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **int** | Line |




***

### getDocComment

Gets the doc comment of the node.

```php
public getDocComment(): null|\PhpParser\Comment\Doc
```

The doc comment has to be the last comment associated with the node.







**Return Value:**

Doc comment object or null



***

### setAttribute

Sets an attribute on a node.

```php
public setAttribute(mixed $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### hasAttribute

Returns whether an attribute exists.

```php
public hasAttribute(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### getAttribute

Returns the value of an attribute.

```php
public getAttribute(mixed $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |




***

### getAttributes

Returns all attributes for the given node.

```php
public getAttributes(): array
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
