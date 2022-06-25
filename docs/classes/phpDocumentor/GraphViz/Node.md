***

# Node

Class representing a node / element in a graph.

* Full name: `\phpDocumentor\GraphViz\Node`

**See Also:**

* http://phpdoc.org -

## Properties

### name

```php
protected string $name
```

***

### attributes

```php
protected \phpDocumentor\GraphViz\Attribute[] $attributes
```

***

## Methods

### __construct

Creates a new node with name and optional label.

```php
public __construct(string $name, string|null $label = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the new node. |
| `$label` | **string&#124;null** | Optional label text. |

***

### create

Factory method used to assist with fluent interface handling.

```php
public static create(string $name, string|null $label = null): \phpDocumentor\GraphViz\Node
```

See the examples for more details.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the new node. |
| `$label` | **string&#124;null** | Optional label text. |

***

### setName

Sets the name for this node.

```php
public setName(string $name): \phpDocumentor\GraphViz\Node
```

Not to confuse with the label.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name for this node. |

***

### getName

Returns the name for this node.

```php
public getName(): string
```

***

### __call

Magic method to provide a getter/setter to add attributes on the Node.

```php
public __call(string $name, array $arguments): \phpDocumentor\GraphViz\Attribute[]|\phpDocumentor\GraphViz\Node|null
```

Using this method we make sure that we support any attribute without too much hassle. If the name for this method does
not start with get or set we return null.

Set methods return this graph (fluent interface) whilst get methods return the attribute value.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Method name; either getX or setX is expected. |
| `$arguments` | **array** | List of arguments; only 1 is expected for setX. |

***

### __toString

Returns the node definition as is requested by GraphViz.

```php
public __toString(): string
```

yxorP::get('REQUEST')
