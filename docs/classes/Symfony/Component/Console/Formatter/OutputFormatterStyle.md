***

# OutputFormatterStyle

Formatter style class for defining styles.

* Full name: `\Symfony\Component\Console\Formatter\OutputFormatterStyle`
* This class implements:
  [`\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface`](./OutputFormatterStyleInterface.md)

## Properties

### color

```php
private $color
```

***

### foreground

```php
private $foreground
```

***

### background

```php
private $background
```

***

### options

```php
private $options
```

***

### href

```php
private $href
```

***

### handlesHrefGracefully

```php
private $handlesHrefGracefully
```

***

## Methods

### __construct

Initializes output formatter style.

```php
public __construct(string|null $foreground = null, string|null $background = null, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$foreground` | **string&#124;null** | The style foreground color name |
| `$background` | **string&#124;null** | The style background color name |
| `$options` | **array** |  |

***

### setForeground

Sets style foreground color.

```php
public setForeground(string $color = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |

***

### setBackground

Sets style background color.

```php
public setBackground(string $color = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$color` | **string** |  |

***

### setHref

```php
public setHref(string $url): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

***

### setOption

Sets some specific style option.

```php
public setOption(string $option): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### unsetOption

Unsets some specific style option.

```php
public unsetOption(string $option): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** |  |

***

### setOptions

Sets multiple style options at once.

```php
public setOptions(array $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

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


***

