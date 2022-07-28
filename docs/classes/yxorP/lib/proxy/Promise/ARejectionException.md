***

# ARejectionException

A special exception that is thrown when waiting on a rejected promise.

The reason value is available via the getReason() method.

* Full name: `\yxorP\lib\proxy\Promise\ARejectionException`
* Parent class: [`RuntimeException`](../../../../RuntimeException.md)



## Properties


### reason



```php
private mixed $reason
```






***

## Methods


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

