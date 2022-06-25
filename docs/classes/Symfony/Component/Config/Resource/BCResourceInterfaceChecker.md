***

# BCResourceInterfaceChecker

Resource checker for the ResourceInterface. Exists for BC.



* Full name: `\Symfony\Component\Config\Resource\BCResourceInterfaceChecker`
* Parent class: [`\Symfony\Component\Config\Resource\SelfCheckingResourceChecker`](./SelfCheckingResourceChecker.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.




## Methods


### supports

Queries the ResourceChecker whether it can validate a given
resource or not.

```php
public supports(\Symfony\Component\Config\Resource\ResourceInterface $metadata): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Config\Resource\ResourceInterface** | The resource to be checked for freshness |


**Return Value:**

True if the ResourceChecker can handle this resource type, false if not



***

### isFresh

Validates the resource.

```php
public isFresh(\Symfony\Component\Config\Resource\ResourceInterface $resource, mixed $timestamp): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **\Symfony\Component\Config\Resource\ResourceInterface** | The resource to be validated |
| `$timestamp` | **mixed** | The timestamp at which the cache associated with this resource was created |


**Return Value:**

True if the resource has not changed since the given timestamp, false otherwise



***


## Inherited methods


### supports

Queries the ResourceChecker whether it can validate a given
resource or not.

```php
public supports(\Symfony\Component\Config\Resource\ResourceInterface $metadata): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Config\Resource\ResourceInterface** | The resource to be checked for freshness |


**Return Value:**

True if the ResourceChecker can handle this resource type, false if not



***

### isFresh

Validates the resource.

```php
public isFresh(\Symfony\Component\Config\Resource\ResourceInterface $resource, mixed $timestamp): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **\Symfony\Component\Config\Resource\ResourceInterface** | The resource to be validated |
| `$timestamp` | **mixed** | The timestamp at which the cache associated with this resource was created |


**Return Value:**

True if the resource has not changed since the given timestamp, false otherwise



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
