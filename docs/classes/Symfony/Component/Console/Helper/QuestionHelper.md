***

# QuestionHelper

The QuestionHelper class provides helpers to interact with the user.



* Full name: `\Symfony\Component\Console\Helper\QuestionHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)



## Properties


### inputStream



```php
private resource|null $inputStream
```






***

### stty



```php
private static $stty
```



* This property is **static**.


***

### stdinIsInteractive



```php
private static $stdinIsInteractive
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

### getName

{@inheritdoc}

```php
public getName(): mixed
```











***

### disableStty

Prevents usage of stty.

```php
public static disableStty(): mixed
```



* This method is **static**.







***

### doAsk

Asks the question to the user.

```php
private doAsk(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |




***

### getDefaultAnswer



```php
private getDefaultAnswer(\Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
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

### formatChoiceQuestionChoices



```php
protected formatChoiceQuestionChoices(\Symfony\Component\Console\Question\ChoiceQuestion $question, string $tag): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **\Symfony\Component\Console\Question\ChoiceQuestion** |  |
| `$tag` | **string** |  |




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
private autocomplete(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Console\Question\Question $question, resource $inputStream, callable $autocomplete): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |
| `$inputStream` | **resource** |  |
| `$autocomplete` | **callable** |  |




***

### mostRecentlyEnteredValue



```php
private mostRecentlyEnteredValue(string $entered): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entered` | **string** |  |




***

### getHiddenResponse

Gets a hidden response from user.

```php
private getHiddenResponse(\Symfony\Component\Console\Output\OutputInterface $output, resource $inputStream, bool $trimmable = true): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$inputStream` | **resource** | The handler resource |
| `$trimmable` | **bool** | Is the answer trimmable |




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
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$question` | **\Symfony\Component\Console\Question\Question** |  |


**Return Value:**

The validated response



***

### isInteractiveInput



```php
private isInteractiveInput(mixed $inputStream): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputStream` | **mixed** |  |




***

### readInput

Reads one or more lines of input and returns what is read.

```php
private readInput(resource $inputStream, \Symfony\Component\Console\Question\Question $question): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputStream` | **resource** | The handler resource |
| `$question` | **\Symfony\Component\Console\Question\Question** | The question being asked |


**Return Value:**

The input received, false in case input could not be read



***

### setIOCodepage

Sets console I/O to the host code page.

```php
private setIOCodepage(): int
```









**Return Value:**

Previous code page in IBM/EBCDIC format



***

### resetIOCodepage

Sets console I/O to the specified code page and converts the user input.

```php
private resetIOCodepage(int $cp, string|false $input): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cp` | **int** |  |
| `$input` | **string&#124;false** |  |




***

### cloneInputStream

Clones an input stream in order to act on one instance of the same
stream without affecting the other instance.

```php
private cloneInputStream(resource $inputStream): resource|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputStream` | **resource** | The handler resource |


**Return Value:**

The cloned resource, null in case it could not be cloned



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
public getHelperSet(): \Symfony\Component\Console\Helper\HelperSet|null
```











***

### strlen

Returns the length of a string, using mb_strwidth if it is available.

```php
public static strlen(?string $string): int
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### width

Returns the width of a string, using mb_strwidth if it is available.

```php
public static width(?string $string): int
```

The width is how many characters positions the string will use.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### length

Returns the length of a string, using mb_strlen if it is available.

```php
public static length(?string $string): int
```

The length is related to how many bytes the string will use.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |




***

### substr

Returns the subset of a string, using mb_substr if it is available.

```php
public static substr(?string $string, int $from, int $length = null): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **?string** |  |
| `$from` | **int** |  |
| `$length` | **int** |  |




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
public static formatMemory(int $memory): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$memory` | **int** |  |




***

### strlenWithoutDecoration



```php
public static strlenWithoutDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |




***

### removeDecoration



```php
public static removeDecoration(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter, ?string $string): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |
| `$string` | **?string** |  |




***


***

