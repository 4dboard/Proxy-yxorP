***

# UnableToMoveFile





* Full name: `\League\Flysystem\UnableToMoveFile`
* Parent class: [`RuntimeException`](../../RuntimeException.md)
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\League\Flysystem\FilesystemOperationFailed`](./FilesystemOperationFailed.md)
* This class is a **Final class**



## Properties


### source



```php
private string $source
```






***

### destination



```php
private string $destination
```






***

## Methods


### source



```php
public source(): string
```











***

### destination



```php
public destination(): string
```











***

### fromLocationTo



```php
public static fromLocationTo(string $sourcePath, string $destinationPath, \Throwable $previous = null): \League\Flysystem\UnableToMoveFile
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sourcePath` | **string** |  |
| `$destinationPath` | **string** |  |
| `$previous` | **\Throwable** |  |




***

### operation



```php
public operation(): string
```











***


***

