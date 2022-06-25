***

# DirectoryResource

DirectoryResource represents a resources stored in a subdirectory tree.



* Full name: `\Symfony\Component\Config\Resource\DirectoryResource`
* This class implements:
[`\Symfony\Component\Config\Resource\SelfCheckingResourceInterface`](./SelfCheckingResourceInterface.md), [`\Serializable`](../../../../Serializable.md)



## Properties


### resource



```php
private $resource
```






***

### pattern



```php
private $pattern
```






***

## Methods


### __construct



```php
public __construct(string $resource, string|null $pattern = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **string** | The file path to the resource |
| `$pattern` | **string&#124;null** | A pattern to restrict monitored files |




***

### __toString

{@inheritdoc}

```php
public __toString(): mixed
```











***

### getResource

{@inheritdoc}

```php
public getResource(): mixed
```











***

### getPattern

Returns the pattern to restrict monitored files.

```php
public getPattern(): string|null
```











***

### isFresh

Returns true if the resource has not been updated since the given timestamp.

```php
public isFresh(mixed $timestamp): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **mixed** | The last time the resource was loaded |


**Return Value:**

True if the resource has not been updated, false otherwise



***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $serialized): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serialized` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
