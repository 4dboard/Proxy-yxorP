***

# Printer

Prints AST to string. Capable of printing GraphQL queries and Type definition language.

Useful for pretty-printing queries or printing back AST for logging, documentation, etc.

Usage example:

```php
$query = 'query myQuery {someField}';
$ast = GraphQL\Language\Parser::parse($query);
$printed = GraphQL\Language\Printer::doPrint($ast);
```

* Full name: `\GraphQL\Language\Printer`

## Methods

### doPrint

Prints AST to string. Capable of printing GraphQL queries and Type definition language.

```php
public static doPrint(\GraphQL\Language\AST\Node $ast): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\GraphQL\Language\AST\Node** |  |

***

### __construct

```php
protected __construct(): mixed
```

***

### printAST

Traverse an AST bottom-up, converting all nodes to strings.

```php
public printAST(mixed $ast): mixed
```

That means the AST is manipulated in such a way that it no longer
resembles the well-formed result of parsing.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **mixed** |  |

***

### addDescription

```php
public addDescription(callable $cb): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cb` | **callable** |  |

***

### wrap

If maybeString is not null or empty, then wrap with start and end, otherwise
print an empty string.

```php
public wrap(mixed $start, mixed $maybeString, mixed $end = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **mixed** |  |
| `$maybeString` | **mixed** |  |
| `$end` | **mixed** |  |

***

### block

Given array, print each item on its own line, wrapped in an
indented "{ }" block.

```php
public block(mixed $array): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **mixed** |  |

***

### indent

```php
public indent(mixed $maybeString): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maybeString` | **mixed** |  |

***

### manyList

```php
public manyList(mixed $start, mixed $list, mixed $separator, mixed $end): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **mixed** |  |
| `$list` | **mixed** |  |
| `$separator` | **mixed** |  |
| `$end` | **mixed** |  |

***

### length

```php
public length(mixed $maybeArray): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maybeArray` | **mixed** |  |

***

### join

```php
public join(mixed $maybeArray, mixed $separator = &#039;&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$maybeArray` | **mixed** |  |
| `$separator` | **mixed** |  |

***

### printBlockString

Print a block string in the indented block form by adding a leading and
trailing blank line. However, if a block string starts with whitespace and is
a single-line, adding a leading blank line would strip that whitespace.

```php
private printBlockString(mixed $value, mixed $isDescription): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$isDescription` | **mixed** |  |

***


***

