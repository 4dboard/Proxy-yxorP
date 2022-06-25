***

# DialogHelper

The Dialog class provides helpers to interact with the user.

* Full name: `\Symfony\Component\Console\Helper\DialogHelper`
* Parent class: [`\Symfony\Component\Console\Helper\InputAwareHelper`](./InputAwareHelper.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

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

### __construct

```php
public __construct(mixed $triggerDeprecationError = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$triggerDeprecationError` | **mixed** |  |

***

### select

Asks the user to select a value.

```php
public select(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, array $choices, bool|string $default = null, bool|int $attempts = false, string $errorMessage = &#039;Value &quot;%s&quot; is invalid&#039;, bool $multiselect = false): int|string|array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question to ask |
| `$choices` | **array** | List of choices to pick from |
| `$default` | **bool&#124;string** | The default answer if the user enters nothing |
| `$attempts` | **
bool&#124;int** | Max number of times to ask before giving up (false by default, which means infinite) |
| `$errorMessage` | **string** | Message which will be shown if invalid value from choice list would be picked |
| `$multiselect` | **bool** | Select more than one value separated by comma |

**Return Value:**

The selected value or values (the key of the choices array)



***

### ask

Asks a question to the user.

```php
public ask(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, string $default = null, array $autocomplete = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question to ask |
| `$default` | **string** | The default answer if none is given by the user |
| `$autocomplete` | **array** | List of values to autocomplete |

**Return Value:**

The user answer



***

### askConfirmation

Asks a confirmation to the user.

```php
public askConfirmation(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, bool $default = true): bool
```

The question will be asked until the user answers by nothing, yes, or no.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question to ask |
| `$default` | **bool** | The default answer if the user enters nothing |

**Return Value:**

true if the user has confirmed, false otherwise



***

### askHiddenResponse

Asks a question to the user, the response is hidden.

```php
public askHiddenResponse(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, bool $fallback = true): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question |
| `$fallback` | **bool** | In case the response can not be hidden, whether to fallback on non-hidden question or not |

**Return Value:**

The answer



***

### askAndValidate

Asks for a value and validates the response.

```php
public askAndValidate(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, callable $validator, int|false $attempts = false, string $default = null, array $autocomplete = null): mixed
```

The validator receives the data to validate. It must return the validated data when the data is valid and throw an
exception otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question to ask |
| `$validator` | **callable** | A PHP callback |
| `$attempts` | **
int&#124;false** | Max number of times to ask before giving up (false by default, which means infinite) |
| `$default` | **string** | The default answer if none is given by the user |
| `$autocomplete` | **array** | List of values to autocomplete |

***

### askHiddenResponseAndValidate

Asks for a value, hide and validates the response.

```php
public askHiddenResponseAndValidate(\Symfony\Component\Console\Output\OutputInterface $output, string|array $question, callable $validator, int|false $attempts = false, bool $fallback = true): string
```

The validator receives the data to validate. It must return the validated data when the data is valid and throw an
exception otherwise.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$question` | **string&#124;array** | The question to ask |
| `$validator` | **callable** | A PHP callback |
| `$attempts` | **
int&#124;false** | Max number of times to ask before giving up (false by default, which means infinite) |
| `$fallback` | **bool** | In case the response can not be hidden, whether to fallback on non-hidden question or not |

**Return Value:**

The response



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
public getInputStream(): resource|null
```

**Return Value:**

The input stream or null if the default STDIN is used



***

### getName

{@inheritdoc}

```php
public getName(): mixed
```

***

### getShell

Return a valid Unix shell.

```php
private getShell(): string|bool
```

**Return Value:**

The valid shell name, false in case no valid shell is found



***

### hasSttyAvailable

```php
private hasSttyAvailable(): mixed
```

***

### validateAttempts

Validate an attempt.

```php
private validateAttempts(callable $interviewer, \Symfony\Component\Console\Output\OutputInterface $output, callable $validator, int|false $attempts): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$interviewer` | **callable** | A callable that will ask for a question and return the result |
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** | An Output instance |
| `$validator` | **callable** | A PHP callback |
| `$attempts` | **int&#124;false** | Max number of times to ask before giving up; false will ask infinitely |

**Return Value:**

The validated response



***

## Inherited methods

### setInput

Sets the Console Input.

```php
public setInput(\Symfony\Component\Console\Input\InputInterface $input): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **\Symfony\Component\Console\Input\InputInterface** |  |

***

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
