***

# Cursor

* Full name: `\Symfony\Component\Console\Cursor`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### output

```php
private $output
```

***

### input

```php
private $input
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, resource|null $input = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$input` | **resource&#124;null** |  |

***

### moveUp

```php
public moveUp(int $lines = 1): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **int** |  |

***

### moveDown

```php
public moveDown(int $lines = 1): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lines` | **int** |  |

***

### moveRight

```php
public moveRight(int $columns = 1): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columns` | **int** |  |

***

### moveLeft

```php
public moveLeft(int $columns = 1): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$columns` | **int** |  |

***

### moveToColumn

```php
public moveToColumn(int $column): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$column` | **int** |  |

***

### moveToPosition

```php
public moveToPosition(int $column, int $row): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$column` | **int** |  |
| `$row` | **int** |  |

***

### savePosition

```php
public savePosition(): $this
```

***

### restorePosition

```php
public restorePosition(): $this
```

***

### hide

```php
public hide(): $this
```

***

### show

```php
public show(): $this
```

***

### clearLine

Clears all the output from the current line.

```php
public clearLine(): $this
```

***

### clearLineAfter

Clears all the output from the current line after the current position.

```php
public clearLineAfter(): self
```

***

### clearOutput

Clears all the output from the cursors' current position to the end of the screen.

```php
public clearOutput(): $this
```

***

### clearScreen

Clears the entire screen.

```php
public clearScreen(): $this
```

***

### getCurrentPosition

Returns the current cursor position as x,y coordinates.

```php
public getCurrentPosition(): array
```

***


***

