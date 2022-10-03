***

# UnableToCreateDirectory





* Full name: `\League\Flysystem\UnableToCreateDirectory`
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

## Methods


### atLocation



```php
public static atLocation(string $dirname, string $errorMessage = &#039;&#039;): \League\Flysystem\UnableToCreateDirectory
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |
| `$errorMessage` | **string** |  |




***

### dueToFailure



```php
public static dueToFailure(string $dirname, \Throwable $previous): \League\Flysystem\UnableToCreateDirectory
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirname` | **string** |  |
| `$previous` | **\Throwable** |  |




***

### operation



```php
public operation(): string
```











***

### location



```php
public location(): string
```











***


***

