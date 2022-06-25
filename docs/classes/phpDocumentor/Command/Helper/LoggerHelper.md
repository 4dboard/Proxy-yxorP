***

# LoggerHelper

Helper is the base class for all helper classes.

* Full name: `\phpDocumentor\Command\Helper\LoggerHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](../../../Symfony/Component/Console/Helper/Helper.md)

## Methods

### addOptions

Initializes the given command to accept logging options.

```php
public addOptions(\phpDocumentor\Command\Command $command): void
```

This method is intended to be executed once in the Constructor of the given Command as it adds a new option `log`.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\phpDocumentor\Command\Command** |  |

***

### getName

Returns the canonical name of this helper.

```php
public getName(): string
```

**Return Value:**

The canonical name



***

### connectOutputToLogging

Connect the logging events to the output object of Symfony Console.

```php
public connectOutputToLogging(\Symfony\Component\Console\Output\OutputInterface $output, \phpDocumentor\Command\Command $command): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$command` | **\phpDocumentor\Command\Command** |  |

***

### logEvent

Logs an event with the output.

```php
public logEvent(\Symfony\Component\Console\Output\OutputInterface $output, \phpDocumentor\Event\LogEvent $event, \phpDocumentor\Command\Command $command): void
```

This method will also colorize the message based on priority and withhold certain logging in case of verbosity or not.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$event` | **\phpDocumentor\Event\LogEvent** |  |
| `$command` | **\phpDocumentor\Command\Command** |  |

***

### reconfigureLogger

```php
public reconfigureLogger(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output, mixed $command): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$command` | **mixed** |  |

***

## Inherited methods

### setHelperSet

Sets the helper set associated with this helper.

```php
public setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helperSet` | **\Symfony\Component\Console\Helper\HelperSet** |  |

***

### getHelperSet

Gets the helper set associated with this helper.

```php
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet
```

**Return Value:**

A HelperSet instance



***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(string $string): int
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to check its length |

**Return Value:**

The length of the string



***

### formatTime

```php
public static formatTime(mixed $secs): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secs` | **mixed** |  |

***

### formatMemory

```php
public static formatMemory(mixed $memory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **mixed** |  |

***

### strlenWithoutDecoration

```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

***

### removeDecoration

```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, mixed $string): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **mixed** |  |

yxorP::get('REQUEST')
