***

# QuestionHelper

The QuestionHelper class provides helpers to interact with the user.



* Full name: `\Symfony\Component\Console\Helper\QuestionHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)



## Properties


### inputStream



```php
private $inputStream
```






***

### shell



```php
private static $shell
```



* This property is **static**.


***

### stty



```php
private static $stty
```



* This property is **static**.


***

## Methods


### ask

Asks a question to the user.

```php
public ask(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |


**Return Value:**

The user answer



***

### setInputStream

Sets the input stream to read from when interacting with the user.

```php
public setInputStream(resource $stream): mixed
```

This is mainly useful for testing purpose.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stream` | **resource** | The input stream |




***

### getInputStream

Returns the helper's input stream.

```php
public getInputStream(): resource
```











***

### getName

{@inheritdoc}

```php
public getName(): mixed
```











***

### doAsk

Asks the question to the user.

```php
public doAsk(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question): bool|mixed|string|null
```

This method is public for PHP 5.3 compatibility, it should be private.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |




***

### writePrompt

Outputs the question prompt.

```php
protected writePrompt(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |




***

### writeError

Outputs an error message.

```php
protected writeError(\Symfony\Component\Console\Output\OutputInterface $output, \Exception $error): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$error` | **\Exception** |  |




***

### autocomplete

Autocompletes a question.

```php
private autocomplete(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question, resource $inputStream, array $autocomplete): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |
| `$inputStream` | **resource** |  |
| `$autocomplete` | **array** |  |




***

### getHiddenResponse

Gets a hidden response from user.

```php
private getHiddenResponse(\Symfony\Component\Console\Output\OutputInterface $output, resource $inputStream): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$inputStream` | **resource** | The handler resource |


**Return Value:**

The answer



***

### validateAttempts

Validates an attempt.

```php
private validateAttempts(callable $interviewer, \Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interviewer` | **callable** | A callable that will ask for a question and return the result |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **\Symfony\Component\Console\Question\Question** | A Question instance |


**Return Value:**

The validated response



***

### getShell

Returns a valid unix shell.

```php
private getShell(): string|bool
```









**Return Value:**

The valid shell name, false in case no valid shell is found



***

### hasSttyAvailable

Returns whether Stty is available or not.

```php
private hasSttyAvailable(): bool
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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
