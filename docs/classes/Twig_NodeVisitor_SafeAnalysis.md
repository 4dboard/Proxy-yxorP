***

# Twig_NodeVisitor_SafeAnalysis

Used to make node visitors compatible with Twig 1.x and 2.x.



* Full name: `\Twig_NodeVisitor_SafeAnalysis`
* Parent class: [`\Twig\NodeVisitor\SafeAnalysisNodeVisitor`](./Twig/NodeVisitor/SafeAnalysisNodeVisitor.md)






## Inherited methods


### setSafeVars



```php
public setSafeVars(mixed $safeVars): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$safeVars` | **mixed** |  |




***

### getSafe



```php
public getSafe(\Twig_NodeInterface $node): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |




***

### setSafe



```php
protected setSafe(\Twig_NodeInterface $node, array $safe): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$safe` | **array** |  |




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

### intersectSafe



```php
protected intersectSafe(array $a = null, array $b = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$a` | **array** |  |
| `$b` | **array** |  |




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
