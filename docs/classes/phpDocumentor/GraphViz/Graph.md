***

# Graph

Class representing a graph; this may be a main graph but also a subgraph.

In case of a subgraph:
When the name of the subgraph is prefixed with _cluster_ then the contents of this graph will be grouped and a border
will be added. Otherwise it is used as logical container to place defaults in.

* Full name: `\phpDocumentor\GraphViz\Graph`

**See Also:**

* http://phpdoc.org -

## Properties

### name

```php
protected string $name
```

***

### type

```php
protected string $type
```

***

### strict

```php
protected bool $strict
```

***

### attributes

```php
protected \phpDocumentor\GraphViz\Attribute[] $attributes
```

***

### graphs

```php
protected \phpDocumentor\GraphViz\Graph[] $graphs
```

***

### nodes

```php
protected \phpDocumentor\GraphViz\Node[] $nodes
```

***

### edges

```php
protected \phpDocumentor\GraphViz\Edge[] $edges
```

***

### path

```php
protected string $path
```

***

## Methods

### create

Factory method to instantiate a Graph so that you can use fluent coding to chain everything.

```php
public static create(string $name = &#039;G&#039;, bool $directional = true): \phpDocumentor\GraphViz\Graph
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name for this graph. |
| `$directional` | **bool** | Whether this is a directed or undirected graph. |

***

### setPath

Sets the path for the execution. Only needed if it is not in the PATH env.

```php
public setPath(string $path): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path to execute dot from |

***

### setName

Sets the name for this graph.

```php
public setName(string $name): \phpDocumentor\GraphViz\Graph
```

If this is a subgraph you can prefix the name with _cluster_ to group all contained nodes and add a border.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The new name for this graph. |

***

### getName

Returns the name for this Graph.

```php
public getName(): string
```

***

### setType

Sets the type for this graph.

```php
public setType(string $type): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | Must be either &quot;digraph&quot;, &quot;graph&quot; or &quot;subgraph&quot;. |

***

### getType

Returns the type of this Graph.

```php
public getType(): string
```

***

### setStrict

Set if the Graph should be strict. If the graph is strict then multiple edges are not allowed between the same pairs of
nodes

```php
public setStrict(bool $isStrict): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isStrict` | **bool** |  |

***

### isStrict

```php
public isStrict(): bool
```

***

### __call

Magic method to provide a getter/setter to add attributes on the Graph.

```php
public __call(string $name, array $arguments): \phpDocumentor\GraphViz\Attribute[]|\phpDocumentor\GraphViz\Graph|null
```

Using this method we make sure that we support any attribute without too much hassle. If the name for this method does
not start with get or set we return null.

Set methods return this graph (fluent interface) whilst get methods return the attribute value.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the method including get/set |
| `$arguments` | **array** | The arguments, should be 1: the value |

***

### addGraph

Adds a subgraph to this graph; automatically changes the type to subgraph.

```php
public addGraph(\phpDocumentor\GraphViz\Graph $graph): \phpDocumentor\GraphViz\Graph
```

Please note that an index is maintained using the name of the subgraph. Thus if you have 2 subgraphs with the same name
that the first will be overwritten by the latter.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$graph` | **\phpDocumentor\GraphViz\Graph** | The graph to add onto this graph as<br />subgraph. |

**See Also:**

* \phpDocumentor\GraphViz\Graph::create() -

***

### hasGraph

Checks whether a graph with a certain name already exists.

```php
public hasGraph(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the graph to find. |

***

### getGraph

Returns the subgraph with a given name.

```php
public getGraph(string $name): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the requested graph. |

***

### setNode

Sets a node in the $nodes array; uses the name of the node as index.

```php
public setNode(\phpDocumentor\GraphViz\Node $node): \phpDocumentor\GraphViz\Graph
```

Nodes can be retrieved by retrieving the property with the same name. Thus 'node1' can be retrieved by invoking:
$graph->node1

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\phpDocumentor\GraphViz\Node** | The node to set onto this Graph. |

**See Also:**

* \phpDocumentor\GraphViz\Node::create() -

***

### findNode

Finds a node in this graph or any of its subgraphs.

```php
public findNode(string $name): \phpDocumentor\GraphViz\Node
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the node to find. |

***

### __set

Sets a node using a custom name.

```php
public __set(string $name, \phpDocumentor\GraphViz\Node $value): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the node. |
| `$value` | **\phpDocumentor\GraphViz\Node** | Node to set on the given name. |

**See Also:**

* \phpDocumentor\GraphViz\Graph::setNode() -

***

### __get

Returns the requested node by its name.

```php
public __get(string $name): \phpDocumentor\GraphViz\Node
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the node to retrieve. |

**See Also:**

* \phpDocumentor\GraphViz\Graph::setNode() -

***

### link

Links two nodes to eachother and registers the Edge onto this graph.

```php
public link(\phpDocumentor\GraphViz\Edge $edge): \phpDocumentor\GraphViz\Graph
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$edge` | **\phpDocumentor\GraphViz\Edge** | The link between two classes. |

**See Also:**

* \phpDocumentor\GraphViz\Edge::create() -

***

### export

Exports this graph to a generated image.

```php
public export(string $type, string $filename): \phpDocumentor\GraphViz\Graph
```

This is the only method that actually requires GraphViz.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | The type to export to; see the link above for a<br />list of supported types. |
| `$filename` | **string** | The path to write to. |

**See Also:**

* http://www.graphviz.org/content/output-formats -

***

### __toString

Generates a DOT file for use with GraphViz.

```php
public __toString(): string
```

GraphViz is not used in this method; it is safe to call it even without GraphViz installed.

yxorP::get('REQUEST')
