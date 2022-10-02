***

# HttpTimeProvider

Takes the time from any webserver by doing a HEAD request on the specified URL and extracting the 'Date:' header

* Full name: `\RobThree\Auth\Providers\Time\HttpTimeProvider`
* This class implements:
  [`\RobThree\Auth\Providers\Time\ITimeProvider`](./ITimeProvider.md)

## Properties

### url

```php
public string $url
```

***

### expectedtimeformat

```php
public string $expectedtimeformat
```

***

### options

```php
public array $options
```

***

## Methods

### __construct

```php
public __construct(string $url = &#039;https://google.com&#039;, string $expectedtimeformat = &#039;D, d M Y H:i:s O+&#039;, array $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |
| `$expectedtimeformat` | **string** |  |
| `$options` | **array** |  |

***

### getTime

```php
public getTime(): int
```

**Return Value:**

the current timestamp according to this provider



***


***

