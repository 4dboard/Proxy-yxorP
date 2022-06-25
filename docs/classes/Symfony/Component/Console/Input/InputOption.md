***

# InputOption

Represents a command line option.

* Full name: `\Symfony\Component\Console\Input\InputOption`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VALUE_NONE`|public| |1|
|`VALUE_REQUIRED`|public| |2|
|`VALUE_OPTIONAL`|public| |4|
|`VALUE_IS_ARRAY`|public| |8|

## Properties

### name

```php
private $name
```

***

### shortcut

```php
private $shortcut
```

***

### mode

```php
private $mode
```

***

### default

```php
private $default
```

***

### description

```php
private $description
```

***

## Methods

### __construct

```php
public __construct(string $name, string|array $shortcut = null, int|null $mode = null, string $description = &#039;&#039;, string|string[]|int|bool|null $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The option name |
| `$shortcut` | **
string&#124;array** | The shortcuts, can be null, a string of shortcuts delimited by &amp;#124; or an array of shortcuts |
| `$mode` | **int&#124;null** | The option mode: One of the VALUE_* constants |
| `$description` | **string** | A description text |
| `$default` | **string&#124;string[]
&#124;int&#124;bool&#124;null** | The default value (must be null for self::VALUE_NONE) |

***

### getShortcut

Returns the option shortcut.

```php
public getShortcut(): string
```

**Return Value:**

The shortcut



***

### getName

Returns the option name.

```php
public getName(): string
```

**Return Value:**

The name



***

### acceptValue

Returns true if the option accepts a value.

```php
public acceptValue(): bool
```

**Return Value:**

true if value mode is not self::VALUE_NONE, false otherwise



***

### isValueRequired

Returns true if the option requires a value.

```php
public isValueRequired(): bool
```

**Return Value:**

true if value mode is self::VALUE_REQUIRED, false otherwise



***

### isValueOptional

Returns true if the option takes an optional value.

```php
public isValueOptional(): bool
```

**Return Value:**

true if value mode is self::VALUE_OPTIONAL, false otherwise



***

### isArray

Returns true if the option can take multiple values.

```php
public isArray(): bool
```

**Return Value:**

true if mode is self::VALUE_IS_ARRAY, false otherwise



***

### setDefault

Sets the default value.

```php
public setDefault(string|string[]|int|bool|null $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **string&#124;string[]&#124;int&#124;bool&#124;null** | The default value |

***

### getDefault

Returns the default value.

```php
public getDefault(): string|string[]|int|bool|null
```

**Return Value:**

The default value



***

### getDescription

Returns the description text.

```php
public getDescription(): string
```

**Return Value:**

The description text



***

### equals

Checks whether the given option equals this one.

```php
public equals(self $option): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **self** |  |

yxorP::get('REQUEST')
