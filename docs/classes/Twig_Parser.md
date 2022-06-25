***

# Twig_Parser

Default parser implementation.

* Full name: `\Twig_Parser`
* Parent class: [`\Twig\Parser`](./Twig/Parser.md)

## Inherited methods

### __construct

```php
public __construct(\Twig\Environment $env): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |

***

### getEnvironment

```php
public getEnvironment(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getVarName

```php
public getVarName(): mixed
```

***

### getFilename

```php
public getFilename(): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### parse

Converts a token stream to a node tree.

```php
public parse(\Twig\TokenStream $stream, mixed $test = null, mixed $dropNeedle = false): \ModuleNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **\Twig\TokenStream** |  |
| `$test` | **mixed** |  |
| `$dropNeedle` | **mixed** |  |

***

### subparse

```php
public subparse(mixed $test, mixed $dropNeedle = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$test` | **mixed** |  |
| `$dropNeedle` | **mixed** |  |

***

### addHandler

```php
public addHandler(mixed $name, mixed $class): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$class` | **mixed** |  |

***

### addNodeVisitor

```php
public addNodeVisitor(\Twig\NodeVisitor\NodeVisitorInterface $visitor): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visitor` | **\Twig\NodeVisitor\NodeVisitorInterface** |  |

***

### getBlockStack

```php
public getBlockStack(): mixed
```

***

### peekBlockStack

```php
public peekBlockStack(): mixed
```

***

### popBlockStack

```php
public popBlockStack(): mixed
```

***

### pushBlockStack

```php
public pushBlockStack(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### hasBlock

```php
public hasBlock(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### getBlock

```php
public getBlock(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setBlock

```php
public setBlock(mixed $name, \Twig\Node\BlockNode $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$value` | **\Twig\Node\BlockNode** |  |

***

### hasMacro

```php
public hasMacro(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setMacro

```php
public setMacro(mixed $name, \Twig\Node\MacroNode $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$node` | **\Twig\Node\MacroNode** |  |

***

### isReservedMacroName

```php
public isReservedMacroName(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### addTrait

```php
public addTrait(mixed $trait): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trait` | **mixed** |  |

***

### hasTraits

```php
public hasTraits(): mixed
```

***

### embedTemplate

```php
public embedTemplate(\Twig\Node\ModuleNode $template): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **\Twig\Node\ModuleNode** |  |

***

### addImportedSymbol

```php
public addImportedSymbol(mixed $type, mixed $alias, mixed $name = null, \Twig\Node\Expression\AbstractExpression $node = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$alias` | **mixed** |  |
| `$name` | **mixed** |  |
| `$node` | **\Twig\Node\Expression\AbstractExpression** |  |

***

### getImportedSymbol

```php
public getImportedSymbol(mixed $type, mixed $alias): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$alias` | **mixed** |  |

***

### isMainScope

```php
public isMainScope(): mixed
```

***

### pushLocalScope

```php
public pushLocalScope(): mixed
```

***

### popLocalScope

```php
public popLocalScope(): mixed
```

***

### getExpressionParser

```php
public getExpressionParser(): \Twig\ExpressionParser
```

***

### getParent

```php
public getParent(): mixed
```

***

### setParent

```php
public setParent(mixed $parent): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **mixed** |  |

***

### getStream

```php
public getStream(): \Twig\TokenStream
```

***

### getCurrentToken

```php
public getCurrentToken(): \Twig\Token
```

***

### filterBodyNodes

```php
protected filterBodyNodes(\Twig_NodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |

yxorP::get('REQUEST')
