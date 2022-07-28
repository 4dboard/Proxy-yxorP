***

# Warning

Encapsulates warnings produced by the library.

Warnings can be suppressed (individually or all) if required.
Also it is possible to override warning handler (which is **trigger_error()** by default)

* Full name: `\GraphQL\Error\Warning`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`WARNING_ASSIGN`|public| |2|
|`WARNING_CONFIG`|public| |4|
|`WARNING_FULL_SCHEMA_SCAN`|public| |8|
|`WARNING_CONFIG_DEPRECATION`|public| |16|
|`WARNING_NOT_A_TYPE`|public| |32|
|`ALL`|public| |63|

## Properties


### enableWarnings



```php
private static int $enableWarnings
```



* This property is **static**.


***

### warned



```php
private static array $warned
```



* This property is **static**.


***

### warningHandler



```php
private static callable|null $warningHandler
```



* This property is **static**.


***

## Methods


### setWarningHandler

Sets warning handler which can intercept all system warnings.

```php
public static setWarningHandler(?callable $warningHandler = null): void
```

When not set, trigger_error() is used to notify about warnings.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$warningHandler` | **?callable** |  |




***

### suppress

Suppress warning by id (has no effect when custom warning handler is set)

```php
public static suppress(bool|int $suppress = true): void
```

Usage example:
Warning::suppress(Warning::WARNING_NOT_A_TYPE)

When passing true - suppresses all warnings.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suppress` | **bool&#124;int** |  |




***

### enable

Re-enable previously suppressed warning by id

```php
public static enable(bool|int $enable = true): void
```

Usage example:
Warning::suppress(Warning::WARNING_NOT_A_TYPE)

When passing true - re-enables all warnings.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enable` | **bool&#124;int** |  |




***

### warnOnce



```php
public static warnOnce(string $errorMessage, int $warningId, ?int $messageLevel = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorMessage` | **string** |  |
| `$warningId` | **int** |  |
| `$messageLevel` | **?int** |  |




***

### warn



```php
public static warn(string $errorMessage, int $warningId, ?int $messageLevel = null): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorMessage` | **string** |  |
| `$warningId` | **int** |  |
| `$messageLevel` | **?int** |  |




***


***

