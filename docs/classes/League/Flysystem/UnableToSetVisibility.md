***

# UnableToSetVisibility





* Full name: `\League\Flysystem\UnableToSetVisibility`
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


### reason



```php
public reason(): string
```











***

### atLocation



```php
public static atLocation(string $filename, string $extraMessage = &#039;&#039;, \Throwable $previous = null): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$extraMessage` | **string** |  |
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

