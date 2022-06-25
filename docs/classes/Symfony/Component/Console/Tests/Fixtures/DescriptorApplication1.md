***

# DescriptorApplication1

An Application is the container for a collection of commands.

It is the main entry point of a Console application.

This class is optimized for a standard CLI environment.

Usage:

    $app = new Application('myapp', '1.0 (stable)');
    $app->add(new SimpleCommand());
    $app->run();

* Full name: `\Symfony\Component\Console\Tests\Fixtures\DescriptorApplication1`
* Parent class: [`\Symfony\Component\Console\Application`](../../Application.md)






## Inherited methods


### __construct



```php
public __construct(string $name = &#039;UNKNOWN&#039;, string $version = &#039;UNKNOWN&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the application |
| `$version` | **string** | The version of the application |




***

### setDispatcher



```php
public setDispatcher(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |




***

### run

Runs the current application.

```php
public run(\Symfony\Component\Console\Input\InputInterface $input = null, \Symfony\Component\Console\Output\OutputInterface $output = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |


**Return Value:**

0 if everything went fine, or an error code



***

### doRun

Runs the current application.

```php
public doRun(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |


**Return Value:**

0 if everything went fine, or an error code



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

Get the helper set associated with the command.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```









**Return Value:**

The HelperSet instance associated with this command



***

### setDefinition



```php
public setDefinition(\Symfony\Component\Console\Input\InputDefinition $definition): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$definition` | **\Symfony\Component\Console\Input\InputDefinition** |  |




***

### getDefinition

Gets the InputDefinition related to this Application.

```php
public getDefinition(): \Symfony\Component\Console\Input\InputDefinition
```









**Return Value:**

The InputDefinition instance



***

### getHelp

Gets the help message.

```php
public getHelp(): string
```









**Return Value:**

A help message



***

### setCatchExceptions

Sets whether to catch exceptions or not during commands execution.

```php
public setCatchExceptions(bool $boolean): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** | Whether to catch exceptions or not during commands execution |




***

### setAutoExit

Sets whether to automatically exit after a command execution or not.

```php
public setAutoExit(bool $boolean): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** | Whether to automatically exit after a command execution or not |




***

### getName

Gets the name of the application.

```php
public getName(): string
```









**Return Value:**

The application name



***

### setName

Sets the application name.

```php
public setName(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The application name |




***

### getVersion

Gets the application version.

```php
public getVersion(): string
```









**Return Value:**

The application version



***

### setVersion

Sets the application version.

```php
public setVersion(string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** | The application version |




***

### getLongVersion

Returns the long version of the application.

```php
public getLongVersion(): string
```









**Return Value:**

The long application version



***

### register

Registers a new command.

```php
public register(string $name): \Symfony\Component\Console\Command\Command
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The command name |


**Return Value:**

The newly created command



***

### addCommands

Adds an array of command objects.

```php
public addCommands(\Symfony\Component\Console\Command\Command[] $commands): mixed
```

If a Command is not enabled it will not be added.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commands` | **\Symfony\Component\Console\Command\Command[]** | An array of commands |




***

### add

Adds a command object.

```php
public add(\Symfony\Component\Console\Command\Command $command): \Symfony\Component\Console\Command\Command|null
```

If a command with the same name already exists, it will be overridden.
If the command is not enabled it will not be added.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |


**Return Value:**

The registered command if enabled or null



***

### get

Returns a registered command by name or alias.

```php
public get(string $name): \Symfony\Component\Console\Command\Command
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The command name or alias |


**Return Value:**

A Command object



***

### has

Returns true if the command exists, false otherwise.

```php
public has(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The command name or alias |


**Return Value:**

true if the command exists, false otherwise



***

### getNamespaces

Returns an array of all unique namespaces used by currently registered commands.

```php
public getNamespaces(): string[]
```

It does not return the global namespace which always exists.







**Return Value:**

An array of namespaces



***

### findNamespace

Finds a registered namespace by a name or an abbreviation.

```php
public findNamespace(string $namespace): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | A namespace or abbreviation to search for |


**Return Value:**

A registered namespace



***

### find

Finds a command by name or alias.

```php
public find(string $name): \Symfony\Component\Console\Command\Command
```

Contrary to get, this command tries to find the best
match if you give it an abbreviation of a name or alias.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | A command name or a command alias |


**Return Value:**

A Command instance



***

### all

Gets the commands (registered in the given namespace if provided).

```php
public all(string $namespace = null): \Symfony\Component\Console\Command\Command[]
```

The array keys are the full names and the values the command instances.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | A namespace name |


**Return Value:**

An array of Command instances



***

### getAbbreviations

Returns an array of possible abbreviations given a set of names.

```php
public static getAbbreviations(array $names): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **array** | An array of names |


**Return Value:**

An array of abbreviations



***

### asText

Returns a text representation of the Application.

```php
public asText(string $namespace = null, bool $raw = false): string
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | An optional namespace name |
| `$raw` | **bool** | Whether to return raw command list |


**Return Value:**

A string representing the Application



***

### asXml

Returns an XML representation of the Application.

```php
public asXml(string $namespace = null, bool $asDom = false): string|\DOMDocument
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** | An optional namespace name |
| `$asDom` | **bool** | Whether to return a DOM or an XML string |


**Return Value:**

An XML string representing the Application



***

### renderException

Renders a caught exception.

```php
public renderException(mixed $e, mixed $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **mixed** |  |
| `$output` | **mixed** |  |




***

### getTerminalWidth

Tries to figure out the terminal width in which this application runs.

```php
protected getTerminalWidth(): int|null
```











***

### getTerminalHeight

Tries to figure out the terminal height in which this application runs.

```php
protected getTerminalHeight(): int|null
```











***

### getTerminalDimensions

Tries to figure out the terminal dimensions based on the current environment.

```php
public getTerminalDimensions(): array
```









**Return Value:**

Array containing width and height



***

### setTerminalDimensions

Sets terminal dimensions.

```php
public setTerminalDimensions(int $width, int $height): $this
```

Can be useful to force terminal dimensions for functional tests.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** | The width |
| `$height` | **int** | The height |




***

### configureIO

Configures the input and output instances based on the user arguments and options.

```php
protected configureIO(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




***

### doRunCommand

Runs the current command.

```php
protected doRunCommand(\Symfony\Component\Console\Command\Command $command, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): int
```

If an event dispatcher has been attached to the application,
events are also dispatched during the life-cycle of the command.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |


**Return Value:**

0 if everything went fine, or an error code



***

### getCommandName

Gets the name of the command based on input.

```php
protected getCommandName(\Symfony\Component\Console\Input\InputInterface $input): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |


**Return Value:**

The command name



***

### getDefaultInputDefinition

Gets the default input definition.

```php
protected getDefaultInputDefinition(): \Symfony\Component\Console\Input\InputDefinition
```









**Return Value:**

An InputDefinition instance



***

### getDefaultCommands

Gets the default commands that should always be available.

```php
protected getDefaultCommands(): \Symfony\Component\Console\Command\Command[]
```









**Return Value:**

An array of default Command instances



***

### getDefaultHelperSet

Gets the default helper set with the helpers that should always be available.

```php
protected getDefaultHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```









**Return Value:**

A HelperSet instance



***

### getSttyColumns

Runs and parses stty -a if it's available, suppressing any error output.

```php
private getSttyColumns(): string
```











***

### getConsoleMode

Runs and parses mode CON if it's available, suppressing any error output.

```php
private getConsoleMode(): string|null
```









**Return Value:**

<width>x<height> or null if it could not be parsed



***

### getAbbreviationSuggestions

Returns abbreviated suggestions in string format.

```php
private getAbbreviationSuggestions(array $abbrevs): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$abbrevs` | **array** | Abbreviated suggestions to convert |


**Return Value:**

A formatted string of abbreviated suggestions



***

### extractNamespace

Returns the namespace part of the command name.

```php
public extractNamespace(string $name, string $limit = null): string
```

This method is not part of public API and should not be used directly.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The full name of the command |
| `$limit` | **string** | The maximum number of parts of the namespace |


**Return Value:**

The namespace of the command



***

### findAlternatives

Finds alternative of $name among $collection,
if nothing is found in $collection, try in $abbrevs.

```php
private findAlternatives(string $name, iterable $collection): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The string |
| `$collection` | **iterable** | The collection |


**Return Value:**

A sorted array of similar string



***

### setDefaultCommand

Sets the default Command name.

```php
public setDefaultCommand(string $commandName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandName` | **string** | The Command name |




***

### splitStringByWidth



```php
private splitStringByWidth(mixed $string, mixed $width): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |
| `$width` | **mixed** |  |




***

### extractAllNamespaces

Returns all namespaces of the command name.

```php
private extractAllNamespaces(string $name): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The full name of the command |


**Return Value:**

The namespaces of the command



***

### init



```php
private init(): mixed
```











***

### getExitCodeForThrowable



```php
private getExitCodeForThrowable(\Exception|\Throwable $throwable): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwable` | **\Exception&#124;\Throwable** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
