***

# ProcessHelper

The ProcessHelper class provides helpers to run external processes.

* Full name: `\Symfony\Component\Console\Helper\ProcessHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)

## Methods

### run

Runs an external process.

```php
public run(\Symfony\Component\Console\Output\OutputInterface $output, string|array|\Symfony\Component\Process\Process $cmd, string|null $error = null, callable|null $callback = null, int $verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE): \Symfony\Component\Process\Process
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An OutputInterface instance |
| `$cmd` | **
string&#124;array&#124;\Symfony\Component\Process\Process** | An instance of Process or an array of arguments to escape and run or a command to run |
| `$error` | **string&#124;null** | An error message that must be displayed if something went wrong |
| `$callback` | **
callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |
| `$verbosity` | **int** | The threshold for verbosity |

**Return Value:**

The process that ran



***

### mustRun

Runs the process.

```php
public mustRun(\Symfony\Component\Console\Output\OutputInterface $output, string|\Symfony\Component\Process\Process $cmd, string|null $error = null, callable|null $callback = null): \Symfony\Component\Process\Process
```

This is identical to run() except that an exception is thrown if the process exits with a non-zero exit code.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An OutputInterface instance |
| `$cmd` | **string&#124;\Symfony\Component\Process\Process** | An instance of Process or a command to run |
| `$error` | **string&#124;null** | An error message that must be displayed if something went wrong |
| `$callback` | **
callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |

**Return Value:**

The process that ran

**See Also:**

* \Symfony\Component\Console\Helper\run() -

***

### wrapCallback

Wraps a Process callback to add debugging output.

```php
public wrapCallback(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Process\Process $process, callable|null $callback = null): callable
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An OutputInterface interface |
| `$process` | **\Symfony\Component\Process\Process** | The Process |
| `$callback` | **callable&#124;null** | A PHP callable |

***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

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
