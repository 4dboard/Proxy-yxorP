***

# ErrorHandler

ErrorHandler that can be used to catch internal PHP errors and convert to an ErrorException instance.

* Full name: `\Zend\Stdlib\ErrorHandler`
* This class is an **Abstract class**

## Properties

### stack

Active stack

```php
protected static array $stack
```

* This property is **static**.

***

## Methods

### started

Check if this error handler is active

```php
public static started(): bool
```

* This method is **static**.

***

### getNestedLevel

Get the current nested level

```php
public static getNestedLevel(): int
```

* This method is **static**.

***

### start

Starting the error handler

```php
public static start(int $errorLevel = E_WARNING): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorLevel` | **int** |  |

***

### stop

Stopping the error handler

```php
public static stop(bool $throw = false): null|\ErrorException
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throw` | **bool** | Throw the ErrorException if any |

***

### clean

Stop all active handler

```php
public static clean(): void
```

* This method is **static**.

***

### addError

Add an error to the stack

```php
public static addError(int $errno, string $errstr = &#039;&#039;, string $errfile = &#039;&#039;, int $errline): void
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errno` | **int** |  |
| `$errstr` | **string** |  |
| `$errfile` | **string** |  |
| `$errline` | **int** |  |

yxorP::get('REQUEST')
