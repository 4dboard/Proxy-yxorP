***

# ChannelLevelActivationStrategy

Channel and Error level based monolog activation strategy. Allows to trigger activation based on level per channel. e.g.
trigger activation on level 'ERROR' by default, except for records of the 'sql' channel; those should trigger activation
on level 'WARN'.

Example:

<code>
  $activationStrategy = new ChannelLevelActivationStrategy(
      Logger::CRITICAL,
      array(
          'request' => Logger::ALERT,
          'sensitive' => Logger::ERROR,
      )
  );
  $handler = new FingersCrossedHandler(new StreamHandler('php://stderr'), $activationStrategy);
</code>

* Full name: `\Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy`
* This class implements:
  [`\Monolog\Handler\FingersCrossed\ActivationStrategyInterface`](./ActivationStrategyInterface.md)

## Properties

### defaultActionLevel

```php
private $defaultActionLevel
```

***

### channelToActionLevel

```php
private $channelToActionLevel
```

***

## Methods

### __construct

```php
public __construct(int $defaultActionLevel, array $channelToActionLevel = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultActionLevel` | **
int** | The default action level to be used if the record&#039;s category doesn&#039;t match any |
| `$channelToActionLevel` | **array** | An array that maps channel names to action levels. |

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
