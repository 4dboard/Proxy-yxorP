***

# BadMethodCallException





* Full name: `\MongoDB\Exception\BadMethodCallException`
* Parent class: [`BadMethodCallException`](../../BadMethodCallException.md)
* This class implements:
[`\MongoDB\Exception\Exception`](./Exception.md)




## Methods


### classIsImmutable

Thrown when a mutable method is invoked on an immutable object.

```php
public static classIsImmutable(string $class): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | Class name |




***

### unacknowledgedWriteResultAccess

Thrown when accessing a result field on an unacknowledged write result.

```php
public static unacknowledgedWriteResultAccess(string $method): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method name |




***


***
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
