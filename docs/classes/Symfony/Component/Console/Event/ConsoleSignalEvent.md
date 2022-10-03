***

# ConsoleSignalEvent

Allows to inspect input and output of a command.



* Full name: `\Symfony\Component\Console\Event\ConsoleSignalEvent`
* Parent class: [`\Symfony\Component\Console\Event\ConsoleEvent`](./ConsoleEvent.md)
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**



## Properties


### handlingSignal



```php
private $handlingSignal
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Command\Command $command, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output, int $handlingSignal): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$handlingSignal` | **int** |  |




***

### getHandlingSignal



```php
public getHandlingSignal(): int
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

