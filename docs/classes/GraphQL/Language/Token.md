***

# Token

Represents a range of characters represented by a lexical token
within a Source.

* Full name: `\GraphQL\Language\Token`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SOF`|public| |&#039;&lt;SOF&gt;&#039;|
|`EOF`|public| |&#039;&lt;EOF&gt;&#039;|
|`BANG`|public| |&#039;!&#039;|
|`DOLLAR`|public| |&#039;$&#039;|
|`AMP`|public| |&#039;&amp;&#039;|
|`PAREN_L`|public| |&#039;(&#039;|
|`PAREN_R`|public| |&#039;)&#039;|
|`SPREAD`|public| |&#039;...&#039;|
|`COLON`|public| |&#039;:&#039;|
|`EQUALS`|public| |&#039;=&#039;|
|`AT`|public| |&#039;@&#039;|
|`BRACKET_L`|public| |&#039;[&#039;|
|`BRACKET_R`|public| |&#039;]&#039;|
|`BRACE_L`|public| |&#039;{&#039;|
|`PIPE`|public| |&#039;|&#039;|
|`BRACE_R`|public| |&#039;}&#039;|
|`NAME`|public| |&#039;Name&#039;|
|`INT`|public| |&#039;Int&#039;|
|`FLOAT`|public| |&#039;Float&#039;|
|`STRING`|public| |&#039;String&#039;|
|`BLOCK_STRING`|public| |&#039;BlockString&#039;|
|`COMMENT`|public| |&#039;Comment&#039;|

## Properties

### kind

The kind of Token (see one of constants above).

```php
public string $kind
```

***

### start

The character offset at which this Node begins.

```php
public int $start
```

***

### end

The character offset at which this Node ends.

```php
public int $end
```

***

### line

The 1-indexed line number on which this Token appears.

```php
public int $line
```

***

### column

The 1-indexed column number at which this Token begins.

```php
public int $column
```

***

### value

```php
public string|null $value
```

***

### prev

Tokens exist as nodes in a double-linked-list amongst all tokens
including ignored tokens. <SOF> is always the first node and <EOF>
the last.

```php
public \GraphQL\Language\Token $prev
```

***

### next

```php
public \GraphQL\Language\Token|null $next
```

***

## Methods

### __construct

```php
public __construct(string $kind, int $start, int $end, int $line, int $column, ?\GraphQL\Language\Token $previous = null, mixed $value = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** |  |
| `$start` | **int** |  |
| `$end` | **int** |  |
| `$line` | **int** |  |
| `$column` | **int** |  |
| `$previous` | **?\GraphQL\Language\Token** |  |
| `$value` | **mixed** |  |

***

### getDescription

```php
public getDescription(): string
```

***

### toArray

```php
public toArray(): (string|int|null)[]
```

***


***

