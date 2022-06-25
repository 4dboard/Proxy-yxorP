***

# StaleResource





* Full name: `\Symfony\Component\Translation\Tests\StaleResource`
* This class implements:
[`\Symfony\Component\Config\Resource\SelfCheckingResourceInterface`](../../Config/Resource/SelfCheckingResourceInterface.md)




## Methods


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

### getResource



```php
public getResource(): mixed
```











***

### __toString



```php
public __toString(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
