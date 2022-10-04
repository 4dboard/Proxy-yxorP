***

# OutputFormatter

Formatter class for console output.

* Full name: `\Symfony\Component\Console\Formatter\OutputFormatter`
* This class implements:
  [`\Symfony\Component\Console\Formatter\WrappableOutputFormatterInterface`](./WrappableOutputFormatterInterface.md)

## Properties

### decorated

```php
private $decorated
```

***

### styles

```php
private $styles
```

***

### styleStack

```php
private $styleStack
```

***

## Methods

### __clone

```php
public __clone(): mixed
```

***

### escape

Escapes "<" and ">" special chars in given text.

```php
public static escape(string $text): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |

***

### __construct

Initializes console output formatter.

```php
public __construct(bool $decorated = false, \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface[] $styles = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** |  |
| `$styles` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface[]** | Array of &quot;name =&gt; FormatterStyle&quot; instances |

***

### setDecorated

{@inheritdoc}

```php
public setDecorated(bool $decorated): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** |  |

***

### isDecorated

{@inheritdoc}

```php
public isDecorated(): mixed
```

***

### setStyle

{@inheritdoc}

```php
public setStyle(string $name, \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$style` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |

***

### hasStyle

{@inheritdoc}

```php
public hasStyle(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getStyle

{@inheritdoc}

```php
public getStyle(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### format

{@inheritdoc}

```php
public format(?string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **?string** |  |

***

### formatAndWrap

Formats a message according to the given styles, wrapping at `$width` (0 means no wrapping).

```php
public formatAndWrap(?string $message, int $width): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **?string** |  |
| `$width` | **int** |  |

***

### getStyleStack

```php
public getStyleStack(): \Symfony\Component\Console\Formatter\OutputFormatterStyleStack
```

***

### createStyleFromString

Tries to create new style instance from string.

```php
private createStyleFromString(string $string): ?\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### applyCurrentStyle

Applies current style from stack to text, if must be applied.

```php
private applyCurrentStyle(string $text, string $current, int $width, int& $currentLineLength): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |
| `$current` | **string** |  |
| `$width` | **int** |  |
| `$currentLineLength` | **int** |  |

***


***

