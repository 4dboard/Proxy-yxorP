***

# ContainerCommandLoader

Loads commands from a PSR-11 container.

* Full name: `\Symfony\Component\Console\CommandLoader\ContainerCommandLoader`
* This class implements:
  [`\Symfony\Component\Console\CommandLoader\CommandLoaderInterface`](./CommandLoaderInterface.md)

## Properties

### container

```php
private $container
```

***

### commandMap

```php
private $commandMap
```

***

## Methods

### __construct

```php
public __construct(\Psr\Container\ContainerInterface $container, array $commandMap): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$container` | **\Psr\Container\ContainerInterface** |  |
| `$commandMap` | **array** | An array with command names as keys and service ids as values |

***

### get

Loads a command.

```php
public get(string $name): \Symfony\Component\Console\Command\Command
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### has

Checks if a command exists.

```php
public has(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getNames

```php
public getNames(): string[]
```

***


***

