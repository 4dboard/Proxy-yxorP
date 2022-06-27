***

# PluginOptions

* Full name: `\Zend\Cache\Storage\Plugin\PluginOptions`
* Parent class: [`\Zend\Stdlib\AbstractOptions`](../../../Stdlib/AbstractOptions.md)

## Properties

### clearingFactor

Used by:

- ClearByFactor

```php
protected int $clearingFactor
```

***

### exceptionCallback

Used by:

- ExceptionHandler

```php
protected null|callable $exceptionCallback
```

***

### exitOnAbort

Used by:

- IgnoreUserAbort

```php
protected bool $exitOnAbort
```

***

### optimizingFactor

Used by:

- OptimizeByFactor

```php
protected int $optimizingFactor
```

***

### serializer

Used by:

- Serializer

```php
protected string|\Zend\Serializer\Adapter\AdapterInterface $serializer
```

***

### serializerOptions

Used by:

- Serializer

```php
protected array $serializerOptions
```

***

### throwExceptions

Used by:

- ExceptionHandler

```php
protected bool $throwExceptions
```

***

## Methods

### setClearingFactor

Set automatic clearing factor

```php
public setClearingFactor(int $clearingFactor): \Zend\Cache\Storage\Plugin\PluginOptions
```

Used by:

- ClearExpiredByFactor

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clearingFactor` | **int** |  |

***

### getClearingFactor

Get automatic clearing factor

```php
public getClearingFactor(): int
```

Used by:

- ClearExpiredByFactor

***

### setExceptionCallback

Set callback to call on intercepted exception

```php
public setExceptionCallback(null|callable $exceptionCallback): \Zend\Cache\Storage\Plugin\PluginOptions
```

Used by:

- ExceptionHandler

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exceptionCallback` | **null&#124;callable** |  |

***

### getExceptionCallback

Get callback to call on intercepted exception

```php
public getExceptionCallback(): null|callable
```

Used by:

- ExceptionHandler

***

### setExitOnAbort

Exit if connection aborted and ignore_user_abort is disabled.

```php
public setExitOnAbort(bool $exitOnAbort): \Zend\Cache\Storage\Plugin\PluginOptions
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exitOnAbort` | **bool** |  |

***

### getExitOnAbort

Exit if connection aborted and ignore_user_abort is disabled.

```php
public getExitOnAbort(): bool
```

***

### setOptimizingFactor

Set automatic optimizing factor

```php
public setOptimizingFactor(int $optimizingFactor): \Zend\Cache\Storage\Plugin\PluginOptions
```

Used by:

- OptimizeByFactor

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$optimizingFactor` | **int** |  |

***

### getOptimizingFactor

Set automatic optimizing factor

```php
public getOptimizingFactor(): int
```

Used by:

- OptimizeByFactor

***

### setSerializer

Set serializer

```php
public setSerializer(string|\Zend\Serializer\Adapter\AdapterInterface $serializer): self
```

Used by:

- Serializer

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializer` | **string&#124;\Zend\Serializer\Adapter\AdapterInterface** |  |

***

### getSerializer

Get serializer

```php
public getSerializer(): \Zend\Serializer\Adapter\AdapterInterface
```

Used by:

- Serializer

***

### setSerializerOptions

Set configuration options for instantiating a serializer adapter

```php
public setSerializerOptions(mixed $serializerOptions): \Zend\Cache\Storage\Plugin\PluginOptions
```

Used by:

- Serializer

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serializerOptions` | **mixed** |  |

***

### getSerializerOptions

Get configuration options for instantiating a serializer adapter

```php
public getSerializerOptions(): array
```

Used by:

- Serializer

***

### setThrowExceptions

Set flag indicating we should re-throw exceptions

```php
public setThrowExceptions(bool $throwExceptions): \Zend\Cache\Storage\Plugin\PluginOptions
```

Used by:

- ExceptionHandler

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwExceptions` | **bool** |  |

***

### getThrowExceptions

Should we re-throw exceptions?

```php
public getThrowExceptions(): bool
```

Used by:

- ExceptionHandler

***

### normalizeFactor

Normalize a factor

```php
protected normalizeFactor(int $factor): int
```

Cast to int and ensure we have a value greater than zero.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factor` | **int** |  |

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
