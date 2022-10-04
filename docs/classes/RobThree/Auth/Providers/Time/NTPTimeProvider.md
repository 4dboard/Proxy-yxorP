***

# NTPTimeProvider

Takes the time from any NTP server

* Full name: `\RobThree\Auth\Providers\Time\NTPTimeProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Time\ITimeProvider`](./ITimeProvider.md)

## Properties

### host

```php
public string $host
```

***

### port

```php
public int $port
```

***

### timeout

```php
public int $timeout
```

***

## Methods

### __construct

```php
public __construct(string $host = &#039;time.google.com&#039;, int $port = 123, int $timeout = 1): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** |  |
| `$port` | **int** |  |
| `$timeout` | **int** |  |

***

### getTime

```php
public getTime(): int
```

**Return Value:**

the current timestamp according to this provider



***


***

