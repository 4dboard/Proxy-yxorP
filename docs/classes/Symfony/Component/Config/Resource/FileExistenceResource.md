***

# FileExistenceResource

FileExistenceResource represents a resource stored on the filesystem.

Freshness is only evaluated against resource creation or deletion.

The resource can be a file or a directory.

* Full name: `\Symfony\Component\Config\Resource\FileExistenceResource`
* This class implements:
[`\Symfony\Component\Config\Resource\SelfCheckingResourceInterface`](./SelfCheckingResourceInterface.md), [`\Serializable`](../../../../Serializable.md)



## Properties


### resource



```php
private $resource
```






***

### exists



```php
private $exists
```






***

## Methods


### __construct



```php
public __construct(string $resource): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **string** | The file path to the resource |




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

{@inheritdoc}

```php
public serialize(): mixed
```











***

### unserialize

{@inheritdoc}

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
