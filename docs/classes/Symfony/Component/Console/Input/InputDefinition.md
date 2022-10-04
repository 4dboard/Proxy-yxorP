***

# InputDefinition

A InputDefinition represents a set of valid command line arguments and options.

Usage:

$definition = new InputDefinition([
new InputArgument('name', InputArgument::REQUIRED),
new InputOption('foo', 'f', InputOption::VALUE_REQUIRED),
]);

* Full name: `\Symfony\Component\Console\Input\InputDefinition`

## Properties

### arguments

```php
private $arguments
```

***

### requiredCount

```php
private $requiredCount
```

***

### lastArrayArgument

```php
private $lastArrayArgument
```

***

### lastOptionalArgument

```php
private $lastOptionalArgument
```

***

### options

```php
private $options
```

***

### negations

```php
private $negations
```

***

### shortcuts

```php
private $shortcuts
```

***

## Methods

### __construct

```php
public __construct(array $definition = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array** | An array of InputArgument and InputOption instance |

***

### setDefinition

Sets the definition of the input.

```php
public setDefinition(array $definition): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array** |  |

***

### setArguments

Sets the InputArgument objects.

```php
public setArguments(\Symfony\Component\Console\Input\InputArgument[] $arguments = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **\Symfony\Component\Console\Input\InputArgument[]** | An array of InputArgument objects |

***

### addArguments

Adds an array of InputArgument objects.

```php
public addArguments(\Symfony\Component\Console\Input\InputArgument[] $arguments = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **\Symfony\Component\Console\Input\InputArgument[]** | An array of InputArgument objects |

***

### addArgument

```php
public addArgument(\Symfony\Component\Console\Input\InputArgument $argument): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argument` | **\Symfony\Component\Console\Input\InputArgument** |  |

***

### getArgument

Returns an InputArgument by name or by position.

```php
public getArgument(string|int $name): \Symfony\Component\Console\Input\InputArgument
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** | The InputArgument name or position |

***

### hasArgument

Returns true if an InputArgument object exists by name or position.

```php
public hasArgument(string|int $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** | The InputArgument name or position |

***

### getArguments

Gets the array of InputArgument objects.

```php
public getArguments(): \Symfony\Component\Console\Input\InputArgument[]
```

***

### getArgumentCount

Returns the number of InputArguments.

```php
public getArgumentCount(): int
```

***

### getArgumentRequiredCount

Returns the number of required InputArguments.

```php
public getArgumentRequiredCount(): int
```

***

### getArgumentDefaults

```php
public getArgumentDefaults(): (string|bool|int|float|array|null)[]
```

***

### setOptions

Sets the InputOption objects.

```php
public setOptions(\Symfony\Component\Console\Input\InputOption[] $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Symfony\Component\Console\Input\InputOption[]** | An array of InputOption objects |

***

### addOptions

Adds an array of InputOption objects.

```php
public addOptions(\Symfony\Component\Console\Input\InputOption[] $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Symfony\Component\Console\Input\InputOption[]** | An array of InputOption objects |

***

### addOption

```php
public addOption(\Symfony\Component\Console\Input\InputOption $option): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **\Symfony\Component\Console\Input\InputOption** |  |

***

### getOption

Returns an InputOption by name.

```php
public getOption(string $name): \Symfony\Component\Console\Input\InputOption
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### hasOption

Returns true if an InputOption object exists by name.

```php
public hasOption(string $name): bool
```

This method can't be used to check if the user included the option when
executing the command (use getOption() instead).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getOptions

Gets the array of InputOption objects.

```php
public getOptions(): \Symfony\Component\Console\Input\InputOption[]
```

***

### hasShortcut

Returns true if an InputOption object exists by shortcut.

```php
public hasShortcut(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### hasNegation

Returns true if an InputOption object exists by negated name.

```php
public hasNegation(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getOptionForShortcut

Gets an InputOption by shortcut.

```php
public getOptionForShortcut(string $shortcut): \Symfony\Component\Console\Input\InputOption
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shortcut` | **string** |  |

***

### getOptionDefaults

```php
public getOptionDefaults(): (string|bool|int|float|array|null)[]
```

***

### getSynopsis

Gets the synopsis.

```php
public getSynopsis(bool $short = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$short` | **bool** |  |

***


***

