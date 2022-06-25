***

# Regex

* Full name: `\Symfony\Component\Finder\Expression\Regex`
* This class implements:
  [`\Symfony\Component\Finder\Expression\ValueInterface`](./ValueInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`START_FLAG`|public| |&#039;^&#039;|
|`END_FLAG`|public| |&#039;$&#039;|
|`BOUNDARY`|public| |&#039;~&#039;|
|`JOKER`|public| |&#039;.*&#039;|
|`ESCAPING`|public| |&#039;\\&#039;|

## Properties

### pattern

```php
private string $pattern
```

***

### options

```php
private string $options
```

***

### startFlag

```php
private bool $startFlag
```

***

### endFlag

```php
private bool $endFlag
```

***

### startJoker

```php
private bool $startJoker
```

***

### endJoker

```php
private bool $endJoker
```

***

## Methods

### create

```php
public static create(string $expr): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **string** |  |

***

### __construct

```php
public __construct(string $pattern, string $options = &#039;&#039;, string $delimiter = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |
| `$options` | **string** |  |
| `$delimiter` | **string** |  |

***

### __toString

```php
public __toString(): string
```

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

### isCaseSensitive

Returns value case sensitivity.

```php
public isCaseSensitive(): bool
```

***

### getType

Returns expression type.

```php
public getType(): int
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

### hasOption

```php
public hasOption(string $option): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### addOption

```php
public addOption(string $option): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### removeOption

```php
public removeOption(string $option): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### setStartFlag

```php
public setStartFlag(bool $startFlag): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startFlag` | **bool** |  |

***

### hasStartFlag

```php
public hasStartFlag(): bool
```

***

### setEndFlag

```php
public setEndFlag(bool $endFlag): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endFlag` | **bool** |  |

***

### hasEndFlag

```php
public hasEndFlag(): bool
```

***

### setStartJoker

```php
public setStartJoker(bool $startJoker): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startJoker` | **bool** |  |

***

### hasStartJoker

```php
public hasStartJoker(): bool
```

***

### setEndJoker

```php
public setEndJoker(bool $endJoker): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$endJoker` | **bool** |  |

***

### hasEndJoker

```php
public hasEndJoker(): bool
```

***

### replaceJokers

```php
public replaceJokers(mixed $replacement): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **mixed** |  |

***

### parsePattern

```php
private parsePattern(string $pattern): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **string** |  |

yxorP::get('REQUEST')
