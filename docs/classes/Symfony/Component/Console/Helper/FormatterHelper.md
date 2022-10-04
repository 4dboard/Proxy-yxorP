***

# FormatterHelper

The Formatter class provides helpers to format messages.

* Full name: `\Symfony\Component\Console\Helper\FormatterHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)

## Methods

### formatSection

Formats a message within a section.

```php
public formatSection(string $section, string $message, string $style = &#039;info&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$section` | **string** |  |
| `$message` | **string** |  |
| `$style` | **string** |  |

***

### formatBlock

Formats a message as a block of text.

```php
public formatBlock(string|array $messages, string $style, bool $large = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **string&#124;array** | The message to write in the block |
| `$style` | **string** |  |
| `$large` | **bool** |  |

***

### truncate

Truncates a message to the given length.

```php
public truncate(string $message, int $length, string $suffix = &#039;...&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$length` | **int** |  |
| `$suffix` | **string** |  |

***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

***

## Inherited methods

### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet|null
```

***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(?string $string): int
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |

***

### width

Returns the width of a string, using mb_strwidth if it is available.

```php
public static width(?string $string): int
```

The width is how many characters positions the string will use.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |

***

### length

Returns the length of a string, using mb_strlen if it is available.

```php
public static length(?string $string): int
```

The length is related to how many bytes the string will use.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |

***

### substr

Returns the subset of a string, using mb_substr if it is available.

```php
public static substr(?string $string, int $from, int $length = null): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |
| `$from` | **int** |  |
| `$length` | **int** |  |

***

### formatTime

```php
public static formatTime(mixed $secs): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |

***

### formatMemory

```php
public static formatMemory(int $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **int** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |

***


***

