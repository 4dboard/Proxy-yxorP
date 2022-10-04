***

# SymfonyStyle

Output decorator helpers for the Symfony Style Guide.



* Full name: `\Symfony\Component\Console\Style\SymfonyStyle`
* Parent class: [`\Symfony\Component\Console\Style\OutputStyle`](./OutputStyle.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`MAX_LINE_LENGTH`|public| |120|

## Properties


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

### questionHelper



```php
private $questionHelper
```






***

### progressBar



```php
private $progressBar
```






***

### lineLength



```php
private $lineLength
```






***

### bufferedOutput



```php
private $bufferedOutput
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




***

### block

Formats a message as a block of text.

```php
public block(string|array $messages, string $type = null, string $style = null, string $prefix = &#039; &#039;, bool $padding = false, bool $escape = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **string&#124;array** | The message to write in the block |
| `$type` | **string** |  |
| `$style` | **string** |  |
| `$prefix` | **string** |  |
| `$padding` | **bool** |  |
| `$escape` | **bool** |  |




***

### title

{@inheritdoc}

```php
public title(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### section

{@inheritdoc}

```php
public section(string $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |




***

### listing

{@inheritdoc}

```php
public listing(array $elements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |




***

### text

{@inheritdoc}

```php
public text(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### comment

Formats a command comment.

```php
public comment(string|array $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;array** |  |




***

### success

{@inheritdoc}

```php
public success(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### error

{@inheritdoc}

```php
public error(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### warning

{@inheritdoc}

```php
public warning(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### note

{@inheritdoc}

```php
public note(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### info

Formats an info message.

```php
public info(string|array $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;array** |  |




***

### caution

{@inheritdoc}

```php
public caution(mixed $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |




***

### table

{@inheritdoc}

```php
public table(array $headers, array $rows): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |
| `$rows` | **array** |  |




***

### horizontalTable

Formats a horizontal table.

```php
public horizontalTable(array $headers, array $rows): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |
| `$rows` | **array** |  |




***

### definitionList

Formats a list of key/value horizontally.

```php
public definitionList(string|array|\Symfony\Component\Console\Helper\TableSeparator $list): mixed
```

Each row can be one of:
* 'A title'
* ['key' => 'value']
* new TableSeparator()






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$list` | **string&#124;array&#124;\Symfony\Component\Console\Helper\TableSeparator** |  |




***

### ask

{@inheritdoc}

```php
public ask(string $question, string $default = null, callable $validator = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** |  |
| `$default` | **string** |  |
| `$validator` | **callable** |  |




***

### askHidden

{@inheritdoc}

```php
public askHidden(string $question, callable $validator = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** |  |
| `$validator` | **callable** |  |




***

### confirm

{@inheritdoc}

```php
public confirm(string $question, bool $default = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** |  |
| `$default` | **bool** |  |




***

### choice

{@inheritdoc}

```php
public choice(string $question, array $choices, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **string** |  |
| `$choices` | **array** |  |
| `$default` | **mixed** |  |




***

### progressStart

{@inheritdoc}

```php
public progressStart(int $max): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** |  |




***

### progressAdvance

{@inheritdoc}

```php
public progressAdvance(int $step = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** |  |




***

### progressFinish

{@inheritdoc}

```php
public progressFinish(): mixed
```











***

### createProgressBar



```php
public createProgressBar(int $max): \Symfony\Component\Console\Helper\ProgressBar
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** |  |




***

### progressIterate



```php
public progressIterate(iterable $iterable, int $max = null): iterable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$iterable` | **iterable** |  |
| `$max` | **int** |  |



**See Also:**

* \Symfony\Component\Console\Helper\ProgressBar::iterate() - 

***

### askQuestion



```php
public askQuestion(\Symfony\Component\Console\Question\Question $question): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$question` | **\Symfony\Component\Console\Question\Question** |  |




***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$type` | **int** |  |




***

### write

Writes a message to the output.

```php
public write(mixed $messages, bool $newline = false, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$newline` | **bool** | Whether to add a newline |
| `$type` | **int** |  |




***

### newLine

Add newline(s).

```php
public newLine(int $count = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |




***

### getErrorStyle

Returns a new instance which makes use of stderr if available.

```php
public getErrorStyle(): self
```











***

### createTable



```php
public createTable(): \Symfony\Component\Console\Helper\Table
```











***

### getProgressBar



```php
private getProgressBar(): \Symfony\Component\Console\Helper\ProgressBar
```











***

### autoPrependBlock



```php
private autoPrependBlock(): void
```











***

### autoPrependText



```php
private autoPrependText(): void
```











***

### writeBuffer



```php
private writeBuffer(string $message, bool $newLine, int $type): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$newLine` | **bool** |  |
| `$type` | **int** |  |




***

### createBlock



```php
private createBlock(iterable $messages, string $type = null, string $style = null, string $prefix = &#039; &#039;, bool $padding = false, bool $escape = false): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **iterable** |  |
| `$type` | **string** |  |
| `$style` | **string** |  |
| `$prefix` | **string** |  |
| `$padding` | **bool** |  |
| `$escape` | **bool** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |




***

### newLine

Add newline(s).

```php
public newLine(int $count = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$count` | **int** |  |




***

### createProgressBar



```php
public createProgressBar(int $max): \Symfony\Component\Console\Helper\ProgressBar
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$max` | **int** |  |




***

### write

Writes a message to the output.

```php
public write(mixed $messages, bool $newline = false, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$newline` | **bool** | Whether to add a newline |
| `$type` | **int** |  |




***

### writeln

Writes a message to the output and adds a newline at the end.

```php
public writeln(mixed $messages, int $type = self::OUTPUT_NORMAL): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **mixed** | The message as an iterable of strings or a single string |
| `$type` | **int** |  |




***

### setVerbosity

Sets the verbosity of the output.

```php
public setVerbosity(int $level): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |




***

### getVerbosity

Gets the current verbosity of the output.

```php
public getVerbosity(): int
```











***

### setDecorated

Sets the decorated flag.

```php
public setDecorated(bool $decorated): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decorated` | **bool** |  |




***

### isDecorated

Gets the decorated flag.

```php
public isDecorated(): bool
```











***

### setFormatter



```php
public setFormatter(\Symfony\Component\Console\Formatter\OutputFormatterInterface $formatter): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Symfony\Component\Console\Formatter\OutputFormatterInterface** |  |




***

### getFormatter

Returns current output formatter instance.

```php
public getFormatter(): \Symfony\Component\Console\Formatter\OutputFormatterInterface
```











***

### isQuiet

Returns whether verbosity is quiet (-q).

```php
public isQuiet(): bool
```











***

### isVerbose

Returns whether verbosity is verbose (-v).

```php
public isVerbose(): bool
```











***

### isVeryVerbose

Returns whether verbosity is very verbose (-vv).

```php
public isVeryVerbose(): bool
```











***

### isDebug

Returns whether verbosity is debug (-vvv).

```php
public isDebug(): bool
```











***

### getErrorOutput



```php
protected getErrorOutput(): mixed
```











***


***

