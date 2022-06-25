***

# Graph

Writer responsible for generating various graphs.

The Graph writer is capable of generating a Graph (as provided using the 'source' parameter) at the location provided
using the artifact parameter.

Currently supported:

* 'class', a Class Diagram Generated using GraphViz

* Full name: `\phpDocumentor\Plugin\Graphs\Writer\Graph`
* Parent class: [`\phpDocumentor\Transformer\Writer\WriterAbstract`](../../../Transformer/Writer/WriterAbstract.md)



## Properties


### nodeFont



```php
protected string $nodeFont
```






***

### nodeCache



```php
protected \phpDocumentor\GraphViz\Node[] $nodeCache
```






***

### namespaceCache



```php
protected \phpDocumentor\GraphViz\Graph[] $namespaceCache
```






***

## Methods


### transform

Invokes the query method contained in this class.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***

### processClass

Creates a class inheritance diagram.

```php
public processClass(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### createEdge

Creates a GraphViz Edge between two nodes.

```php
protected createEdge(\phpDocumentor\Plugin\Graphs\Writer\Graph $graph, string $from_name, string|\phpDocumentor\Descriptor\ClassDescriptor|\phpDocumentor\Descriptor\InterfaceDescriptor|\phpDocumentor\Descriptor\TraitDescriptor $to): \phpDocumentor\GraphViz\Edge
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$graph` | **\phpDocumentor\Plugin\Graphs\Writer\Graph** |  |
| `$from_name` | **string** |  |
| `$to` | **string&#124;\phpDocumentor\Descriptor\ClassDescriptor&#124;\phpDocumentor\Descriptor\InterfaceDescriptor&#124;\phpDocumentor\Descriptor\TraitDescriptor** |  |




***

### createNamespaceGraph



```php
protected createNamespaceGraph(mixed $fqcn): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **mixed** |  |




***

### createEmptyNode



```php
protected createEmptyNode(string $name, \phpDocumentor\Plugin\Graphs\Writer\Graph $graph): \phpDocumentor\GraphViz\Node
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$graph` | **\phpDocumentor\Plugin\Graphs\Writer\Graph** |  |




***

### buildNamespaceTree

Builds a tree of namespace subgraphs with their classes associated.

```php
protected buildNamespaceTree(\phpDocumentor\GraphViz\Graph $graph, \phpDocumentor\Descriptor\NamespaceDescriptor $namespace): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$graph` | **\phpDocumentor\GraphViz\Graph** |  |
| `$namespace` | **\phpDocumentor\Descriptor\NamespaceDescriptor** |  |




***

### getDestinationPath



```php
protected getDestinationPath(\phpDocumentor\Transformer\Transformation $transformation): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transformation` | **\phpDocumentor\Transformer\Transformation** |  |




***

### checkIfGraphVizIsInstalled

Checks whether GraphViz is installed and throws an Exception otherwise.

```php
protected checkIfGraphVizIsInstalled(): void
```











***

### createGraphForNamespace



```php
protected createGraphForNamespace( $full_namespace_name,  $label): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$full_namespace_name` | **** |  |
| `$label` | **** |  |




***


## Inherited methods


### checkRequirements

This method verifies whether PHP has all requirements needed to run this writer.

```php
public checkRequirements(): void
```

If one of the requirements is missing for this Writer then an exception of type RequirementMissing
should be thrown; this indicates to the calling process that this writer will not function.









***

### checkForSpacesInPath

Checks if there is a space in the path.

```php
protected checkForSpacesInPath(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### transform

Abstract definition of the transformation method.

```php
public transform(\phpDocumentor\Descriptor\ProjectDescriptor $project, \phpDocumentor\Transformer\Transformation $transformation): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** | Document containing the structure. |
| `$transformation` | **\phpDocumentor\Transformer\Transformation** | Transformation to execute. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
