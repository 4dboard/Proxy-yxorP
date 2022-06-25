***

# Function_

* Full name: `\PhpParser\Builder\Function_`
* Parent class: [`\PhpParser\Builder\FunctionLike`](./FunctionLike.md)

## Properties

### name

```php
protected $name
```

***

### stmts

```php
protected $stmts
```

***

## Methods

### __construct

Creates a function builder.

```php
public __construct(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the function |

***

### addStmt

Adds a statement.

```php
public addStmt(\PhpParser\Node|\PhpParser\Builder $stmt): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmt` | **\PhpParser\Node&#124;\PhpParser\Builder** | The statement to add |

**Return Value:**

The builder instance (for fluid interface)



***

### getNode

Returns the built function node.

```php
public getNode(): \PhpParser\Node\Stmt\Function_
```

**Return Value:**

The built function node



***

## Inherited methods

### makeReturnByRef

Make the function return by reference.

```php
public makeReturnByRef(): $this
```

**Return Value:**

The builder instance (for fluid interface)



***

### addParam

Adds a parameter.

```php
public addParam(\PhpParser\Node\Param|\PhpParser\Builder\Param $param): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$param` | **\PhpParser\Node\Param&#124;\PhpParser\Builder\Param** | The parameter to add |

**Return Value:**

The builder instance (for fluid interface)



***

### addParams

Adds multiple parameters.

```php
public addParams(array $params): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** | The parameters to add |

**Return Value:**

The builder instance (for fluid interface)



***

### addStmt

```php
public addStmt(mixed $stmt): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmt` | **mixed** |  |

***

### addStmts

Adds multiple statements.

```php
public addStmts(array $stmts): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **array** | The statements to add |

**Return Value:**

The builder instance (for fluid interface)



***

### setDocComment

Sets doc comment for the declaration.

```php
public setDocComment(\PhpParser\Comment\Doc|string $docComment): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docComment` | **\PhpParser\Comment\Doc&#124;string** | Doc comment to set |

**Return Value:**

The builder instance (for fluid interface)



***

### normalizeNode

Normalizes a node: Converts builder objects to nodes.

```php
protected normalizeNode(\PhpParser\Node|\PhpParser\Builder $node): \PhpParser\Node
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\Node&#124;\PhpParser\Builder** | The node to normalize |

**Return Value:**

The normalized node



***

### normalizeName

Normalizes a name: Converts plain string names to PhpParser\Node\Name.

```php
protected normalizeName(\PhpParser\Node\Name|string $name): \PhpParser\Node\Name
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **\PhpParser\Node\Name&#124;string** | The name to normalize |

**Return Value:**

The normalized name



***

### normalizeValue

Normalizes a value: Converts nulls, booleans, integers, floats, strings and arrays into their respective nodes

```php
protected normalizeValue(mixed $value): \PhpParser\Node\Expr
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to normalize |

**Return Value:**

The normalized value



***

### normalizeDocComment

Normalizes a doc comment: Converts plain strings to PhpParser\Comment\Doc.

```php
protected normalizeDocComment(\PhpParser\Comment\Doc|string $docComment): \PhpParser\Comment\Doc
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docComment` | **\PhpParser\Comment\Doc&#124;string** | The doc comment to normalize |

**Return Value:**

The normalized doc comment



***

### setModifier

Sets a modifier in the $this->type property.

```php
protected setModifier(int $modifier): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$modifier` | **int** | Modifier to set |

yxorP::get('REQUEST')
