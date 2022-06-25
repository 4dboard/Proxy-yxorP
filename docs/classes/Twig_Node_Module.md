***

# Twig_Node_Module

Represents a module node.

Consider this class as being final. If you need to customize the behavior of the generated class, consider adding nodes
to the following nodes: display_start, display_end, constructor_start, constructor_end, and class_end.

* Full name: `\Twig_Node_Module`
* Parent class: [`\Twig\Node\ModuleNode`](./Twig/Node/ModuleNode.md)

## Inherited methods

### __construct

```php
public __construct(array $nodes = [], array $attributes = [], int $lineno, string $tag = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | An array of named nodes |
| `$attributes` | **array** | An array of attributes (should not be nodes) |
| `$lineno` | **int** | The line number |
| `$tag` | **string** | The tag name associated with the Node |

***

### setIndex

```php
public setIndex(mixed $index): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |

***

### compile

Compiles the node to PHP.

```php
public compile(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileTemplate

```php
protected compileTemplate(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileGetParent

```php
protected compileGetParent(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileClassHeader

```php
protected compileClassHeader(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileConstructor

```php
protected compileConstructor(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileDisplay

```php
protected compileDisplay(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileClassFooter

```php
protected compileClassFooter(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileMacros

```php
protected compileMacros(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileGetTemplateName

```php
protected compileGetTemplateName(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileIsTraitable

```php
protected compileIsTraitable(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileDebugInfo

```php
protected compileDebugInfo(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileGetSource

```php
protected compileGetSource(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileGetSourceContext

```php
protected compileGetSourceContext(\Twig\Compiler $compiler): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |

***

### compileLoadTemplate

```php
protected compileLoadTemplate(\Twig\Compiler $compiler, mixed $node, mixed $var): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **\Twig\Compiler** |  |
| `$node` | **mixed** |  |
| `$var` | **mixed** |  |

***

### __toString

```php
public __toString(): mixed
```

***

### toXml

```php
public toXml(mixed $asDom = false): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$asDom` | **mixed** |  |

***

### getTemplateLine

```php
public getTemplateLine(): mixed
```

***

### getLine

```php
public getLine(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getNodeTag

```php
public getNodeTag(): mixed
```

***

### hasAttribute

```php
public hasAttribute(mixed $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getAttribute

```php
public getAttribute(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setAttribute

```php
public setAttribute(string $name, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |

***

### removeAttribute

```php
public removeAttribute(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### hasNode

```php
public hasNode(mixed $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getNode

```php
public getNode(mixed $name): \Twig\Node\Node
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setNode

```php
public setNode(mixed $name, mixed $node = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$node` | **mixed** |  |

***

### removeNode

```php
public removeNode(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### count

```php
public count(): int
```

***

### getIterator

```php
public getIterator(): \Traversable
```

***

### setTemplateName

```php
public setTemplateName(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getTemplateName

```php
public getTemplateName(): mixed
```

***

### setSourceContext

```php
public setSourceContext(\Twig\Source $source): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\Twig\Source** |  |

***

### getSourceContext

```php
public getSourceContext(): mixed
```

***

### setFilename

```php
public setFilename(mixed $name): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getFilename

```php
public getFilename(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

yxorP::get('REQUEST')
