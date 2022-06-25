***

# Twig_Lexer

Lexes a template string.

* Full name: `\Twig_Lexer`
* Parent class: [`\Twig\Lexer`](./Twig/Lexer.md)

## Inherited methods

### __construct

```php
public __construct(\Twig\Environment $env, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |
| `$options` | **array** |  |

***

### tokenize

Tokenizes a source code.

```php
public tokenize(mixed $code, mixed $name = null): \TokenStream
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** | The source code |
| `$name` | **mixed** | A unique identifier for the source code |

***

### lexData

```php
protected lexData(): mixed
```

***

### lexBlock

```php
protected lexBlock(): mixed
```

***

### lexVar

```php
protected lexVar(): mixed
```

***

### lexExpression

```php
protected lexExpression(): mixed
```

***

### lexRawData

```php
protected lexRawData(mixed $tag): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **mixed** |  |

***

### lexComment

```php
protected lexComment(): mixed
```

***

### lexString

```php
protected lexString(): mixed
```

***

### lexInterpolation

```php
protected lexInterpolation(): mixed
```

***

### pushToken

```php
protected pushToken(mixed $type, mixed $value = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$value` | **mixed** |  |

***

### moveCursor

```php
protected moveCursor(mixed $text): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |

***

### getOperatorRegex

```php
protected getOperatorRegex(): mixed
```

***

### pushState

```php
protected pushState(mixed $state): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |

***

### popState

```php
protected popState(): mixed
```

yxorP::get('REQUEST')
