***

# ExtractEvent

Event triggered when the {@see AggregateHydrator} extracts
data from an object



* Full name: `\Zend\Hydrator\Aggregate\ExtractEvent`
* Parent class: [`\Zend\EventManager\Event`](../../EventManager/Event.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EVENT_EXTRACT`|public| |&#039;extract&#039;|

## Properties


### name



```php
protected string $name
```






***

### extractionObject



```php
protected object $extractionObject
```






***

### extractedData



```php
protected array $extractedData
```






***

## Methods


### __construct

Constructor

```php
public __construct(object $target, object $extractionObject): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **object** |  |
| `$extractionObject` | **object** |  |




***

### getExtractionObject

Retrieves the object from which data is extracted

```php
public getExtractionObject(): object
```











***

### setExtractionObject



```php
public setExtractionObject(object $extractionObject): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractionObject` | **object** |  |




***

### getExtractedData

Retrieves the data that has been extracted

```php
public getExtractedData(): array
```











***

### setExtractedData



```php
public setExtractedData(array $extractedData): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractedData` | **array** |  |




***

### mergeExtractedData

Merge provided data with the extracted data

```php
public mergeExtractedData(array $additionalData): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$additionalData` | **array** |  |




***


## Inherited methods


### __construct

Constructor

```php
public __construct(string $name = null, string|object $target = null, array|\ArrayAccess $params = null): mixed
```

Accept a target and its parameters.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Event name |
| `$target` | **string&#124;object** |  |
| `$params` | **array&#124;\ArrayAccess** |  |




***

### getName

Get event name

```php
public getName(): string
```











***

### getTarget

Get the event target

```php
public getTarget(): string|object
```

This may be either an object, or the name of a static method.









***

### setParams

Set parameters

```php
public setParams(array|\ArrayAccess|object $params): \Zend\EventManager\Event
```

Overwrites parameters






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array&#124;\ArrayAccess&#124;object** |  |




***

### getParams

Get all parameters

```php
public getParams(): array|object|\ArrayAccess
```











***

### getParam

Get an individual parameter

```php
public getParam(string|int $name, mixed $default = null): mixed
```

If the parameter does not exist, the $default value will be returned.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** |  |
| `$default` | **mixed** |  |




***

### setName

Set the event name

```php
public setName(string $name): \Zend\EventManager\Event
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### setTarget

Set the event target/context

```php
public setTarget(null|string|object $target): \Zend\EventManager\Event
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **null&#124;string&#124;object** |  |




***

### setParam

Set an individual parameter to a value

```php
public setParam(string|int $name, mixed $value): \Zend\EventManager\Event
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string&#124;int** |  |
| `$value` | **mixed** |  |




***

### stopPropagation

Stop further event propagation

```php
public stopPropagation(bool $flag = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |




***

### propagationIsStopped

Is propagation stopped?

```php
public propagationIsStopped(): bool
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
