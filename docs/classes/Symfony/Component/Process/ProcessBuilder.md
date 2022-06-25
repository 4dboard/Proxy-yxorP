***

# ProcessBuilder





* Full name: `\Symfony\Component\Process\ProcessBuilder`



## Properties


### arguments



```php
private $arguments
```






***

### cwd



```php
private $cwd
```






***

### env



```php
private $env
```






***

### input



```php
private $input
```






***

### timeout



```php
private $timeout
```






***

### options



```php
private $options
```






***

### inheritEnv



```php
private $inheritEnv
```






***

### prefix



```php
private $prefix
```






***

### outputDisabled



```php
private $outputDisabled
```






***

## Methods


### __construct



```php
public __construct(string[] $arguments = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **string[]** | An array of arguments |




***

### create

Creates a process builder instance.

```php
public static create(string[] $arguments = array()): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **string[]** | An array of arguments |




***

### add

Adds an unescaped argument to the command string.

```php
public add(string $argument): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$argument` | **string** | A command argument |




***

### setPrefix

Adds a prefix to the command string.

```php
public setPrefix(string|array $prefix): $this
```

The prefix is preserved when resetting arguments.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;array** | A command prefix or an array of command prefixes |




***

### setArguments

Sets the arguments of the process.

```php
public setArguments(string[] $arguments): $this
```

Arguments must not be escaped.
Previous arguments are removed.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **string[]** |  |




***

### setWorkingDirectory

Sets the working directory.

```php
public setWorkingDirectory(string|null $cwd): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cwd` | **string&#124;null** | The working directory |




***

### inheritEnvironmentVariables

Sets whether environment variables will be inherited or not.

```php
public inheritEnvironmentVariables(bool $inheritEnv = true): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inheritEnv` | **bool** |  |




***

### setEnv

Sets an environment variable.

```php
public setEnv(string $name, string|null $value): $this
```

Setting a variable overrides its previous value. Use `null` to unset a
defined environment variable.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The variable name |
| `$value` | **string&#124;null** | The variable value |




***

### addEnvironmentVariables

Adds a set of environment variables.

```php
public addEnvironmentVariables(array $variables): $this
```

Already existing environment variables with the same name will be
overridden by the new values passed to this method. Pass `null` to unset
a variable.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$variables` | **array** | The variables |




***

### setInput

Sets the input of the process.

```php
public setInput(mixed $input): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** | The input as a string |




***

### setTimeout

Sets the process timeout.

```php
public setTimeout(float|null $timeout): $this
```

To disable the timeout, set this value to null.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeout` | **float&#124;null** |  |




***

### setOption

Adds a proc_open option.

```php
public setOption(string $name, string $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The option name |
| `$value` | **string** | The option value |




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

### getProcess

Creates a Process instance and returns it.

```php
public getProcess(): \Symfony\Component\Process\Process
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
