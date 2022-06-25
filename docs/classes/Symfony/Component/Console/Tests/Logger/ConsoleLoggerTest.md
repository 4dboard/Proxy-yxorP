***

# ConsoleLoggerTest

Console logger test.

* Full name: `\Symfony\Component\Console\Tests\Logger\ConsoleLoggerTest`
* Parent class: [`TestCase`](../../../../../PHPUnit/Framework/TestCase.md)

## Properties

### output

```php
protected \Symfony\Component\Console\Tests\Fixtures\DummyOutput $output
```

***

## Methods

### getLogger

```php
public getLogger(): \Psr\Log\LoggerInterface
```

***

### getLogs

Return the log messages in order.

```php
public getLogs(): string[]
```

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
