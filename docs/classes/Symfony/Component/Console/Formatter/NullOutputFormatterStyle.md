***

# NullOutputFormatterStyle

* Full name: `\Symfony\Component\Console\Formatter\NullOutputFormatterStyle`
* This class is marked as **final** and can't be subclassed
* This class implements:
  [`\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface`](./OutputFormatterStyleInterface.md)
* This class is a **Final class**

## Methods

### apply

Applies the style to a given text.

```php
public apply(string $text): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |

***

### setBackground

Sets style background color.

```php
public setBackground(string $color = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |

***

### setForeground

Sets style foreground color.

```php
public setForeground(string $color = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |

***

### setOption

Sets some specific style option.

```php
public setOption(string $option): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### setOptions

Sets multiple style options at once.

```php
public setOptions(array $options): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### unsetOption

Unsets some specific style option.

```php
public unsetOption(string $option): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***


***

