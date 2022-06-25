***

# SignalHandler

Monolog POSIX signal handler

* Full name: `\Monolog\SignalHandler`

## Properties

### logger

```php
private $logger
```

***

### previousSignalHandler

```php
private $previousSignalHandler
```

***

### signalLevelMap

```php
private $signalLevelMap
```

***

### signalRestartSyscalls

```php
private $signalRestartSyscalls
```

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

### registerSignalHandler

```php
public registerSignalHandler(mixed $signo, mixed $level = LogLevel::CRITICAL, mixed $callPrevious = true, mixed $restartSyscalls = true, mixed $async = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signo` | **mixed** |  |
| `$level` | **mixed** |  |
| `$callPrevious` | **mixed** |  |
| `$restartSyscalls` | **mixed** |  |
| `$async` | **mixed** |  |

***

### handleSignal

```php
public handleSignal(mixed $signo, array $siginfo = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signo` | **mixed** |  |
| `$siginfo` | **array** |  |

yxorP::get('REQUEST')
