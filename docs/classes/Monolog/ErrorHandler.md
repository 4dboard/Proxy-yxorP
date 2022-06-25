***

# ErrorHandler

Monolog error handler

A facility to enable logging of runtime errors, exceptions and fatal errors.

Quick setup: <code>ErrorHandler::register($logger);</code>

* Full name: `\Monolog\ErrorHandler`

## Properties

### logger

```php
private $logger
```

***

### previousExceptionHandler

```php
private $previousExceptionHandler
```

***

### uncaughtExceptionLevel

```php
private $uncaughtExceptionLevel
```

***

### previousErrorHandler

```php
private $previousErrorHandler
```

***

### errorLevelMap

```php
private $errorLevelMap
```

***

### handleOnlyReportedErrors

```php
private $handleOnlyReportedErrors
```

***

### hasFatalErrorHandler

```php
private $hasFatalErrorHandler
```

***

### fatalLevel

```php
private $fatalLevel
```

***

### reservedMemory

```php
private $reservedMemory
```

***

### lastFatalTrace

```php
private $lastFatalTrace
```

***

### fatalErrors

```php
private static $fatalErrors
```

* This property is **static**.

***

## Methods

### __construct

```php
public __construct(\Psr\Log\LoggerInterface $logger): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Psr\Log\LoggerInterface** |  |

***

### register

Registers a new ErrorHandler for a given Logger

```php
public static register(\Psr\Log\LoggerInterface $logger, array|false $errorLevelMap = array(), int|false $exceptionLevel = null, int|false $fatalLevel = null): \Monolog\ErrorHandler
```

By default it will handle errors, exceptions and fatal errors

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Psr\Log\LoggerInterface** |  |
| `$errorLevelMap` | **
array&#124;false** | an array of E_* constant to LogLevel::* constant mapping, or false to disable error handling |
| `$exceptionLevel` | **int&#124;false** | a LogLevel::* constant, or false to disable exception handling |
| `$fatalLevel` | **int&#124;false** | a LogLevel::* constant, or false to disable fatal error handling |

***

### registerExceptionHandler

```php
public registerExceptionHandler(mixed $level = null, mixed $callPrevious = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$callPrevious` | **mixed** |  |

***

### registerErrorHandler

```php
public registerErrorHandler(array $levelMap = array(), mixed $callPrevious = true, mixed $errorTypes = -1, mixed $handleOnlyReportedErrors = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levelMap` | **array** |  |
| `$callPrevious` | **mixed** |  |
| `$errorTypes` | **mixed** |  |
| `$handleOnlyReportedErrors` | **mixed** |  |

***

### registerFatalHandler

```php
public registerFatalHandler(mixed $level = null, mixed $reservedMemorySize = 20): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$reservedMemorySize` | **mixed** |  |

***

### defaultErrorLevelMap

```php
protected defaultErrorLevelMap(): mixed
```

***

### handleException

```php
public handleException(mixed $e): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **mixed** |  |

***

### handleError

```php
public handleError(mixed $code, mixed $message, mixed $file = &#039;&#039;, mixed $line, mixed $context = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |
| `$message` | **mixed** |  |
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |
| `$context` | **mixed** |  |

***

### handleFatalError

```php
public handleFatalError(): mixed
```

***

### codeToString

```php
private static codeToString(mixed $code): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |

yxorP::get('REQUEST')
