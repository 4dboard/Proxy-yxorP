***

# Registry

Monolog log registry

Allows to get `Logger` instances in the global scope via static method calls on this class.

<code>
$application = new Monolog\Logger('application');
$api = new Monolog\Logger('api');

Monolog\Registry::addLogger($application); Monolog\Registry::addLogger($api);

function testLogger()
{ Monolog\Registry::api()->addError('Sent to $api Logger instance'); Monolog\Registry::application()->addError('Sent to
$application Logger instance'); }
</code>

* Full name: `\Monolog\Registry`

## Properties

### loggers

List of all loggers in the registry (by named indexes)

```php
private static \Monolog\Logger[] $loggers
```

* This property is **static**.

***

## Methods

### addLogger

Adds new logging channel to the registry

```php
public static addLogger(\Monolog\Logger $logger, string|null $name = null, bool $overwrite = false): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** | Instance of the logging channel |
| `$name` | **string&#124;null** | Name of the logging channel ($logger-&gt;getName() by default) |
| `$overwrite` | **bool** | Overwrite instance in the registry if the given name already exists? |

***

### hasLogger

Checks if such logging channel exists by name or instance

```php
public static hasLogger(string|\Monolog\Logger $logger): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **string&#124;\Monolog\Logger** | Name or logger instance |

***

### removeLogger

Removes instance from registry by name or instance

```php
public static removeLogger(string|\Monolog\Logger $logger): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **string&#124;\Monolog\Logger** | Name or logger instance |

***

### clear

Clears the registry

```php
public static clear(): mixed
```

* This method is **static**.

***

### getInstance

Gets Logger instance from the registry

```php
public static getInstance(string $name): \Monolog\Logger
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the requested Logger instance |

**Return Value:**

Requested instance of Logger



***

### __callStatic

Gets Logger instance from the registry via static method call

```php
public static __callStatic(string $name, array $arguments): \Monolog\Logger
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the requested Logger instance |
| `$arguments` | **array** | Arguments passed to static method call |

**Return Value:**

Requested instance of Logger yxorP::get('REQUEST')
