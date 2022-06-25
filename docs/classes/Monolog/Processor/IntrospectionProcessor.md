***

# IntrospectionProcessor

Injects line/file:class/function where the log message came from

Warning: This only works if the handler processes the logs directly. If you put the processor on a handler that is
behind a FingersCrossedHandler for example, the processor will only be called once the trigger level is reached, and all
the log records will have the same file/line/.. data from the call that triggered the FingersCrossedHandler.

* Full name: `\Monolog\Processor\IntrospectionProcessor`
* This class implements:
  [`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)

## Properties

### level

```php
private $level
```

***

### skipClassesPartials

```php
private $skipClassesPartials
```

***

### skipStackFramesCount

```php
private $skipStackFramesCount
```

***

### skipFunctions

```php
private $skipFunctions
```

***

## Methods

### __construct

```php
public __construct(mixed $level = Logger::DEBUG, array $skipClassesPartials = array(), mixed $skipStackFramesCount): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |
| `$skipClassesPartials` | **array** |  |
| `$skipStackFramesCount` | **mixed** |  |

***

### __invoke

```php
public __invoke(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### isTraceClassOrSkippedFunction

```php
private isTraceClassOrSkippedFunction(array $trace, mixed $index): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trace` | **array** |  |
| `$index` | **mixed** |  |

yxorP::get('REQUEST')
