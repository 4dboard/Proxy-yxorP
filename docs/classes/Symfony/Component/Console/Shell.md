***

# Shell

A Shell wraps an Application to add shell capabilities to it.

Support for history and completion only works with a PHP compiled with readline support (either --with-readline or
--with-libedit)

* Full name: `\Symfony\Component\Console\Shell`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### application

```php
private $application
```

***

### history

```php
private $history
```

***

### output

```php
private $output
```

***

### hasReadline

```php
private $hasReadline
```

***

### processIsolation

```php
private $processIsolation
```

***

## Methods

### __construct

If there is no readline support for the current PHP executable a \RuntimeException exception is thrown.

```php
public __construct(\Symfony\Component\Console\Application $application): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$application` | **\Symfony\Component\Console\Application** |  |

***

### run

Runs the shell.

```php
public run(): mixed
```

***

### getHeader

Returns the shell header.

```php
protected getHeader(): string
```

**Return Value:**

The header string



***

### getPrompt

Renders a prompt.

```php
protected getPrompt(): string
```

**Return Value:**

The prompt



***

### getOutput

```php
protected getOutput(): mixed
```

***

### getApplication

```php
protected getApplication(): mixed
```

***

### autocompleter

Tries to return autocompletion for the current entered text.

```php
private autocompleter(string $text): bool|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** | The last segment of the entered text |

**Return Value:**

A list of guessed strings or true



***

### readline

Reads a single line from standard input.

```php
private readline(): string
```

**Return Value:**

The single line from standard input



***

### getProcessIsolation

```php
public getProcessIsolation(): mixed
```

***

### setProcessIsolation

```php
public setProcessIsolation(mixed $processIsolation): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processIsolation` | **mixed** |  |

yxorP::get('REQUEST')
