***

# ConsoleLogger

PSR-3 compliant console logger.

* Full name: `\Symfony\Component\Console\Logger\ConsoleLogger`
* Parent class: [`\Psr\Log\AbstractLogger`](../../../../Psr/Log/AbstractLogger.md)

**See Also:**

* https://www.php-fig.org/psr/psr-3/ -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`INFO`|public| |&#039;info&#039;|
|`ERROR`|public| |&#039;error&#039;|

## Properties

### output

```php
private $output
```

***

### verbosityLevelMap

```php
private $verbosityLevelMap
```

***

### formatLevelMap

```php
private $formatLevelMap
```

***

### errored

```php
private $errored
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output, array $verbosityLevelMap = [], array $formatLevelMap = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |
| `$verbosityLevelMap` | **array** |  |
| `$formatLevelMap` | **array** |  |

***

### log

{@inheritdoc}

```php
public log(mixed $level, mixed $message, array $context = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **mixed** |  |
| `$context` | **array** |  |

***

### hasErrored

Returns true when any messages have been logged at error levels.

```php
public hasErrored(): bool
```

***

### interpolate

Interpolates context values into the message placeholders.

```php
private interpolate(string $message, array $context): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$context` | **array** |  |

***

## Inherited methods

### emergency

System is unusable.

```php
public emergency(string|\Stringable $message, array $context = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### alert

Action must be taken immediately.

```php
public alert(string|\Stringable $message, array $context = []): void
```

Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### critical

Critical conditions.

```php
public critical(string|\Stringable $message, array $context = []): void
```

Example: Application component unavailable, unexpected exception.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### error

Runtime errors that do not require immediate action but should typically
be logged and monitored.

```php
public error(string|\Stringable $message, array $context = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### warning

Exceptional occurrences that are not errors.

```php
public warning(string|\Stringable $message, array $context = []): void
```

Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### notice

Normal but significant events.

```php
public notice(string|\Stringable $message, array $context = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### info

Interesting events.

```php
public info(string|\Stringable $message, array $context = []): void
```

Example: User logs in, SQL logs.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### debug

Detailed debug information.

```php
public debug(string|\Stringable $message, array $context = []): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***

### log

Logs with an arbitrary level.

```php
public log(mixed $level, string|\Stringable $message, array $context = []): void
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **string&#124;\Stringable** |  |
| `$context` | **array** |  |

***


***

