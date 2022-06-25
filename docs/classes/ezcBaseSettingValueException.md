***

# ezcBaseSettingValueException

ezcBaseSettingValueExeception is thrown whenever a value to a class'
configuration option is either of the wrong type, or has a wrong value.



* Full name: `\ezcBaseSettingValueException`
* Parent class: [`\ezcBaseException`](./ezcBaseException.md)




## Methods


### __construct

Constructs a new ezcBaseConfigException

```php
public __construct(string $settingName, mixed $value, string $expectedValue = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settingName` | **string** | The name of the setting where something was<br />wrong with. |
| `$value` | **mixed** | The value that the option was tried to be set too. |
| `$expectedValue` | **string** | A string explaining the allowed type and value range. |




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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
