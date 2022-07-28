***

# AggregateExceptionA

Exception thrown when too many errors occur in the some() or any() methods.



* Full name: `\yxorP\lib\proxy\Promise\AggregateExceptionA`
* Parent class: [`\yxorP\lib\proxy\Promise\ARejectionException`](./ARejectionException.md)




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

