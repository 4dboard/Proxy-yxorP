***

# NodeTraverser

A node traverser.

It visits all nodes and their children and calls the given visitor for each.

* Full name: `\Twig\NodeTraverser`

## Properties

### env

```php
protected $env
```

***

### visitors

```php
protected $visitors
```

***

## Methods

### __construct

```php
public __construct(\Twig\Environment $env, \Twig\NodeVisitor\NodeVisitorInterface[] $visitors = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |
| `$visitors` | **\Twig\NodeVisitor\NodeVisitorInterface[]** |  |

***

### addVisitor

```php
public addVisitor(\Twig\NodeVisitor\NodeVisitorInterface $visitor): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Twig\NodeVisitor\NodeVisitorInterface** |  |

***

### traverse

Traverses a node and calls the registered visitors.

```php
public traverse(\Twig_NodeInterface $node): \Twig_NodeInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |

***

### traverseForVisitor

```php
protected traverseForVisitor(\Twig\NodeVisitor\NodeVisitorInterface $visitor, \Twig_NodeInterface $node = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Twig\NodeVisitor\NodeVisitorInterface** |  |
| `$node` | **\Twig_NodeInterface** |  |

yxorP::get('REQUEST')
