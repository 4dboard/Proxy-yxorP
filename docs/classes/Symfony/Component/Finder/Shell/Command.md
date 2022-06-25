***

# Command

* Full name: `\Symfony\Component\Finder\Shell\Command`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### parent

```php
private $parent
```

***

### bits

```php
private $bits
```

***

### labels

```php
private $labels
```

***

### errorHandler

```php
private \Closure|null $errorHandler
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Finder\Shell\Command $parent = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\Symfony\Component\Finder\Shell\Command** |  |

***

### __toString

Returns command as string.

```php
public __toString(): string
```

***

### create

Creates a new Command instance.

```php
public static create(\Symfony\Component\Finder\Shell\Command $parent = null): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parent` | **\Symfony\Component\Finder\Shell\Command** |  |

***

### escape

Escapes special chars from input.

```php
public static escape(string $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A string to escape |

**Return Value:**

The escaped string



***

### quote

Quotes input.

```php
public static quote(string $input): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | An argument string |

**Return Value:**

The quoted string



***

### add

Appends a string or a Command instance.

```php
public add(string|\Symfony\Component\Finder\Shell\Command $bit): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bit` | **string&#124;\Symfony\Component\Finder\Shell\Command** |  |

***

### top

Prepends a string or a command instance.

```php
public top(string|\Symfony\Component\Finder\Shell\Command $bit): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bit` | **string&#124;\Symfony\Component\Finder\Shell\Command** |  |

***

### arg

Appends an argument, will be quoted.

```php
public arg(string $arg): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arg` | **string** |  |

***

### cmd

Appends escaped special command chars.

```php
public cmd(string $esc): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$esc` | **string** |  |

***

### ins

Inserts a labeled command to feed later.

```php
public ins(string $label): self|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **string** | The unique label |

***

### get

Retrieves a previously labeled command.

```php
public get(string $label): self|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$label` | **string** |  |

***

### end

Returns parent command (if any).

```php
public end(): self
```

***

### length

Counts bits stored in command.

```php
public length(): int
```

**Return Value:**

The bits count



***

### setErrorHandler

```php
public setErrorHandler(\Closure $errorHandler): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorHandler` | **\Closure** |  |

***

### getErrorHandler

```php
public getErrorHandler(): \Closure|null
```

***

### execute

Executes current command.

```php
public execute(): array
```

**Return Value:**

The command result



***

### join

Joins bits.

```php
public join(): string
```

***

### addAtIndex

Insert a string or a Command instance before the bit at given position $index (index starts from 0).

```php
public addAtIndex(string|\Symfony\Component\Finder\Shell\Command $bit, int $index): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bit` | **string&#124;\Symfony\Component\Finder\Shell\Command** |  |
| `$index` | **int** |  |

yxorP::get('REQUEST')
