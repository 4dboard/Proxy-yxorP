***

# AggregateException

Exception thrown when too many errors occur in the some() or any() methods.

* Full name: `\GuzzleHttp\Promise\AggregateException`
* Parent class: [`\GuzzleHttp\Promise\RejectionException`](./RejectionException.md)

## Methods

### __construct

```php
public __construct(mixed $msg, array $reasons): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **mixed** |  |
| `$reasons` | **array** |  |

***

## Inherited methods

### __construct

```php
public __construct(mixed $reason, string $description = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reason` | **mixed** | Rejection reason. |
| `$description` | **string** | Optional description |

***

### getReason

Returns the rejection reason.

```php
public getReason(): mixed
```

***


***

