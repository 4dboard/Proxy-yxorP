***

# VirtualPropertyMetadata

Base class for property metadata.

This class is intended to be extended to add your application specific
properties, and flags.

* Full name: `\JMS\Serializer\Metadata\VirtualPropertyMetadata`
* Parent class: [`\JMS\Serializer\Metadata\PropertyMetadata`](./PropertyMetadata.md)




## Methods


### __construct



```php
public __construct(mixed $class, mixed $methodName): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$methodName` | **mixed** |  |




***

### setValue



```php
public setValue(mixed $obj, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **mixed** |  |
| `$value` | **mixed** |  |




***

### setAccessor



```php
public setAccessor(mixed $type, mixed $getter = null, mixed $setter = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$setter` | **mixed** |  |




***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***


## Inherited methods


### setAccessor



```php
public setAccessor(mixed $type, mixed $getter = null, mixed $setter = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$getter` | **mixed** |  |
| `$setter` | **mixed** |  |




***

### getValue



```php
public getValue(object $obj): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |




***

### setValue



```php
public setValue(object $obj, string $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **object** |  |
| `$value` | **string** |  |




***

### setType



```php
public setType(mixed $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |




***

### serialize



```php
public serialize(): mixed
```











***

### unserialize



```php
public unserialize(mixed $str): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***

### __construct



```php
public __construct(mixed $class, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$name` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
