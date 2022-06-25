***

# NodeTraverser





* Full name: `\PhpParser\NodeTraverser`
* This class implements:
[`\PhpParser\NodeTraverserInterface`](./NodeTraverserInterface.md)



## Properties


### visitors



```php
protected \PhpParser\NodeVisitor[] $visitors
```






***

### cloneNodes



```php
private bool $cloneNodes
```






***

## Methods


### __construct

Constructs a node traverser.

```php
public __construct(bool $cloneNodes = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cloneNodes` | **bool** | Should the traverser clone the nodes when traversing the AST |




***

### addVisitor

Adds a visitor.

```php
public addVisitor(\PhpParser\NodeVisitor $visitor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\PhpParser\NodeVisitor** | Visitor to add |




***

### removeVisitor

Removes an added visitor.

```php
public removeVisitor(\PhpParser\NodeVisitor $visitor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\PhpParser\NodeVisitor** |  |




***

### traverse

Traverses an array of nodes using the registered visitors.

```php
public traverse(\PhpParser\Node[] $nodes): \PhpParser\Node[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\PhpParser\Node[]** | Array of nodes |


**Return Value:**

Traversed array of nodes



***

### traverseNode



```php
protected traverseNode(\PhpParser\Node $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** |  |




***

### traverseArray



```php
protected traverseArray(array $nodes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
