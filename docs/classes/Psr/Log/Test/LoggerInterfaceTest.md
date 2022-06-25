***

# LoggerInterfaceTest

Provides a base test class for ensuring compliance with the LoggerInterface.

Implementors can extend the class and implement abstract methods to run this as part of their test suite.

* Full name: `\Psr\Log\Test\LoggerInterfaceTest`
* Parent class: [`TestCase`](../../../PHPUnit/Framework/TestCase.md)
* This class is an **Abstract class**

## Methods

### getLogger

```php
public getLogger(): \Psr\Log\LoggerInterface
```

* This method is **abstract**.

***

### getLogs

This must return the log messages in order.

```php
public getLogs(): string[]
```

The simple formatting of the messages is: "<LOG LEVEL> <MESSAGE>".

Example ->error('Foo') would yield "error Foo".

* This method is **abstract**.

***

### testImplements

```php
public testImplements(): mixed
```

***

### testLogsAtAllLevels

```php
public testLogsAtAllLevels(mixed $level, mixed $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$message` | **mixed** |  |

***

### provideLevelsAndMessages

```php
public provideLevelsAndMessages(): mixed
```

***

### testThrowsOnInvalidLevel

```php
public testThrowsOnInvalidLevel(): mixed
```

***

### testContextReplacement

```php
public testContextReplacement(): mixed
```

***

### testObjectCastToString

```php
public testObjectCastToString(): mixed
```

***

### testContextCanContainAnything

```php
public testContextCanContainAnything(): mixed
```

***

### testContextExceptionKeyCanBeExceptionOrOtherValues

```php
public testContextExceptionKeyCanBeExceptionOrOtherValues(): mixed
```

yxorP::get('REQUEST')
