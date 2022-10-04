***

# ConsoleEvent

Allows to inspect input and output of a command.

* Full name: `\Symfony\Component\Console\Event\ConsoleEvent`
* Parent class: [`Event`](../../../Contracts/EventDispatcher/Event.md)

## Properties

### command

```php
protected $command
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

## Methods

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

