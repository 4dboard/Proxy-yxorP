***

# Glob

* Full name: `\Symfony\Component\Finder\Expression\Glob`
* This class implements:
  [`\Symfony\Component\Finder\Expression\ValueInterface`](./ValueInterface.md)

## Properties

### pattern

```php
private $pattern
```

***

## Methods

### __construct

```php
public __construct(string $pattern): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |

***

### render

Renders string representation of expression.

```php
public render(): string
```

***

### renderPattern

Renders string representation of pattern.

```php
public renderPattern(): string
```

***

### getType

Returns expression type.

```php
public getType(): int
```

***

### isCaseSensitive

Returns value case sensitivity.

```php
public isCaseSensitive(): bool
```

***

### prepend

```php
public prepend(mixed $expr): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |

***

### append

```php
public append(mixed $expr): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |

***

### isExpandable

Tests if glob is expandable ("*.{a,b}" syntax).

```php
public isExpandable(): bool
```

***

### toRegex

```php
public toRegex(bool $strictLeadingDot = true, bool $strictWildcardSlash = true): \Symfony\Component\Finder\Expression\Regex
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strictLeadingDot` | **bool** |  |
| `$strictWildcardSlash` | **bool** |  |

yxorP::get('REQUEST')
