***

# ezcBaseSettingNotFoundException

ezcBaseSettingNotFoundException is thrown whenever there is a name passed as part as the options array to setOptions()
for an option that doesn't exist.

* Full name: `\ezcBaseSettingNotFoundException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)

## Methods

### __construct

Constructs a new ezcBaseSettingNotFoundException for $settingName.

```php
public __construct(string $settingName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settingName` | **string** | The name of the setting that does not exist. |

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
