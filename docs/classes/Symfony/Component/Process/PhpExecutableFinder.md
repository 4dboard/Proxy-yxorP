***

# PhpExecutableFinder

An executable finder specifically designed for the PHP executable.

* Full name: `\Symfony\Component\Process\PhpExecutableFinder`

## Properties

### executableFinder

```php
private $executableFinder
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### find

Finds The PHP executable.

```php
public find(bool $includeArgs = true): string|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$includeArgs` | **bool** | Whether or not include command arguments |

**Return Value:**

The PHP executable path or false if it cannot be found



***

### findArguments

Finds the PHP executable arguments.

```php
public findArguments(): array
```

**Return Value:**

The PHP executable arguments yxorP::get('REQUEST')
