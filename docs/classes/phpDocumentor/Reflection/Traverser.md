***

# Traverser

The source code traverser that scans the given source code and transforms it into tokens.

* Full name: `\phpDocumentor\Reflection\Traverser`

**See Also:**

* http://phpdoc.org -

## Properties

### visitors

List of visitors to apply upon traversing.

```php
public \PhpParser\NodeVisitorAbstract[] $visitors
```

**See Also:**

* \phpDocumentor\Reflection\traverse() -

***

## Methods

### traverse

Traverses the given contents and builds an AST.

```php
public traverse(string $contents): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** | The source code of the file that is to be scanned |

***

### addVisitor

Adds a visitor object to the traversal process.

```php
public addVisitor(\PhpParser\NodeVisitor $visitor): void
```

With visitors it is possible to extend the traversal process and modify the found tokens.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\PhpParser\NodeVisitor** |  |

***

### createParser

Creates a parser object using our own Lexer.

```php
protected createParser(): \PhpParser\Parser
```

***

### createTraverser

Creates a new traverser object and adds visitors.

```php
protected createTraverser(): \PhpParser\NodeTraverser
```

yxorP::get('REQUEST')
