***

# Twig_NodeVisitor_Optimizer

Tries to optimize the AST.

This visitor is always the last registered one.

You can configure which optimizations you want to activate via the
optimizer mode.

* Full name: `\Twig_NodeVisitor_Optimizer`
* Parent class: [`\Twig\NodeVisitor\OptimizerNodeVisitor`](./Twig/NodeVisitor/OptimizerNodeVisitor.md)






## Inherited methods


### __construct



```php
public __construct(int $optimizers = -1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optimizers` | **int** | The optimizer mode |




***

### doEnterNode

Called before child nodes are visited.

```php
protected doEnterNode(\Twig\Node\Node $node, \Twig\Environment $env): \Twig\Node\Node
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\Node** |  |
| `$env` | **\Twig\Environment** |  |


**Return Value:**

The modified node



***

### doLeaveNode

Called after child nodes are visited.

```php
protected doLeaveNode(\Twig\Node\Node $node, \Twig\Environment $env): \Twig\Node\Node|false|null
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig\Node\Node** |  |
| `$env` | **\Twig\Environment** |  |


**Return Value:**

The modified node or null if the node must be removed



***

### optimizeVariables



```php
protected optimizeVariables(\Twig_NodeInterface $node, \Twig\Environment $env): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |




***

### optimizePrintNode

Optimizes print nodes.

```php
protected optimizePrintNode(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface
```

It replaces:

* "echo $this->render(Parent)Block()" with "$this->display(Parent)Block()"






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |




***

### optimizeRawFilter

Removes "raw" filters.

```php
protected optimizeRawFilter(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |




***

### enterOptimizeFor

Optimizes "for" tag by removing the "loop" variable creation whenever possible.

```php
protected enterOptimizeFor(\Twig_NodeInterface $node, \Twig\Environment $env): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |




***

### leaveOptimizeFor

Optimizes "for" tag by removing the "loop" variable creation whenever possible.

```php
protected leaveOptimizeFor(\Twig_NodeInterface $node, \Twig\Environment $env): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |




***

### addLoopToCurrent



```php
protected addLoopToCurrent(): mixed
```











***

### addLoopToAll



```php
protected addLoopToAll(): mixed
```











***

### getPriority



```php
public getPriority(): mixed
```











***

### enterNode

Called before child nodes are visited.

```php
final public enterNode(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |


**Return Value:**

The modified node



***

### leaveNode

Called after child nodes are visited.

```php
final public leaveNode(\Twig_NodeInterface $node, \Twig\Environment $env): \Twig_NodeInterface|false|null
```





* This method is **final**.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$env` | **\Twig\Environment** |  |


**Return Value:**

The modified node or null if the node must be removed



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
