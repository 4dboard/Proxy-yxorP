***

# ErrorHandler

A generic ErrorHandler for the PHP engine.

Provides five bit fields that control how errors are handled:

- thrownErrors: errors thrown as \ErrorException
- loggedErrors: logged errors, when not @-silenced
- scopedErrors: errors thrown or logged with their local context
- tracedErrors: errors logged with their stack trace, only once for repeated errors
- screamedErrors: never @-silenced errors

Each error level can be logged by a dedicated PSR-3 logger object. Screaming only applies to logging. Throwing takes
precedence over logging. Uncaught exceptions are logged as E_ERROR. E_DEPRECATED and E_USER_DEPRECATED levels never
throw. E_RECOVERABLE_ERROR and E_USER_ERROR levels always throw. Non catchable errors that can be detected at shutdown
time are logged when the scream bit field allows so. As errors have a performance cost, repeated errors are all logged,
so that the developer can see them and weight them as more important to fix than others of the same level.

* Full name: `\Symfony\Component\Debug\ErrorHandler`

## Properties

### levels

```php
private $levels
```

***

### loggers

```php
private $loggers
```

***

### thrownErrors

```php
private $thrownErrors
```

***

### scopedErrors

```php
private $scopedErrors
```

***

### tracedErrors

```php
private $tracedErrors
```

***

### screamedErrors

```php
private $screamedErrors
```

***

### loggedErrors

```php
private $loggedErrors
```

***

### loggedTraces

```php
private $loggedTraces
```

***

### isRecursive

```php
private $isRecursive
```

***

### isRoot

```php
private $isRoot
```

***

### exceptionHandler

```php
private $exceptionHandler
```

***

### bootstrappingLogger

```php
private $bootstrappingLogger
```

***

### reservedMemory

```php
private static $reservedMemory
```

* This property is **static**.

***

### stackedErrors

```php
private static $stackedErrors
```

* This property is **static**.

***

### stackedErrorLevels

```php
private static $stackedErrorLevels
```

* This property is **static**.

***

### toStringException

```php
private static $toStringException
```

* This property is **static**.

***

## Methods

### register

Registers the error handler.

```php
public static register(self|null $handler = null, bool $replace = true): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **self&#124;null** | The handler to register |
| `$replace` | **bool** | Whether to replace or not any existing handler |

**Return Value:**

The registered error handler



***

### __construct

```php
public __construct(\Symfony\Component\Debug\BufferingLogger $bootstrappingLogger = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bootstrappingLogger` | **\Symfony\Component\Debug\BufferingLogger** |  |

***

### setDefaultLogger

Sets a logger to non assigned errors levels.

```php
public setDefaultLogger(\Psr\Log\LoggerInterface $logger, array|int $levels = E_ALL, bool $replace = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Psr\Log\LoggerInterface** | A PSR-3 logger to put as default for the given levels |
| `$levels` | **array&#124;int** | An array map of E_* to LogLevel::* or an integer bit field of E_* constants |
| `$replace` | **bool** | Whether to replace or not any existing logger |

***

### setLoggers

Sets a logger for each error level.

```php
public setLoggers(array $loggers): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loggers` | **array** | Error levels to [LoggerInterface&amp;#124;null, LogLevel::*] map |

**Return Value:**

The previous map



***

### setExceptionHandler

Sets a user exception handler.

```php
public setExceptionHandler(callable $handler = null): callable|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** | A handler that will be called on Exception |

**Return Value:**

The previous exception handler



***

### throwAt

Sets the PHP error levels that throw an exception when a PHP error occurs.

```php
public throwAt(int $levels, bool $replace = false): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levels` | **int** | A bit field of E_* constants for thrown errors |
| `$replace` | **bool** | Replace or amend the previous value |

**Return Value:**

The previous value



***

### scopeAt

Sets the PHP error levels for which local variables are preserved.

```php
public scopeAt(int $levels, bool $replace = false): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levels` | **int** | A bit field of E_* constants for scoped errors |
| `$replace` | **bool** | Replace or amend the previous value |

**Return Value:**

The previous value



***

### traceAt

Sets the PHP error levels for which the stack trace is preserved.

```php
public traceAt(int $levels, bool $replace = false): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levels` | **int** | A bit field of E_* constants for traced errors |
| `$replace` | **bool** | Replace or amend the previous value |

**Return Value:**

The previous value



***

### screamAt

Sets the error levels where the @-operator is ignored.

```php
public screamAt(int $levels, bool $replace = false): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$levels` | **int** | A bit field of E_* constants for screamed errors |
| `$replace` | **bool** | Replace or amend the previous value |

**Return Value:**

The previous value



***

### reRegister

Re-registers as a PHP error handler if levels changed.

```php
private reRegister(mixed $prev): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prev` | **mixed** |  |

***

### stackErrors

Configures the error handler for delayed handling.

```php
public static stackErrors(): mixed
```

Ensures also that non-catchable fatal errors are never silenced.

As shown by http://bugs.php.net/42098 and http://bugs.php.net/60724
PHP has a compile stage where it behaves unusually. To workaround it, we plug an error handler that only stacks errors
for later.

The most important feature of this is to prevent autoloading until unstackErrors() is called.

* This method is **static**.

***

### unstackErrors

Unstacks stacked errors and forwards to the logger.

```php
public static unstackErrors(): mixed
```

* This method is **static**.

***

### getFatalErrorHandlers

Gets the fatal error handlers.

```php
protected getFatalErrorHandlers(): \Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface[]
```

Override this method if you want to define more fatal error handlers.

**Return Value:**

An array of FatalErrorHandlerInterface yxorP::get('REQUEST')
