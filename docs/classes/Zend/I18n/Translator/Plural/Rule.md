***

# Rule

Plural rule evaluator.

* Full name: `\Zend\I18n\Translator\Plural\Rule`

## Properties

### parser

Parser instance.

```php
protected static \Zend\I18n\Translator\Plural\Parser $parser
```

* This property is **static**.

***

### ast

Abstract syntax tree.

```php
protected array $ast
```

***

### numPlurals

Number of plurals in this rule.

```php
protected int $numPlurals
```

***

## Methods

### __construct

Create a new plural rule.

```php
protected __construct(int $numPlurals, array $ast): \Zend\I18n\Translator\Plural\Rule
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numPlurals` | **int** |  |
| `$ast` | **array** |  |

***

### evaluate

Evaluate a number and return the plural index.

```php
public evaluate(int $number): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |

***

### getNumPlurals

Get number of possible plural forms.

```php
public getNumPlurals(): int
```

***

### evaluateAstPart

Evaluate a part of an ast.

```php
protected evaluateAstPart(array $ast, int $number): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **array** |  |
| `$number` | **int** |  |

***

### fromString

Create a new rule from a string.

```php
public static fromString(string $string): \Zend\I18n\Translator\Plural\Rule
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### createAst

Create an AST from a tree.

```php
protected static createAst(\Zend\I18n\Translator\Plural\Symbol $symbol): array
```

Theoretically we could just use the given Symbol, but that one is not so easy to serialize and also takes up more
memory.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$symbol` | **\Zend\I18n\Translator\Plural\Symbol** |  |

yxorP::get('REQUEST')
