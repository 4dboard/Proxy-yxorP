***

# ConsoleCommandEvent

Allows to do things before the command is executed, like skipping the command or changing the input.



* Full name: `\Symfony\Component\Console\Event\ConsoleCommandEvent`
* Parent class: [`\Symfony\Component\Console\Event\ConsoleEvent`](./ConsoleEvent.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`RETURN_CODE_DISABLED`|public| |113|

## Properties


### commandShouldRun

Indicates if the command should be run or skipped.

```php
private $commandShouldRun
```






***

## Methods


### disableCommand

Disables the command, so it won't be run.

```php
public disableCommand(): bool
```











***

### enableCommand



```php
public enableCommand(): bool
```











***

### commandShouldRun

Returns true if the command is runnable, false otherwise.

```php
public commandShouldRun(): bool
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

