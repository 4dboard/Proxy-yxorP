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
| `$section` | **string** | The section name |
| `$message` | **string** | The message |
| `$style` | **string** | The style to apply to the section |

**Return Value:**

The format section



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
| `$style` | **string** | The style to apply to the whole block |
| `$large` | **bool** | Whether to return a large block |

**Return Value:**

The formatter message



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
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |

**Return Value:**

The length of the string



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
public static formatMemory(mixed $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

yxorP::get('REQUEST')
