***

# CancellationException

Exception that is set as the reason for a promise that has been cancelled.



* Full name: `\GuzzleHttp\Promise\CancellationException`
* Parent class: [`\GuzzleHttp\Promise\RejectionException`](./RejectionException.md)






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

