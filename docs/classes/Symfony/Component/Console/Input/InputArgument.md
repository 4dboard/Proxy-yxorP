***

# InputArgument

Represents a command line argument.

* Full name: `\Symfony\Component\Console\Input\InputArgument`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REQUIRED`|public| |1|
|`OPTIONAL`|public| |2|
|`IS_ARRAY`|public| |4|

## Properties

### name

```php
private $name
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
public __construct(string $name, int|null $mode = null, string $description = &#039;&#039;, string|string[]|null $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The argument name |
| `$mode` | **int&#124;null** | The argument mode: self::REQUIRED or self::OPTIONAL |
| `$description` | **string** | A description text |
| `$default` | **string&#124;string[]&#124;null** | The default value (for self::OPTIONAL mode only) |

***

### getName

Returns the argument name.

```php
public getName(): string
```

**Return Value:**

The argument name



***

### isRequired

Returns true if the argument is required.

```php
public isRequired(): bool
```

**Return Value:**

true if parameter mode is self::REQUIRED, false otherwise



***

### isArray

Returns true if the argument can take multiple values.

```php
public isArray(): bool
```

**Return Value:**

true if mode is self::IS_ARRAY, false otherwise



***

### setDefault

Sets the default value.

```php
public setDefault(string|string[]|null $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **string&#124;string[]&#124;null** | The default value |

***

### getDefault

Returns the default value.

```php
public getDefault(): string|string[]|null
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

The description text yxorP::get('REQUEST')
