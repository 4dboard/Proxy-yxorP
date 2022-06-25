***

# ApplicationTester

Eases the testing of console applications.

When testing an application, don't forget to disable the auto exit flag:

$application = new Application();
$application->setAutoExit(false);

* Full name: `\Symfony\Component\Console\Tester\ApplicationTester`



## Properties


### application



```php
private $application
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

### statusCode



```php
private $statusCode
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Application $application): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$application` | **\Symfony\Component\Console\Application** |  |




***

### run

Executes the application.

```php
public run(array $input, array $options = array()): int
```

Available options:

* interactive: Sets the input interactive flag
* decorated:   Sets the output decorated flag
* verbosity:   Sets the output verbosity flag






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **array** | An array of arguments and options |
| `$options` | **array** | An array of options |


**Return Value:**

The command exit code



***

### getDisplay

Gets the display returned by the last execution of the application.

```php
public getDisplay(bool $normalize = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$normalize` | **bool** | Whether to normalize end of lines to \n or not |


**Return Value:**

The display



***

### getInput

Gets the input instance used by the last execution of the application.

```php
public getInput(): \Symfony\Component\Console\Input\InputInterface
```









**Return Value:**

The current input instance



***

### getOutput

Gets the output instance used by the last execution of the application.

```php
public getOutput(): \Symfony\Component\Console\Output\OutputInterface
```









**Return Value:**

The current output instance



***

### getStatusCode

Gets the status code returned by the last execution of the application.

```php
public getStatusCode(): int
```









**Return Value:**

The status code



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
