***

# ezcBaseValueException

ezcBaseValueException is thrown whenever the type or value of the given variable is not as expected.

* Full name: `\ezcBaseValueException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)

## Methods

### __construct

Constructs a new ezcBaseValueException on the $name variable.

```php
public __construct(string $settingName, mixed $value, string $expectedValue = null, string $variableType = &#039;setting&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settingName` | **string** | The name of the setting where something was<br />wrong with. |
| `$value` | **mixed** | The value that the option was tried to be set too. |
| `$expectedValue` | **string** | A string explaining the allowed type and value range. |
| `$variableType` | **string** | What type of variable was tried to be set (setting, argument). |

***

## Inherited methods

### __construct

Constructs a new ezcBaseException with $message

```php
public __construct(string $message): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |

yxorP::get('REQUEST')
