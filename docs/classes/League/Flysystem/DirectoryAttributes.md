***

# DirectoryAttributes





* Full name: `\League\Flysystem\DirectoryAttributes`
* This class implements:
[`\League\Flysystem\StorageAttributes`](./StorageAttributes.md)



## Properties


### type



```php
private string $type
```






***

### path



```php
private string $path
```






***

### visibility



```php
private string|null $visibility
```






***

### lastModified



```php
private int|null $lastModified
```






***

### extraMetadata



```php
private array $extraMetadata
```






***

## Methods


### __construct



```php
public __construct(string $path, ?string $visibility = null, ?int $lastModified = null, array $extraMetadata = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$visibility` | **?string** |  |
| `$lastModified` | **?int** |  |
| `$extraMetadata` | **array** |  |




***

### path



```php
public path(): string
```











***

### type



```php
public type(): string
```











***

### visibility



```php
public visibility(): ?string
```











***

### lastModified



```php
public lastModified(): ?int
```











***

### extraMetadata



```php
public extraMetadata(): array
```











***

### isFile



```php
public isFile(): bool
```











***

### isDir



```php
public isDir(): bool
```











***

### withPath



```php
public withPath(string $path): \League\Flysystem\StorageAttributes
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### fromArray



```php
public static fromArray(array $attributes): \League\Flysystem\StorageAttributes
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributes` | **array** |  |




***

### jsonSerialize



```php
public jsonSerialize(): array
```











***


***

