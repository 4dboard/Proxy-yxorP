***

# Instantiator





* Full name: `\Doctrine\Instantiator\Instantiator`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Doctrine\Instantiator\InstantiatorInterface`](./InstantiatorInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SERIALIZATION_FORMAT_USE_UNSERIALIZER`|public| |&#039;C&#039;|
|`SERIALIZATION_FORMAT_AVOID_UNSERIALIZER`|public| |&#039;O&#039;|

## Properties


### cachedInstantiators

Used to instantiate specific classes, indexed by class name.

```php
private static callable[] $cachedInstantiators
```



* This property is **static**.


***

### cachedCloneables

Array of objects that can directly be cloned, indexed by class name.

```php
private static object[] $cachedCloneables
```



* This property is **static**.


***

## Methods


### instantiate



```php
public instantiate(string $className): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### buildAndCacheFromFactory

Builds the requested object and caches it in static properties for performance

```php
private buildAndCacheFromFactory(string $className): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### buildFactory

Builds a callable capable of instantiating the given $className without
invoking its constructor.

```php
private buildFactory(string $className): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### getReflectionClass



```php
private getReflectionClass(string $className): \ReflectionClass
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** |  |




***

### checkIfUnSerializationIsSupported



```php
private checkIfUnSerializationIsSupported(\ReflectionClass $reflectionClass, string $serializedString): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |
| `$serializedString` | **string** |  |




***

### attemptInstantiationViaUnSerialization



```php
private attemptInstantiationViaUnSerialization(\ReflectionClass $reflectionClass, string $serializedString): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |
| `$serializedString` | **string** |  |




***

### isInstantiableViaReflection



```php
private isInstantiableViaReflection(\ReflectionClass $reflectionClass): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |




***

### hasInternalAncestors

Verifies whether the given class is to be considered internal

```php
private hasInternalAncestors(\ReflectionClass $reflectionClass): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |




***

### isSafeToClone

Checks if a class is cloneable

```php
private isSafeToClone(\ReflectionClass $reflectionClass): bool
```

Classes implementing `__clone` cannot be safely cloned, as that may cause side-effects.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reflectionClass` | **\ReflectionClass** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
