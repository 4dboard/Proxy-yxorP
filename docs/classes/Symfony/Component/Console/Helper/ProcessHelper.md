***

# ProcessHelper

The ProcessHelper class provides helpers to run external processes.



* Full name: `\Symfony\Component\Console\Helper\ProcessHelper`
* Parent class: [`\Symfony\Component\Console\Helper\Helper`](./Helper.md)




## Methods


### run

Runs an external process.

```php
public run(\Symfony\Component\Console\Output\OutputInterface $output, array|\Symfony\Component\Process\Process $cmd, string $error = null, callable|null $callback = null, int $verbosity = OutputInterface::VERBOSITY_VERY_VERBOSE): \Symfony\Component\Process\Process
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$cmd` | **array&#124;\Symfony\Component\Process\Process** | An instance of Process or an array of the command and arguments |
| `$error` | **string** |  |
| `$callback` | **callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |
| `$verbosity` | **int** |  |




***

### mustRun

Runs the process.

```php
public mustRun(\Symfony\Component\Console\Output\OutputInterface $output, array|\Symfony\Component\Process\Process $cmd, string $error = null, callable|null $callback = null): \Symfony\Component\Process\Process
```

This is identical to run() except that an exception is thrown if the process
exits with a non-zero exit code.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$cmd` | **array&#124;\Symfony\Component\Process\Process** | An instance of Process or a command to run |
| `$error` | **string** |  |
| `$callback` | **callable&#124;null** | A PHP callback to run whenever there is some<br />output available on STDOUT or STDERR |



**See Also:**

* \Symfony\Component\Console\Helper\run() - 

***

### wrapCallback

Wraps a Process callback to add debugging output.

```php
public wrapCallback(\Symfony\Component\Console\Output\OutputInterface $output, \Symfony\Component\Process\Process $process, callable $callback = null): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$process` | **\Symfony\Component\Process\Process** |  |
| `$callback` | **callable** |  |




***

### escapeString



```php
private escapeString(string $str): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |




***

### getName

{@inheritdoc}

```php
public getName(): string
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

