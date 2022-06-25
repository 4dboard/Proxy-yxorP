***

# PrettyPrinterAbstract

* Full name: `\PhpParser\PrettyPrinterAbstract`
* This class is an **Abstract class**

## Properties

### precedenceMap

```php
protected $precedenceMap
```

***

### noIndentToken

```php
protected $noIndentToken
```

***

### canUseSemicolonNamespaces

```php
protected $canUseSemicolonNamespaces
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### prettyPrint

Pretty prints an array of statements.

```php
public prettyPrint(\PhpParser\Node[] $stmts): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **\PhpParser\Node[]** | Array of statements |

**Return Value:**

Pretty printed statements



***

### prettyPrintExpr

Pretty prints an expression.

```php
public prettyPrintExpr(\PhpParser\Node\Expr $node): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node\Expr** | Expression node |

**Return Value:**

Pretty printed node



***

### prettyPrintFile

Pretty prints a file of statements (includes the opening <?php tag if it is required).

```php
public prettyPrintFile(\PhpParser\Node[] $stmts): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **\PhpParser\Node[]** | Array of statements |

**Return Value:**

Pretty printed statements



***

### preprocessNodes

Preprocesses the top-level nodes to initialize pretty printer state.

```php
protected preprocessNodes(\PhpParser\Node[] $nodes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\PhpParser\Node[]** | Array of nodes |

***

### pStmts

Pretty prints an array of nodes (statements) and indents them optionally.

```php
protected pStmts(\PhpParser\Node[] $nodes, bool $indent = true): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\PhpParser\Node[]** | Array of nodes |
| `$indent` | **bool** | Whether to indent the printed nodes |

**Return Value:**

Pretty printed statements



***

### p

Pretty prints a node.

```php
protected p(\PhpParser\Node $node): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node to be pretty printed |

**Return Value:**

Pretty printed node



***

### pInfixOp

```php
protected pInfixOp(mixed $type, \PhpParser\Node $leftNode, mixed $operatorString, \PhpParser\Node $rightNode): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$leftNode` | **\PhpParser\Node** |  |
| `$operatorString` | **mixed** |  |
| `$rightNode` | **\PhpParser\Node** |  |

***

### pPrefixOp

```php
protected pPrefixOp(mixed $type, mixed $operatorString, \PhpParser\Node $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$operatorString` | **mixed** |  |
| `$node` | **\PhpParser\Node** |  |

***

### pPostfixOp

```php
protected pPostfixOp(mixed $type, \PhpParser\Node $node, mixed $operatorString): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$node` | **\PhpParser\Node** |  |
| `$operatorString` | **mixed** |  |

***

### pPrec

Prints an expression node with the least amount of parentheses necessary to preserve the meaning.

```php
protected pPrec(\PhpParser\Node $node, int $parentPrecedence, int $parentAssociativity, int $childPosition): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node** | Node to pretty print |
| `$parentPrecedence` | **int** | Precedence of the parent operator |
| `$parentAssociativity` | **int** | Associativity of parent operator<br />(-1 is left, 0 is nonassoc, 1 is right) |
| `$childPosition` | **int** | Position of the node relative to the operator<br />(-1 is left, 1 is right) |

**Return Value:**

The pretty printed node



***

### pImplode

Pretty prints an array of nodes and implodes the printed values.

```php
protected pImplode(\PhpParser\Node[] $nodes, string $glue = &#039;&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\PhpParser\Node[]** | Array of Nodes to be printed |
| `$glue` | **string** | Character to implode with |

**Return Value:**

Imploded pretty printed nodes



***

### pCommaSeparated

Pretty prints an array of nodes and implodes the printed values with commas.

```php
protected pCommaSeparated(\PhpParser\Node[] $nodes): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\PhpParser\Node[]** | Array of Nodes to be printed |

**Return Value:**

Comma separated pretty printed nodes



***

### pNoIndent

Signals the pretty printer that a string shall not be indented.

```php
protected pNoIndent(string $string): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | Not to be indented string |

**Return Value:**

String marked with $this->noIndentToken's.



***

### pComments

```php
protected pComments(array $comments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comments` | **array** |  |

yxorP::get('REQUEST')
