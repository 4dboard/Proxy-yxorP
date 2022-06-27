***

# JsonOptions

* Full name: `\Zend\Serializer\Adapter\JsonOptions`
* Parent class: [`\Zend\Serializer\Adapter\AdapterOptions`](./AdapterOptions.md)

## Properties

### cycleCheck

```php
protected int $cycleCheck
```

***

### enableJsonExprFinder

```php
protected $enableJsonExprFinder
```

***

### objectDecodeType

```php
protected $objectDecodeType
```

***

## Methods

### setCycleCheck

```php
public setCycleCheck(bool $flag): \Zend\Serializer\Adapter\JsonOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### getCycleCheck

```php
public getCycleCheck(): bool
```

***

### setEnableJsonExprFinder

```php
public setEnableJsonExprFinder(bool $flag): \Zend\Serializer\Adapter\JsonOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### getEnableJsonExprFinder

```php
public getEnableJsonExprFinder(): bool
```

***

### setObjectDecodeType

```php
public setObjectDecodeType(int $type): \Zend\Serializer\Adapter\JsonOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### getObjectDecodeType

```php
public getObjectDecodeType(): int
```

***

## Inherited methods

### __construct

Constructor

```php
public __construct(array|\Traversable|null $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;null** |  |

***

### setFromArray

Set one or more configuration properties

```php
public setFromArray(array|\Traversable|\Zend\Stdlib\AbstractOptions $options): \Zend\Stdlib\AbstractOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable&#124;\Zend\Stdlib\AbstractOptions** |  |

**Return Value:**

Provides fluent interface



***

### toArray

Cast to array

```php
public toArray(): array
```

***

### __set

Set a configuration property

```php
public __set(string $key, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__set() -

***

### __get

Get a configuration property

```php
public __get(string $key): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__get() -

***

### __isset

Test if a configuration property is null

```php
public __isset(string $key): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__isset() -

***

### __unset

Set a configuration property to NULL

```php
public __unset(string $key): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |

**See Also:**

* \Zend\Stdlib\ParameterObject::__unset() -

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
