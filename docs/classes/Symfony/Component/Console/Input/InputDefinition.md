***

# InputDefinition

A InputDefinition represents a set of valid command line arguments and options.

Usage:

$definition = new InputDefinition(array(
new InputArgument('name', InputArgument::REQUIRED), new InputOption('foo', 'f', InputOption::VALUE_REQUIRED),
));

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

### hasAnArrayArgument

```php
private $hasAnArrayArgument
```

***

### hasOptional

```php
private $hasOptional
```

***

### options

```php
private $options
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
public __construct(array $definition = array()): mixed
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
public setArguments(\Symfony\Component\Console\Input\InputArgument[] $arguments = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **\Symfony\Component\Console\Input\InputArgument[]** | An array of InputArgument objects |

***

### addArguments

Adds an array of InputArgument objects.

```php
public addArguments(\Symfony\Component\Console\Input\InputArgument[] $arguments = array()): mixed
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

**Return Value:**

An InputArgument object



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

**Return Value:**

true if the InputArgument object exists, false otherwise



***

### getArguments

Gets the array of InputArgument objects.

```php
public getArguments(): \Symfony\Component\Console\Input\InputArgument[]
```

**Return Value:**

An array of InputArgument objects



***

### getArgumentCount

Returns the number of InputArguments.

```php
public getArgumentCount(): int
```

**Return Value:**

The number of InputArguments



***

### getArgumentRequiredCount

Returns the number of required InputArguments.

```php
public getArgumentRequiredCount(): int
```

**Return Value:**

The number of required InputArguments



***

### getArgumentDefaults

Gets the default values.

```php
public getArgumentDefaults(): array
```

**Return Value:**

An array of default values



***

### setOptions

Sets the InputOption objects.

```php
public setOptions(\Symfony\Component\Console\Input\InputOption[] $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Symfony\Component\Console\Input\InputOption[]** | An array of InputOption objects |

***

### addOptions

Adds an array of InputOption objects.

```php
public addOptions(\Symfony\Component\Console\Input\InputOption[] $options = array()): mixed
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
| `$name` | **string** | The InputOption name |

**Return Value:**

A InputOption object



***

### hasOption

Returns true if an InputOption object exists by name.

```php
public hasOption(string $name): bool
```

This method can't be used to check if the user included the option when executing the command (use getOption() instead).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The InputOption name |

**Return Value:**

true if the InputOption object exists, false otherwise



***

### getOptions

Gets the array of InputOption objects.

```php
public getOptions(): \Symfony\Component\Console\Input\InputOption[]
```

**Return Value:**

An array of InputOption objects



***

### hasShortcut

Returns true if an InputOption object exists by shortcut.

```php
public hasShortcut(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The InputOption shortcut |

**Return Value:**

true if the InputOption object exists, false otherwise



***

### getOptionForShortcut

Gets an InputOption by shortcut.

```php
public getOptionForShortcut(string $shortcut): \Symfony\Component\Console\Input\InputOption
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shortcut` | **string** | The Shortcut name |

**Return Value:**

An InputOption object



***

### getOptionDefaults

Gets an array of default values.

```php
public getOptionDefaults(): array
```

**Return Value:**

An array of all default values



***

### shortcutToName

Returns the InputOption name given a shortcut.

```php
private shortcutToName(string $shortcut): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shortcut` | **string** | The shortcut |

**Return Value:**

The InputOption name



***

### getSynopsis

Gets the synopsis.

```php
public getSynopsis(bool $short = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$short` | **bool** | Whether to return the short version (with options folded) or not |

**Return Value:**

The synopsis



***

### asText

Returns a textual representation of the InputDefinition.

```php
public asText(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

A string representing the InputDefinition



***

### asXml

Returns an XML representation of the InputDefinition.

```php
public asXml(bool $asDom = false): string|\DOMDocument
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$asDom` | **bool** | Whether to return a DOM or an XML string |

**Return Value:**

An XML string representing the InputDefinition yxorP::get('REQUEST')
