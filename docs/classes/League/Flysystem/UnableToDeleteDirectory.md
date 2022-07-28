***

# UnableToDeleteDirectory





* Full name: `\League\Flysystem\UnableToDeleteDirectory`
* Parent class: [`RuntimeException`](../../RuntimeException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\League\Flysystem\FilesystemOperationFailed`](./FilesystemOperationFailed.md)
* This class is a **Final class**



## Properties


### location



```php
private string $location
```






***

### reason



```php
private string $reason
```






***

## Methods


### atLocation



```php
public static atLocation(string $location, string $reason = &#039;&#039;, \Throwable $previous = null): \League\Flysystem\UnableToDeleteDirectory
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$location` | **string** |  |
| `$reason` | **string** |  |
| `$previous` | **\Throwable** |  |




***

### operation



```php
public operation(): string
```











***

### reason



```php
public reason(): string
```











***

### location



```php
public location(): string
```











***


***

