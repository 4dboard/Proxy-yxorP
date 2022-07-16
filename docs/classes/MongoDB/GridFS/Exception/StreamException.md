***

# StreamException





* Full name: `\MongoDB\GridFS\Exception\StreamException`
* Parent class: [`\MongoDB\Exception\RuntimeException`](../../Exception/RuntimeException.md)




## Methods


### downloadFromFilenameFailed



```php
public static downloadFromFilenameFailed(string $filename, resource $source, resource $destination): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$source` | **resource** |  |
| `$destination` | **resource** |  |




***

### downloadFromIdFailed



```php
public static downloadFromIdFailed(mixed $id, resource $source, resource $destination): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$source` | **resource** |  |
| `$destination` | **resource** |  |




***

### uploadFailed



```php
public static uploadFailed(string $filename, resource $source, string $destinationUri): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$source` | **resource** |  |
| `$destinationUri` | **string** |  |




***


***

