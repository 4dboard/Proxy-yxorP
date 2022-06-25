***

# ProcessTimedOutException

Exception that is thrown when a process times out.

* Full name: `\Symfony\Component\Process\Exception\ProcessTimedOutException`
* Parent class: [`\Symfony\Component\Process\Exception\RuntimeException`](./RuntimeException.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_GENERAL`|public| |1|
|`TYPE_IDLE`|public| |2|

## Properties

### process

```php
private $process
```

***

### timeoutType

```php
private $timeoutType
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Process\Process $process, mixed $timeoutType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$process` | **\Symfony\Component\Process\Process** |  |
| `$timeoutType` | **mixed** |  |

***

### getProcess

```php
public getProcess(): mixed
```

***

### isGeneralTimeout

```php
public isGeneralTimeout(): mixed
```

***

### isIdleTimeout

```php
public isIdleTimeout(): mixed
```

***

### getExceededTimeout

```php
public getExceededTimeout(): mixed
```

yxorP::get('REQUEST')
