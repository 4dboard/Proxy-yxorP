***

# ConsoleEvent

Allows to inspect input and output of a command.

* Full name: `\Symfony\Component\Console\Event\ConsoleEvent`
* Parent class: [`\Symfony\Component\EventDispatcher\Event`](../../EventDispatcher/Event.md)

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
public __construct(\Symfony\Component\Console\Command\Command $command, \Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### getCommand

Gets the command that is executed.

```php
public getCommand(): \Symfony\Component\Console\Command\Command
```

**Return Value:**

A Command instance



***

### getInput

Gets the input instance.

```php
public getInput(): \Symfony\Component\Console\Input\InputInterface
```

**Return Value:**

An InputInterface instance



***

### getOutput

Gets the output instance.

```php
public getOutput(): \Symfony\Component\Console\Output\OutputInterface
```

**Return Value:**

An OutputInterface instance



***

## Inherited methods

### isPropagationStopped

Returns whether further event listeners should be triggered.

```php
public isPropagationStopped(): bool
```

**Return Value:**

Whether propagation was already stopped for this event

**See Also:**

* \Symfony\Component\EventDispatcher\Event::stopPropagation() -

***

### stopPropagation

Stops the propagation of the event to further event listeners.

```php
public stopPropagation(): mixed
```

If multiple event listeners are connected to the same event, no further event listener will be triggered once any
trigger calls stopPropagation().









***

### setDispatcher

Stores the EventDispatcher that dispatches this Event.

```php
public setDispatcher(\Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dispatcher` | **\Symfony\Component\EventDispatcher\EventDispatcherInterface** |  |

***

### getDispatcher

Returns the EventDispatcher that dispatches this Event.

```php
public getDispatcher(): \Symfony\Component\EventDispatcher\EventDispatcherInterface
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getName

Gets the event's name.

```php
public getName(): string
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setName

Sets the event's name property.

```php
public setName(string $name): mixed
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

yxorP::get('REQUEST')
