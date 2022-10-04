***

# ConsoleErrorEvent

Allows to handle throwables thrown while running a command.

* Full name: `\Symfony\Component\Console\Event\ConsoleErrorEvent`
* Parent class: [`\Symfony\Component\Console\Event\ConsoleEvent`](./ConsoleEvent.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### error

```php
private $error
```

***

### exitCode

```php
private $exitCode
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output, \Throwable $error, \Symfony\Component\Console\Command\Command $command = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$error` | **\Throwable** |  |
| `$command` | **\Symfony\Component\Console\Command\Command** |  |

***

### getError

```php
public getError(): \Throwable
```

***

### setError

```php
public setError(\Throwable $error): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Throwable** |  |

***

### setExitCode

```php
public setExitCode(int $exitCode): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exitCode` | **int** |  |

***

### getExitCode

```php
public getExitCode(): int
```

***

## Inherited methods

### __construct

```php
public __construct(?\Symfony\Component\Console\Command\Command $command, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **?\Symfony\Component\Console\Command\Command** |  |
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### getCommand

Gets the command that is executed.

```php
public getCommand(): \Symfony\Component\Console\Command\Command|null
```

***

### getInput

Gets the input instance.

```php
public getInput(): \Symfony\Component\Console\Input\InputInterface
```

***

### getOutput

Gets the output instance.

```php
public getOutput(): \Symfony\Component\Console\Output\OutputInterface
```

***


***

