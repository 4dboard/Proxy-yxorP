***

# CommandTester

Eases the testing of console commands.

* Full name: `\Symfony\Component\Console\Tester\CommandTester`

## Properties

### command

```php
private $command
```

***

### input

```php
private $input
```

***

### output

```php
private $output
```

***

### statusCode

```php
private $statusCode
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Command\Command $command): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |

***

### execute

Executes the command.

```php
public execute(array $input, array $options = array()): int
```

Available execution options:

* interactive: Sets the input interactive flag
* decorated:   Sets the output decorated flag
* verbosity:   Sets the output verbosity flag

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **array** | An array of command arguments and options |
| `$options` | **array** | An array of execution options |

**Return Value:**

The command exit code



***

### getDisplay

Gets the display returned by the last execution of the command.

```php
public getDisplay(bool $normalize = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalize` | **bool** | Whether to normalize end of lines to \n or not |

**Return Value:**

The display



***

### getInput

Gets the input instance used by the last execution of the command.

```php
public getInput(): \Symfony\Component\Console\Input\InputInterface
```

**Return Value:**

The current input instance



***

### getOutput

Gets the output instance used by the last execution of the command.

```php
public getOutput(): \Symfony\Component\Console\Output\OutputInterface
```

**Return Value:**

The current output instance



***

### getStatusCode

Gets the status code returned by the last execution of the application.

```php
public getStatusCode(): int
```

**Return Value:**

The status code yxorP::get('REQUEST')
