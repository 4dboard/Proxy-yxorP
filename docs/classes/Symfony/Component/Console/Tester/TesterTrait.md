***

# TesterTrait

* Full name: `\Symfony\Component\Console\Tester\TesterTrait`

## Properties

### output

```php
private \Symfony\Component\Console\Output\StreamOutput $output
```

***

### inputs

```php
private $inputs
```

***

### captureStreamsIndependently

```php
private $captureStreamsIndependently
```

***

### input

```php
private \Symfony\Component\Console\Input\InputInterface $input
```

***

### statusCode

```php
private int $statusCode
```

***

## Methods

### getDisplay

Gets the display returned by the last execution of the command or application.

```php
public getDisplay(bool $normalize = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalize` | **bool** |  |

***

### getErrorOutput

Gets the output written to STDERR by the application.

```php
public getErrorOutput(bool $normalize = false): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalize` | **bool** | Whether to normalize end of lines to \n or not |

***

### getInput

Gets the input instance used by the last execution of the command or application.

```php
public getInput(): \Symfony\Component\Console\Input\InputInterface
```

***

### getOutput

Gets the output instance used by the last execution of the command or application.

```php
public getOutput(): \Symfony\Component\Console\Output\OutputInterface
```

***

### getStatusCode

Gets the status code returned by the last execution of the command or application.

```php
public getStatusCode(): int
```

***

### assertCommandIsSuccessful

```php
public assertCommandIsSuccessful(string $message = &#039;&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

***

### setInputs

Sets the user inputs.

```php
public setInputs(array $inputs): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputs` | **array** | An array of strings representing each input<br />passed to the command input stream |

***

### initOutput

Initializes the output property.

```php
private initOutput(array $options): mixed
```

Available options:

* decorated:                 Sets the output decorated flag
* verbosity:                 Sets the output verbosity flag
* capture_stderr_separately: Make output of stdOut and stdErr separately available

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### createStream

```php
private static createStream(array $inputs): resource
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputs` | **array** |  |

***

***


