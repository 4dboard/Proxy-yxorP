***

# Application

An Application is the container for a collection of commands.

It is the main entry point of a Console application.

This class is optimized for a standard CLI environment.

Usage:

    $app = new Application('myapp', '1.0 (stable)');
    $app->add(new SimpleCommand());
    $app->run();

* Full name: `\Symfony\Component\Console\Application`
* This class implements:
[`\Symfony\Contracts\Service\ResetInterface`](../../Contracts/Service/ResetInterface.md)



## Properties


### commands



```php
private $commands
```






***

### wantHelps



```php
private $wantHelps
```






***

### runningCommand



```php
private $runningCommand
```






***

### name



```php
private $name
```






***

### version



```php
private $version
```






***

### commandLoader



```php
private $commandLoader
```






***

### catchExceptions



```php
private $catchExceptions
```






***

### autoExit



```php
private $autoExit
```






***

### definition



```php
private $definition
```






***

### helperSet



```php
private $helperSet
```






***

### dispatcher



```php
private $dispatcher
```






***

### terminal



```php
private $terminal
```






***

### defaultCommand



```php
private $defaultCommand
```






***

### singleCommand



```php
private $singleCommand
```






***

### initialized



```php
private $initialized
```






***

### signalRegistry



```php
private $signalRegistry
```






***

### signalsToDispatchEvent



```php
private $signalsToDispatchEvent
```






***

## Methods


### __construct



```php
public __construct(string $name = &#039;UNKNOWN&#039;, string $version = &#039;UNKNOWN&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$version` | **string** |  |




***

### setDispatcher



```php
public setDispatcher(\Symfony\Contracts\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Contracts\EventDispatcher\EventDispatcherInterface** |  |




***

### setCommandLoader



```php
public setCommandLoader(\Symfony\Component\Console\CommandLoader\CommandLoaderInterface $commandLoader): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandLoader` | **\Symfony\Component\Console\CommandLoader\CommandLoaderInterface** |  |




***

### getSignalRegistry



```php
public getSignalRegistry(): \Symfony\Component\Console\SignalRegistry\SignalRegistry
```











***

### setSignalsToDispatchEvent



```php
public setSignalsToDispatchEvent(int $signalsToDispatchEvent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signalsToDispatchEvent` | **int** |  |




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

### reset



```php
public reset(): mixed
```











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

### getHelp

Gets the help message.

```php
public getHelp(): string
```











***

### areExceptionsCaught

Gets whether to catch exceptions or not during commands execution.

```php
public areExceptionsCaught(): bool
```











***

### setCatchExceptions

Sets whether to catch exceptions or not during commands execution.

```php
public setCatchExceptions(bool $boolean): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** |  |




***

### isAutoExitEnabled

Gets whether to automatically exit after a command execution or not.

```php
public isAutoExitEnabled(): bool
```











***

### setAutoExit

Sets whether to automatically exit after a command execution or not.

```php
public setAutoExit(bool $boolean): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$boolean` | **bool** |  |




***

### getName

Gets the name of the application.

```php
public getName(): string
```











***

### setName

Sets the application name.

```php
public setName(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getVersion

Gets the application version.

```php
public getVersion(): string
```











***

### setVersion

Sets the application version.

```php
public setVersion(string $version): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### getLongVersion

Returns the long version of the application.

```php
public getLongVersion(): string
```











***

### register

Registers a new command.

```php
public register(string $name): \Symfony\Component\Console\Command\Command
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




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




***

### get

Returns a registered command by name or alias.

```php
public get(string $name): \Symfony\Component\Console\Command\Command
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### has

Returns true if the command exists, false otherwise.

```php
public has(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getNamespaces

Returns an array of all unique namespaces used by currently registered commands.

```php
public getNamespaces(): string[]
```

It does not return the global namespace which always exists.









***

### findNamespace

Finds a registered namespace by a name or an abbreviation.

```php
public findNamespace(string $namespace): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |




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
| `$name` | **string** |  |




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
| `$namespace` | **string** |  |




***

### getAbbreviations

Returns an array of possible abbreviations given a set of names.

```php
public static getAbbreviations(array $names): string[][]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **array** |  |




***

### renderThrowable



```php
public renderThrowable(\Throwable $e, \Symfony\Component\Console\Output\OutputInterface $output): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




***

### doRenderThrowable



```php
protected doRenderThrowable(\Throwable $e, \Symfony\Component\Console\Output\OutputInterface $output): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




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
protected getCommandName(\Symfony\Component\Console\Input\InputInterface $input): string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |




***

### getDefaultInputDefinition

Gets the default input definition.

```php
protected getDefaultInputDefinition(): \Symfony\Component\Console\Input\InputDefinition
```











***

### getDefaultCommands

Gets the default commands that should always be available.

```php
protected getDefaultCommands(): \Symfony\Component\Console\Command\Command[]
```











***

### getDefaultHelperSet

Gets the default helper set with the helpers that should always be available.

```php
protected getDefaultHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```











***

### getAbbreviationSuggestions

Returns abbreviated suggestions in string format.

```php
private getAbbreviationSuggestions(array $abbrevs): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$abbrevs` | **array** |  |




***

### extractNamespace

Returns the namespace part of the command name.

```php
public extractNamespace(string $name, int $limit = null): string
```

This method is not part of public API and should not be used directly.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$limit` | **int** |  |




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
| `$name` | **string** |  |
| `$collection` | **iterable** |  |




***

### setDefaultCommand

Sets the default Command name.

```php
public setDefaultCommand(string $commandName, bool $isSingleCommand = false): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandName` | **string** |  |
| `$isSingleCommand` | **bool** |  |




***

### splitStringByWidth



```php
private splitStringByWidth(string $string, int $width): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$width` | **int** |  |




***

### extractAllNamespaces

Returns all namespaces of the command name.

```php
private extractAllNamespaces(string $name): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### init



```php
private init(): mixed
```











***


***

