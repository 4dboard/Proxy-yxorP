***

# NullOutputFormatter

* Full name: `\Symfony\Component\Console\Formatter\NullOutputFormatter`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Symfony\Component\Console\Formatter\OutputFormatterInterface`](./OutputFormatterInterface.md)
* This class is a **Final class**

## Properties

### style

```php
private $style
```

***

## Methods

### format

Formats a message according to the given styles.

```php
public format(?string $message): string|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **?string** |  |

***

### getStyle

Gets style options from style with specified name.

```php
public getStyle(string $name): \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### hasStyle

Checks if output formatter has style with specified name.

```php
public hasStyle(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### isDecorated

Whether the output will decorate messages.

```php
public isDecorated(): bool
```

***

### setDecorated

Sets the decorated flag.

```php
public setDecorated(bool $decorated): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** |  |

***

### setStyle

Sets a new style.

```php
public setStyle(string $name, \Symfony\Component\Console\Formatter\OutputFormatterStyleInterface $style): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$style` | **\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface** |  |

***


***

