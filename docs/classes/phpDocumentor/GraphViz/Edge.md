***

# Edge

Class representing an edge (arrow, line).



* Full name: `\phpDocumentor\GraphViz\Edge`

**See Also:**

* http://phpdoc.org - 



## Properties


### from



```php
protected \phpDocumentor\GraphViz\Node $from
```






***

### to



```php
protected \phpDocumentor\GraphViz\Node $to
```






***

### attributes



```php
protected \phpDocumentor\GraphViz\Attribute $attributes
```






***

## Methods


### __construct

Creates a new Edge / Link between the given nodes.

```php
public __construct(\phpDocumentor\GraphViz\Node $from, \phpDocumentor\GraphViz\Node $to): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **\phpDocumentor\GraphViz\Node** | Starting node to create an Edge from. |
| `$to` | **\phpDocumentor\GraphViz\Node** | Destination node where to create and<br />edge to. |




***

### create

Factory method used to assist with fluent interface handling.

```php
public static create(\phpDocumentor\GraphViz\Node $from, \phpDocumentor\GraphViz\Node $to): \phpDocumentor\GraphViz\Edge
```

See the examples for more details.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **\phpDocumentor\GraphViz\Node** | Starting node to create an Edge from. |
| `$to` | **\phpDocumentor\GraphViz\Node** | Destination node where to create and<br />edge to. |




***

### getFrom

Returns the source Node for this Edge.

```php
public getFrom(): \phpDocumentor\GraphViz\Node
```











***

### getTo

Returns the destination Node for this Edge.

```php
public getTo(): \phpDocumentor\GraphViz\Node
```











***

### __call

Magic method to provide a getter/setter to add attributes on the edge.

```php
public __call(string $name, array $arguments): \phpDocumentor\GraphViz\Attribute[]|\phpDocumentor\GraphViz\Edge|null
```

Using this method we make sure that we support any attribute without too
much hassle. If the name for this method does not start with get or set
we return null.

Set methods return this graph (fluent interface) whilst get methods
return the attribute value.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | name of the invoked method, expect it to be<br />setX or getX. |
| `$arguments` | **array** | Arguments for the setter, only 1 is expected: value |




***

### __toString

Returns the edge definition as is requested by GraphViz.

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
