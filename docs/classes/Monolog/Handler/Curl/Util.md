***

# Util

* Full name: `\Monolog\Handler\Curl\Util`

## Properties

### retriableErrorCodes

```php
private static $retriableErrorCodes
```

* This property is **static**.

***

## Methods

### execute

Executes a CURL request with optional retries and exception on failure

```php
public static execute(resource $ch, mixed $retries = 5, mixed $closeAfterDone = true): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ch` | **resource** | curl handler |
| `$retries` | **mixed** |  |
| `$closeAfterDone` | **mixed** |  |

yxorP::get('REQUEST')
