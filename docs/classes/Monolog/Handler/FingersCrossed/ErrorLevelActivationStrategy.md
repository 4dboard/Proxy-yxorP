***

# ErrorLevelActivationStrategy

Error level based activation strategy.

* Full name: `\Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy`
* This class implements:
  [`\Monolog\Handler\FingersCrossed\ActivationStrategyInterface`](./ActivationStrategyInterface.md)

## Properties

### actionLevel

```php
private $actionLevel
```

***

## Methods

### __construct

```php
public __construct(mixed $actionLevel): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actionLevel` | **mixed** |  |

***

### isHandlerActivated

Returns whether the given record activates the handler.

```php
public isHandlerActivated(array $record): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

yxorP::get('REQUEST')
