***

# LazyCommand

Base class for all commands.

* Full name: `\Symfony\Component\Console\Command\LazyCommand`
* Parent class: [`\Symfony\Component\Console\Command\Command`](./Command.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### command

```php
private $command
```

***

### isEnabled

```php
private $isEnabled
```

***

## Methods

### __construct

```php
public __construct(string $name, array $aliases, string $description, bool $isHidden, \Closure $commandFactory, ?bool $isEnabled = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the command; passing null means it must be set in configure() |
| `$aliases` | **array** |  |
| `$description` | **string** |  |
| `$isHidden` | **bool** |  |
| `$commandFactory` | **\Closure** |  |
| `$isEnabled` | **?bool** |  |

***

### ignoreValidationErrors

Ignores validation errors.

```php
public ignoreValidationErrors(): void
```

This is mainly useful for the help command.









***

### setApplication

```php
public setApplication(\Symfony\Component\Console\Application $application = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$application` | **\Symfony\Component\Console\Application** |  |

***

### setHelperSet

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### isEnabled

Checks whether the command is enabled or not in the current environment.

```php
public isEnabled(): bool
```

Override this to check for x or y and return false if the command cannot
run properly under the current conditions.









***

### run

Runs the command.

```php
public run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
```

The code to execute is either defined directly with the
setCode() method or by overriding the execute() method
in a sub-class.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

**Return Value:**

The command exit code



***

### complete

Adds suggestions to $suggestions for the current completion input (e.g. option or argument).

```php
public complete(\Symfony\Component\Console\Completion\CompletionInput $input, \Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Completion\CompletionInput** |  |
| `$suggestions` | **\Symfony\Component\Console\Completion\CompletionSuggestions** |  |

***

### setCode

Sets the code to execute when running this command.

```php
public setCode(callable $code): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **callable** | A callable(InputInterface $input, OutputInterface $output) |

***

### setDefinition

Sets an array of argument and option instances.

```php
public setDefinition(mixed $definition): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **mixed** | An array of argument and option instances or a definition instance |

***

### getDefinition

Gets the InputDefinition attached to this Command.

```php
public getDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

***

### getNativeDefinition

Gets the InputDefinition to be used to create representations of this Command.

```php
public getNativeDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

Can be overridden to provide the original command representation when it would otherwise
be changed by merging with the application InputDefinition.

This method is not part of public API and should not be used directly.









***

### addArgument

Adds an argument.

```php
public addArgument(string $name, int $mode = null, string $description = &#039;&#039;, mixed $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$mode` | **int** | The argument mode: InputArgument::REQUIRED or InputArgument::OPTIONAL |
| `$description` | **string** |  |
| `$default` | **mixed** | The default value (for InputArgument::OPTIONAL mode only) |

***

### addOption

Adds an option.

```php
public addOption(string $name, mixed $shortcut = null, int $mode = null, string $description = &#039;&#039;, mixed $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$shortcut` | **mixed** | The shortcuts, can be null, a string of shortcuts delimited by &amp;#124; or an array of shortcuts |
| `$mode` | **int** | The option mode: One of the InputOption::VALUE_* constants |
| `$description` | **string** |  |
| `$default` | **mixed** | The default value (must be null for InputOption::VALUE_NONE) |

***

### setProcessTitle

Sets the process title of the command.

```php
public setProcessTitle(string $title): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |

***

### setHelp

Sets the help for the command.

```php
public setHelp(string $help): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$help` | **string** |  |

***

### getHelp

Returns the help for the command.

```php
public getHelp(): string
```

***

### getProcessedHelp

Returns the processed help for the command replacing the %command.name% and
%command.full_name% patterns with the real values dynamically.

```php
public getProcessedHelp(): string
```

***

### getSynopsis

Returns the synopsis for the command.

```php
public getSynopsis(bool $short = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$short` | **bool** | Whether to show the short version of the synopsis (with options folded) or not |

***

### addUsage

Add a command usage example, it'll be prefixed with the command name.

```php
public addUsage(string $usage): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$usage` | **string** |  |

***

### getUsages

Returns alternative usages of the command.

```php
public getUsages(): array
```

***

### getHelper

Gets a helper instance by name.

```php
public getHelper(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getCommand

```php
public getCommand(): parent
```

***

## Inherited methods

### getDefaultName

```php
public static getDefaultName(): string|null
```

* This method is **static**.

***

### getDefaultDescription

```php
public static getDefaultDescription(): ?string
```

* This method is **static**.

***

### __construct

```php
public __construct(string|null $name = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;null** | The name of the command; passing null means it must be set in configure() |

***

### ignoreValidationErrors

Ignores validation errors.

```php
public ignoreValidationErrors(): mixed
```

This is mainly useful for the help command.









***

### setApplication

```php
public setApplication(\Symfony\Component\Console\Application $application = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$application` | **\Symfony\Component\Console\Application** |  |

***

### setHelperSet

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet|null
```

***

### getApplication

Gets the application instance for this command.

```php
public getApplication(): \Symfony\Component\Console\Application|null
```

***

### isEnabled

Checks whether the command is enabled or not in the current environment.

```php
public isEnabled(): bool
```

Override this to check for x or y and return false if the command cannot
run properly under the current conditions.









***

### configure

Configures the current command.

```php
protected configure(): mixed
```

***

### execute

Executes the current command.

```php
protected execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
```

This method is not abstract because you can use this class
as a concrete class. In this case, instead of defining the
execute() method, you set the code to execute by passing
a Closure to the setCode() method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

**Return Value:**

0 if everything went fine, or an exit code

**See Also:**

* \Symfony\Component\Console\Command\setCode() -

***

### interact

Interacts with the user.

```php
protected interact(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

This method is executed before the InputDefinition is validated.
This means that this is the only place where the command can
interactively ask for values of missing required arguments.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### initialize

Initializes the command after the input has been bound and before the input
is validated.

```php
protected initialize(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

This is mainly useful when a lot of commands extends one main command
where some things need to be initialized based on the input arguments and options.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

**See Also:**

* \Symfony\Component\Console\Input\InputInterface::bind() - * \Symfony\Component\Console\Input\InputInterface::
  validate() -

***

### run

Runs the command.

```php
public run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
```

The code to execute is either defined directly with the
setCode() method or by overriding the execute() method
in a sub-class.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

**Return Value:**

The command exit code

**See Also:**

* \Symfony\Component\Console\Command\setCode() - * \Symfony\Component\Console\Command\execute() -

***

### complete

Adds suggestions to $suggestions for the current completion input (e.g. option or argument).

```php
public complete(\Symfony\Component\Console\Completion\CompletionInput $input, \Symfony\Component\Console\Completion\CompletionSuggestions $suggestions): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Completion\CompletionInput** |  |
| `$suggestions` | **\Symfony\Component\Console\Completion\CompletionSuggestions** |  |

***

### setCode

Sets the code to execute when running this command.

```php
public setCode(callable $code): $this
```

If this method is used, it overrides the code defined
in the execute() method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **callable** | A callable(InputInterface $input, OutputInterface $output) |

**See Also:**

* \Symfony\Component\Console\Command\execute() -

***

### setDefinition

Sets an array of argument and option instances.

```php
public setDefinition(array|\Symfony\Component\Console\Input\InputDefinition $definition): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **array&#124;\Symfony\Component\Console\Input\InputDefinition** | An array of argument and option instances or a definition instance |

***

### getDefinition

Gets the InputDefinition attached to this Command.

```php
public getDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

***

### getNativeDefinition

Gets the InputDefinition to be used to create representations of this Command.

```php
public getNativeDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

Can be overridden to provide the original command representation when it would otherwise
be changed by merging with the application InputDefinition.

This method is not part of public API and should not be used directly.









***

### addArgument

Adds an argument.

```php
public addArgument(string $name, int|null $mode = null, string $description = &#039;&#039;, mixed $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$mode` | **int&#124;null** | The argument mode: InputArgument::REQUIRED or InputArgument::OPTIONAL |
| `$description` | **string** |  |
| `$default` | **mixed** | The default value (for InputArgument::OPTIONAL mode only) |

***

### addOption

Adds an option.

```php
public addOption(string $name, string|array|null $shortcut = null, int|null $mode = null, string $description = &#039;&#039;, mixed $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$shortcut` | **string&#124;array&#124;null** | The shortcuts, can be null, a string of shortcuts delimited by &amp;#124; or an array of shortcuts |
| `$mode` | **int&#124;null** | The option mode: One of the InputOption::VALUE_* constants |
| `$description` | **string** |  |
| `$default` | **mixed** | The default value (must be null for InputOption::VALUE_NONE) |

***

### setName

Sets the name of the command.

```php
public setName(string $name): $this
```

This method can set both the namespace and the name if
you separate them by a colon (:)

    $command->setName('foo:bar');

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### setProcessTitle

Sets the process title of the command.

```php
public setProcessTitle(string $title): $this
```

This feature should be used only when creating a long process command,
like a daemon.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** |  |

***

### getName

Returns the command name.

```php
public getName(): string|null
```

***

### setHidden

```php
public setHidden(bool $hidden): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hidden` | **bool** | Whether or not the command should be hidden from the list of commands<br />The default value will be true in Symfony 6.0 |

***

### isHidden

```php
public isHidden(): bool
```

**Return Value:**

whether the command should be publicly shown or not



***

### setDescription

Sets the description for the command.

```php
public setDescription(string $description): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |

***

### getDescription

Returns the description for the command.

```php
public getDescription(): string
```

***

### setHelp

Sets the help for the command.

```php
public setHelp(string $help): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$help` | **string** |  |

***

### getHelp

Returns the help for the command.

```php
public getHelp(): string
```

***

### getProcessedHelp

Returns the processed help for the command replacing the %command.name% and
%command.full_name% patterns with the real values dynamically.

```php
public getProcessedHelp(): string
```

***

### setAliases

Sets the aliases for the command.

```php
public setAliases(string[] $aliases): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aliases` | **string[]** | An array of aliases for the command |

***

### getAliases

Returns the aliases for the command.

```php
public getAliases(): array
```

***

### getSynopsis

Returns the synopsis for the command.

```php
public getSynopsis(bool $short = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$short` | **bool** | Whether to show the short version of the synopsis (with options folded) or not |

***

### addUsage

Add a command usage example, it'll be prefixed with the command name.

```php
public addUsage(string $usage): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$usage` | **string** |  |

***

### getUsages

Returns alternative usages of the command.

```php
public getUsages(): array
```

***

### getHelper

Gets a helper instance by name.

```php
public getHelper(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### validateName

Validates a command name.

```php
private validateName(string $name): mixed
```

It must be non-empty and parts can optionally be separated by ":".

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***


***

