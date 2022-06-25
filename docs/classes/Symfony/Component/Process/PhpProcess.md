***

# PhpProcess

PhpProcess runs a PHP script in an independent process.

$p = new PhpProcess('<?php echo "foo"; ?>');
$p->run();
print $p->getOutput()."\n";

* Full name: `\Symfony\Component\Process\PhpProcess`
* Parent class: [`\Symfony\Component\Process\Process`](./Process.md)




## Methods


### __construct



```php
public __construct(string $script, string|null $cwd = null, array|null $env = null, int $timeout = 60, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$script` | **string** | The PHP script to run (as a string) |
| `$cwd` | **string&#124;null** | The working directory or null to use the working dir of the current PHP process |
| `$env` | **array&#124;null** | The environment variables or null to use the same environment as the current PHP process |
| `$timeout` | **int** | The timeout in seconds |
| `$options` | **array** | An array of options for proc_open |




***

### setPhpBinary

Sets the path to the PHP binary to use.

```php
public setPhpBinary(mixed $php): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$php` | **mixed** |  |




***

### start

Starts the process and returns after writing the input to STDIN.

```php
public start(mixed $callback = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |




***


## Inherited methods


### __construct



```php
public __construct(string $commandline, string|null $cwd = null, array|null $env = null, string|null $input = null, int|float|null $timeout = 60, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandline` | **string** | The command line to run |
| `$cwd` | **string&#124;null** | The working directory or null to use the working dir of the current PHP process |
| `$env` | **array&#124;null** | The environment variables or null to use the same environment as the current PHP process |
| `$input` | **string&#124;null** | The input |
| `$timeout` | **int&#124;float&#124;null** | The timeout in seconds or null to disable |
| `$options` | **array** | An array of options for proc_open |




***

### __destruct



```php
public __destruct(): mixed
```











***

### __clone



```php
public __clone(): mixed
```











***

### run

Runs the process.

```php
public run(callable|null $callback = null): int
```

The callback receives the type of output (out or err) and
some bytes from the output in real-time. It allows to have feedback
from the independent process during execution.

The STDOUT and STDERR are also available after the process is finished
via the getOutput() and getErrorOutput() methods.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |


**Return Value:**

The exit status code



***

### mustRun

Runs the process.

```php
public mustRun(callable|null $callback = null): self
```

This is identical to run() except that an exception is thrown if the process
exits with a non-zero exit code.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** |  |




***

### start

Starts the process and returns after writing the input to STDIN.

```php
public start(callable|null $callback = null): mixed
```

This method blocks until all STDIN data is sent to the process then it
returns while the process runs in the background.

The termination of the process can be awaited with wait().

The callback receives the type of output (out or err) and some bytes from
the output in real-time while writing the standard input to the process.
It allows to have feedback from the independent process during execution.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |




***

### restart

Restarts the process.

```php
public restart(callable|null $callback = null): $this
```

Be warned that the process is cloned before being started.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |



**See Also:**

* \Symfony\Component\Process\start() - 

***

### wait

Waits for the process to terminate.

```php
public wait(callable|null $callback = null): int
```

The callback receives the type of output (out or err) and some bytes
from the output in real-time while writing the standard input to the process.
It allows to have feedback from the independent process during execution.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** | A valid PHP callback |


**Return Value:**

The exitcode of the process



***

### getPid

Returns the Pid (process identifier), if applicable.

```php
public getPid(): int|null
```









**Return Value:**

The process id if running, null otherwise



***

### signal

Sends a POSIX signal to the process.

```php
public signal(int $signal): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **int** | A valid POSIX signal (see http://www.php.net/manual/en/pcntl.constants.php) |




***

### disableOutput

Disables fetching output and error output from the underlying process.

```php
public disableOutput(): $this
```











***

### enableOutput

Enables fetching output and error output from the underlying process.

```php
public enableOutput(): $this
```











***

### isOutputDisabled

Returns true in case the output is disabled, false otherwise.

```php
public isOutputDisabled(): bool
```











***

### getOutput

Returns the current output of the process (STDOUT).

```php
public getOutput(): string
```









**Return Value:**

The process output



***

### getIncrementalOutput

Returns the output incrementally.

```php
public getIncrementalOutput(): string
```

In comparison with the getOutput method which always return the whole
output, this one returns the new output since the last call.







**Return Value:**

The process output since the last call



***

### clearOutput

Clears the process output.

```php
public clearOutput(): $this
```











***

### getErrorOutput

Returns the current error output of the process (STDERR).

```php
public getErrorOutput(): string
```









**Return Value:**

The process error output



***

### getIncrementalErrorOutput

Returns the errorOutput incrementally.

```php
public getIncrementalErrorOutput(): string
```

In comparison with the getErrorOutput method which always return the
whole error output, this one returns the new error output since the last
call.







**Return Value:**

The process error output since the last call



***

### clearErrorOutput

Clears the process output.

```php
public clearErrorOutput(): $this
```











***

### getExitCode

Returns the exit code returned by the process.

```php
public getExitCode(): int|null
```









**Return Value:**

The exit status code, null if the Process is not terminated



***

### getExitCodeText

Returns a string representation for the exit code returned by the process.

```php
public getExitCodeText(): string|null
```

This method relies on the Unix exit code status standardization
and might not be relevant for other operating systems.







**Return Value:**

A string representation for the exit status code, null if the Process is not terminated


**See Also:**

* http://tldp.org/LDP/abs/html/exitcodes.html - * http://en.wikipedia.org/wiki/Unix_signal - 

***

### isSuccessful

Checks if the process ended successfully.

```php
public isSuccessful(): bool
```









**Return Value:**

true if the process ended successfully, false otherwise



***

### hasBeenSignaled

Returns true if the child process has been terminated by an uncaught signal.

```php
public hasBeenSignaled(): bool
```

It always returns false on Windows.









***

### getTermSignal

Returns the number of the signal that caused the child process to terminate its execution.

```php
public getTermSignal(): int
```

It is only meaningful if hasBeenSignaled() returns true.









***

### hasBeenStopped

Returns true if the child process has been stopped by a signal.

```php
public hasBeenStopped(): bool
```

It always returns false on Windows.









***

### getStopSignal

Returns the number of the signal that caused the child process to stop its execution.

```php
public getStopSignal(): int
```

It is only meaningful if hasBeenStopped() returns true.









***

### isRunning

Checks if the process is currently running.

```php
public isRunning(): bool
```









**Return Value:**

true if the process is currently running, false otherwise



***

### isStarted

Checks if the process has been started with no regard to the current state.

```php
public isStarted(): bool
```









**Return Value:**

true if status is ready, false otherwise



***

### isTerminated

Checks if the process is terminated.

```php
public isTerminated(): bool
```









**Return Value:**

true if process is terminated, false otherwise



***

### getStatus

Gets the process status.

```php
public getStatus(): string
```

The status is one of: ready, started, terminated.







**Return Value:**

The current process status



***

### stop

Stops the process.

```php
public stop(int|float $timeout = 10, int $signal = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int&#124;float** | The timeout in seconds |
| `$signal` | **int** | A POSIX signal to send in case the process has not stop at timeout, default is SIGKILL (9) |


**Return Value:**

The exit-code of the process



***

### getCommandLine

Gets the command line to be executed.

```php
public getCommandLine(): string
```









**Return Value:**

The command to execute



***

### setCommandLine

Sets the command line to be executed.

```php
public setCommandLine(string $commandline): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commandline` | **string** | The command to execute |


**Return Value:**

The current Process instance



***

### getTimeout

Gets the process timeout (max. runtime).

```php
public getTimeout(): float|null
```









**Return Value:**

The timeout in seconds or null if it's disabled



***

### getIdleTimeout

Gets the process idle timeout (max. time since last output).

```php
public getIdleTimeout(): float|null
```









**Return Value:**

The timeout in seconds or null if it's disabled



***

### setTimeout

Sets the process timeout (max. runtime).

```php
public setTimeout(int|float|null $timeout): self
```

To disable the timeout, set this value to null.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int&#124;float&#124;null** | The timeout in seconds |


**Return Value:**

The current Process instance



***

### setIdleTimeout

Sets the process idle timeout (max. time since last output).

```php
public setIdleTimeout(int|float|null $timeout): self
```

To disable the timeout, set this value to null.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int&#124;float&#124;null** | The timeout in seconds |


**Return Value:**

The current Process instance



***

### setTty

Enables or disables the TTY mode.

```php
public setTty(bool $tty): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tty` | **bool** | True to enabled and false to disable |


**Return Value:**

The current Process instance



***

### isTty

Checks if the TTY mode is enabled.

```php
public isTty(): bool
```









**Return Value:**

true if the TTY mode is enabled, false otherwise



***

### setPty

Sets PTY mode.

```php
public setPty(bool $bool): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **bool** |  |




***

### isPty

Returns PTY state.

```php
public isPty(): bool
```











***

### getWorkingDirectory

Gets the working directory.

```php
public getWorkingDirectory(): string|null
```









**Return Value:**

The current working directory or null on failure



***

### setWorkingDirectory

Sets the current working directory.

```php
public setWorkingDirectory(string $cwd): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cwd` | **string** | The new working directory |


**Return Value:**

The current Process instance



***

### getEnv

Gets the environment variables.

```php
public getEnv(): array
```









**Return Value:**

The current environment variables



***

### setEnv

Sets the environment variables.

```php
public setEnv(array $env): self
```

Each environment variable value should be a string.
If it is an array, the variable is ignored.

That happens in PHP when 'argv' is registered into
the $_ENV array for instance.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **array** | The new environment variables |


**Return Value:**

The current Process instance



***

### getStdin

Gets the contents of STDIN.

```php
public getStdin(): string|null
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




**Return Value:**

The current contents



***

### getInput

Gets the Process input.

```php
public getInput(): string|null
```









**Return Value:**

The Process input



***

### setStdin

Sets the contents of STDIN.

```php
public setStdin(string|null $stdin): self
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stdin` | **string&#124;null** | The new contents |


**Return Value:**

The current Process instance



***

### setInput

Sets the input.

```php
public setInput(mixed $input): self
```

This content will be passed to the underlying process standard input.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** | The content |


**Return Value:**

The current Process instance



***

### getOptions

Gets the options for proc_open.

```php
public getOptions(): array
```









**Return Value:**

The current options



***

### setOptions

Sets the options for proc_open.

```php
public setOptions(array $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | The new options |


**Return Value:**

The current Process instance



***

### getEnhanceWindowsCompatibility

Gets whether or not Windows compatibility is enabled.

```php
public getEnhanceWindowsCompatibility(): bool
```

This is true by default.









***

### setEnhanceWindowsCompatibility

Sets whether or not Windows compatibility is enabled.

```php
public setEnhanceWindowsCompatibility(bool $enhance): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enhance` | **bool** |  |


**Return Value:**

The current Process instance



***

### getEnhanceSigchildCompatibility

Returns whether sigchild compatibility mode is activated or not.

```php
public getEnhanceSigchildCompatibility(): bool
```











***

### setEnhanceSigchildCompatibility

Activates sigchild compatibility mode.

```php
public setEnhanceSigchildCompatibility(bool $enhance): self
```

Sigchild compatibility mode is required to get the exit code and
determine the success of a process when PHP has been compiled with
the --enable-sigchild option






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enhance` | **bool** |  |


**Return Value:**

The current Process instance



***

### checkTimeout

Performs a check between the timeout definition and the time the process started.

```php
public checkTimeout(): mixed
```

In case you run a background process (with the start method), you should
trigger this method regularly to ensure the process timeout









***

### isPtySupported

Returns whether PTY is supported on the current operating system.

```php
public static isPtySupported(): bool
```



* This method is **static**.







***

### getDescriptors

Creates the descriptors needed by the proc_open.

```php
private getDescriptors(): array
```











***

### buildCallback

Builds up the callback used by wait().

```php
protected buildCallback(callable|null $callback): \Closure
```

The callbacks adds all occurred output to the specific buffer and calls
the user callback (if present) with the received output.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable&#124;null** | The user defined PHP callback |


**Return Value:**

A PHP closure



***

### updateStatus

Updates the status of the process, reads pipes.

```php
protected updateStatus(bool $blocking): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$blocking` | **bool** | Whether to use a blocking read call |




***

### isSigchildEnabled

Returns whether PHP has been compiled with the '--enable-sigchild' option or not.

```php
protected isSigchildEnabled(): bool
```











***

### readPipesForOutput

Reads pipes for the freshest output.

```php
private readPipesForOutput(string $caller): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$caller` | **string** | The name of the method that needs fresh outputs |




***

### validateTimeout

Validates and returns the filtered timeout.

```php
private validateTimeout(int|float|null $timeout): float|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **int&#124;float&#124;null** |  |




***

### readPipes

Reads pipes, executes callback.

```php
private readPipes(bool $blocking, bool $close): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$blocking` | **bool** | Whether to use blocking calls or not |
| `$close` | **bool** | Whether to close file handles or not |




***

### close

Closes process resource, closes file handles, sets the exitcode.

```php
private close(): int
```









**Return Value:**

The exitcode



***

### resetProcessData

Resets data related to the latest run of the process.

```php
private resetProcessData(): mixed
```











***

### doSignal

Sends a POSIX signal to the process.

```php
private doSignal(int $signal, bool $throwException): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signal` | **int** | A valid POSIX signal (see http://www.php.net/manual/en/pcntl.constants.php) |
| `$throwException` | **bool** | Whether to throw exception in case signal failed |


**Return Value:**

True if the signal was sent successfully, false otherwise



***

### requireProcessIsStarted

Ensures the process is running or terminated, throws a LogicException if the process has a not started.

```php
private requireProcessIsStarted(string $functionName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionName` | **string** | The function name that was called |




***

### requireProcessIsTerminated

Ensures the process is terminated, throws a LogicException if the process has a status different than `terminated`.

```php
private requireProcessIsTerminated(string $functionName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionName` | **string** | The function name that was called |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
