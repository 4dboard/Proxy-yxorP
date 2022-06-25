***

# DescriptorCommand1

Base class for all commands.

* Full name: `\Symfony\Component\Console\Tests\Fixtures\DescriptorCommand1`
* Parent class: [`\Symfony\Component\Console\Command\Command`](../../Command/Command.md)

## Methods

### configure

Configures the current command.

```php
protected configure(): mixed
```

***

## Inherited methods

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
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### getApplication

Gets the application instance for this command.

```php
public getApplication(): \Symfony\Component\Console\Application
```

**Return Value:**

An Application instance



***

### isEnabled

Checks whether the command is enabled or not in the current environment.

```php
public isEnabled(): bool
```

Override this to check for x or y and return false if the command can not run properly under the current conditions.









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
protected execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int|null
```

This method is not abstract because you can use this class as a concrete class. In this case, instead of defining the
execute() method, you set the code to execute by passing a Closure to the setCode() method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

**Return Value:**

null or 0 if everything went fine, or an error code

**See Also:**

* \Symfony\Component\Console\Command\setCode() -

***

### interact

Interacts with the user.

```php
protected interact(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

This method is executed before the InputDefinition is validated. This means that this is the only place where the
command can interactively ask for values of missing required arguments.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### initialize

Initializes the command after the input has been bound and before the input is validated.

```php
protected initialize(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

This is mainly useful when a lot of commands extends one main command where some things need to be initialized based on
the input arguments and options.

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

The code to execute is either defined directly with the setCode() method or by overriding the execute() method in a
sub-class.

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

### setCode

Sets the code to execute when running this command.

```php
public setCode(callable $code): $this
```

If this method is used, it overrides the code defined in the execute() method.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **callable** | A callable(InputInterface $input, OutputInterface $output) |

**See Also:**

* \Symfony\Component\Console\Command\execute() -

***

### mergeApplicationDefinition

Merges the application definition with the command definition.

```php
public mergeApplicationDefinition(bool $mergeArgs = true): mixed
```

This method is not part of public API and should not be used directly.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mergeArgs` | **
bool** | Whether to merge or not the Application definition arguments to Command definition arguments |

***

### setDefinition

Sets an array of argument and option instances.

```php
public setDefinition(array|\Symfony\Component\Console\Input\InputDefinition $definition): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **
array&#124;\Symfony\Component\Console\Input\InputDefinition** | An array of argument and option instances or a definition instance |

***

### getDefinition

Gets the InputDefinition attached to this Command.

```php
public getDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

**Return Value:**

An InputDefinition instance



***

### getNativeDefinition

Gets the InputDefinition to be used to create XML and Text representations of this Command.

```php
public getNativeDefinition(): \Symfony\Component\Console\Input\InputDefinition
```

Can be overridden to provide the original command representation when it would otherwise be changed by merging with the
application InputDefinition.

This method is not part of public API and should not be used directly.

**Return Value:**

An InputDefinition instance



***

### addArgument

Adds an argument.

```php
public addArgument(string $name, int|null $mode = null, string $description = &#039;&#039;, string|string[]|null $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The argument name |
| `$mode` | **int&#124;null** | The argument mode: self::REQUIRED or self::OPTIONAL |
| `$description` | **string** | A description text |
| `$default` | **string&#124;string[]&#124;null** | The default value (for self::OPTIONAL mode only) |

***

### addOption

Adds an option.

```php
public addOption(string $name, string|array $shortcut = null, int|null $mode = null, string $description = &#039;&#039;, string|string[]|int|bool|null $default = null): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The option name |
| `$shortcut` | **
string&#124;array** | The shortcuts, can be null, a string of shortcuts delimited by &amp;#124; or an array of shortcuts |
| `$mode` | **int&#124;null** | The option mode: One of the VALUE_* constants |
| `$description` | **string** | A description text |
| `$default` | **string&#124;string[]
&#124;int&#124;bool&#124;null** | The default value (must be null for self::VALUE_NONE) |

***

### setName

Sets the name of the command.

```php
public setName(string $name): $this
```

This method can set both the namespace and the name if you separate them by a colon (:)

    $command->setName('foo:bar');

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The command name |

***

### setProcessTitle

Sets the process title of the command.

```php
public setProcessTitle(string $title): $this
```

This feature should be used only when creating a long process command, like a daemon.

PHP 5.5+ or the proctitle PECL library is required

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **string** | The process title |

***

### getName

Returns the command name.

```php
public getName(): string
```

**Return Value:**

The command name



***

### setDescription

Sets the description for the command.

```php
public setDescription(string $description): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** | The description for the command |

***

### getDescription

Returns the description for the command.

```php
public getDescription(): string
```

**Return Value:**

The description for the command



***

### setHelp

Sets the help for the command.

```php
public setHelp(string $help): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$help` | **string** | The help for the command |

***

### getHelp

Returns the help for the command.

```php
public getHelp(): string
```

**Return Value:**

The help for the command



***

### getProcessedHelp

Returns the processed help for the command replacing the %command.name% and %command.full_name% patterns with the real
values dynamically.

```php
public getProcessedHelp(): string
```

**Return Value:**

The processed help for the command



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

**Return Value:**

An array of aliases for the command



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

**Return Value:**

The synopsis



***

### addUsage

Add a command usage example.

```php
public addUsage(string $usage): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$usage` | **string** | The usage, it&#039;ll be prefixed with the command name |

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
| `$name` | **string** | The helper name |

**Return Value:**

The helper value



***

### asText

Returns a text representation of the command.

```php
public asText(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Return Value:**

A string representing the command



***

### asXml

Returns an XML representation of the command.

```php
public asXml(bool $asDom = false): string|\DOMDocument
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$asDom` | **bool** | Whether to return a DOM or an XML string |

**Return Value:**

An XML string representing the command



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

yxorP::get('REQUEST')
