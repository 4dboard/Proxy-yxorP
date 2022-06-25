***

# Capabilities





* Full name: `\Zend\Cache\Storage\Capabilities`



## Properties


### storage

The storage instance

```php
protected \Zend\Cache\Storage\StorageInterface $storage
```






***

### marker

A marker to set/change capabilities

```php
protected \stdClass $marker
```






***

### baseCapabilities

Base capabilities

```php
protected null|\Zend\Cache\Storage\Capabilities $baseCapabilities
```






***

### expiredRead

Expire read

```php
protected null|bool $expiredRead
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### maxKeyLength

Max. key length

```php
protected null|int $maxKeyLength
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### minTtl

Min. TTL (0 means items never expire)

```php
protected null|int $minTtl
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### maxTtl

Max. TTL (0 means infinite)

```php
protected null|int $maxTtl
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### namespaceIsPrefix

Namespace is prefix

```php
protected null|bool $namespaceIsPrefix
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### namespaceSeparator

Namespace separator

```php
protected null|string $namespaceSeparator
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### staticTtl

Static ttl

```php
protected null|bool $staticTtl
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### supportedDatatypes

Supported datatypes

```php
protected null|array $supportedDatatypes
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### supportedMetadata

Supported metdata

```php
protected null|array $supportedMetadata
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### ttlPrecision

TTL precision

```php
protected null|int $ttlPrecision
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

### useRequestTime

Use request time

```php
protected null|bool $useRequestTime
```

If it's NULL the capability isn't set and the getter
returns the base capability or the default value.




***

## Methods


### __construct

Constructor

```php
public __construct(\Zend\Cache\Storage\StorageInterface $storage, \stdClass $marker, array $capabilities = [], null|\Zend\Cache\Storage\Capabilities $baseCapabilities = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$storage` | **\Zend\Cache\Storage\StorageInterface** |  |
| `$marker` | **\stdClass** |  |
| `$capabilities` | **array** |  |
| `$baseCapabilities` | **null&#124;\Zend\Cache\Storage\Capabilities** |  |




***

### getAdapter

Get the storage adapter

```php
public getAdapter(): \Zend\Cache\Storage\StorageInterface
```











***

### getSupportedDatatypes

Get supported datatypes

```php
public getSupportedDatatypes(): array
```











***

### setSupportedDatatypes

Set supported datatypes

```php
public setSupportedDatatypes(\stdClass $marker, array $datatypes): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$datatypes` | **array** |  |


**Return Value:**

Fluent interface



***

### getSupportedMetadata

Get supported metadata

```php
public getSupportedMetadata(): array
```











***

### setSupportedMetadata

Set supported metadata

```php
public setSupportedMetadata(\stdClass $marker, string[] $metadata): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$metadata` | **string[]** |  |


**Return Value:**

Fluent interface



***

### getMinTtl

Get minimum supported time-to-live

```php
public getMinTtl(): int
```









**Return Value:**

0 means items never expire



***

### setMinTtl

Set minimum supported time-to-live

```php
public setMinTtl(\stdClass $marker, int $minTtl): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$minTtl` | **int** |  |


**Return Value:**

Fluent interface



***

### getMaxTtl

Get maximum supported time-to-live

```php
public getMaxTtl(): int
```









**Return Value:**

0 means infinite



***

### setMaxTtl

Set maximum supported time-to-live

```php
public setMaxTtl(\stdClass $marker, int $maxTtl): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$maxTtl` | **int** |  |


**Return Value:**

Fluent interface



***

### getStaticTtl

Is the time-to-live handled static (on write)
or dynamic (on read)

```php
public getStaticTtl(): bool
```











***

### setStaticTtl

Set if the time-to-live handled static (on write) or dynamic (on read)

```php
public setStaticTtl(\stdClass $marker, bool $flag): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$flag` | **bool** |  |


**Return Value:**

Fluent interface



***

### getTtlPrecision

Get time-to-live precision

```php
public getTtlPrecision(): float
```











***

### setTtlPrecision

Set time-to-live precision

```php
public setTtlPrecision(\stdClass $marker, float $ttlPrecision): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$ttlPrecision` | **float** |  |


**Return Value:**

Fluent interface



***

### getUseRequestTime

Get use request time

```php
public getUseRequestTime(): bool
```











***

### setUseRequestTime

Set use request time

```php
public setUseRequestTime(\stdClass $marker, bool $flag): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$flag` | **bool** |  |


**Return Value:**

Fluent interface



***

### getExpiredRead

Get if expired items are readable

```php
public getExpiredRead(): bool
```











***

### setExpiredRead

Set if expired items are readable

```php
public setExpiredRead(\stdClass $marker, bool $flag): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$flag` | **bool** |  |


**Return Value:**

Fluent interface



***

### getMaxKeyLength

Get maximum key lenth

```php
public getMaxKeyLength(): int
```









**Return Value:**

-1 means unknown, 0 means infinite



***

### setMaxKeyLength

Set maximum key length

```php
public setMaxKeyLength(\stdClass $marker, int $maxKeyLength): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$maxKeyLength` | **int** |  |


**Return Value:**

Fluent interface



***

### getNamespaceIsPrefix

Get if namespace support is implemented as prefix

```php
public getNamespaceIsPrefix(): bool
```











***

### setNamespaceIsPrefix

Set if namespace support is implemented as prefix

```php
public setNamespaceIsPrefix(\stdClass $marker, bool $flag): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$flag` | **bool** |  |


**Return Value:**

Fluent interface



***

### getNamespaceSeparator

Get namespace separator if namespace is implemented as prefix

```php
public getNamespaceSeparator(): string
```











***

### setNamespaceSeparator

Set the namespace separator if namespace is implemented as prefix

```php
public setNamespaceSeparator(\stdClass $marker, string $separator): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$separator` | **string** |  |


**Return Value:**

Fluent interface



***

### getCapability

Get a capability

```php
protected getCapability(string $property, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |
| `$default` | **mixed** |  |




***

### setCapability

Change a capability

```php
protected setCapability(\stdClass $marker, string $property, mixed $value): \Zend\Cache\Storage\Capabilities
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$marker` | **\stdClass** |  |
| `$property` | **string** |  |
| `$value` | **mixed** |  |


**Return Value:**

Fluent interface



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
