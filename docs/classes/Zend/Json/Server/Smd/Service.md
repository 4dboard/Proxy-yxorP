***

# Service

Create Service Mapping Description for a method



* Full name: `\Zend\Json\Server\Smd\Service`



## Properties


### envelope



```php
protected $envelope
```






***

### name



```php
protected $name
```






***

### return



```php
protected $return
```






***

### target



```php
protected $target
```






***

### transport



```php
protected $transport
```






***

### envelopeTypes

Allowed envelope types

```php
protected array $envelopeTypes
```






***

### nameRegex

Regex for names

```php
protected string $nameRegex
```





**See Also:**

* http://php.net/manual/en/language.oop5.basic.php - * http://www.jsonrpc.org/specification#request_object - 

***

### paramOptionTypes

Parameter option types

```php
protected array $paramOptionTypes
```






***

### params

Service params

```php
protected array $params
```






***

### paramMap

Mapping of parameter types to JSON-RPC types

```php
protected array $paramMap
```






***

### transportTypes

Allowed transport types

```php
protected array $transportTypes
```






***

## Methods


### __construct

Constructor

```php
public __construct(string|array $spec): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string&#124;array** |  |




***

### setOptions

Set object state

```php
public setOptions(array $options): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### setName

Set service name

```php
public setName(string $name): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getName

Retrieve name

```php
public getName(): string
```











***

### setTransport

Set Transport

```php
public setTransport(string $transport): \Zend\Json\Server\Smd\Service
```

Currently limited to POST






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transport` | **string** |  |




***

### getTransport

Get transport

```php
public getTransport(): string
```











***

### setTarget

Set service target

```php
public setTarget(string $target): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |




***

### getTarget

Get service target

```php
public getTarget(): string
```











***

### setEnvelope

Set envelope type

```php
public setEnvelope(string $envelopeType): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$envelopeType` | **string** |  |




***

### getEnvelope

Get envelope type

```php
public getEnvelope(): string
```











***

### addParam

Add a parameter to the service

```php
public addParam(string|array $type, array $options = [], int|null $order = null): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string&#124;array** |  |
| `$options` | **array** |  |
| `$order` | **int&#124;null** |  |




***

### addParams

Add params

```php
public addParams(array $params): \Zend\Json\Server\Smd\Service
```

Each param should be an array, and should include the key 'type'.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |




***

### setParams

Overwrite all parameters

```php
public setParams(array $params): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** |  |




***

### getParams

Get all parameters

```php
public getParams(): array
```

Returns all params in specified order.









***

### setReturn

Set return type

```php
public setReturn(string|array $type): \Zend\Json\Server\Smd\Service
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string&#124;array** |  |




***

### getReturn

Get return type

```php
public getReturn(): string|array
```











***

### toArray

Cast service description to array

```php
public toArray(): array
```











***

### toJson

Return JSON encoding of service

```php
public toJson(): string
```











***

### __toString

Cast to string

```php
public __toString(): string
```











***

### _validateParamType

Validate parameter type

```php
protected _validateParamType(string $type, bool $isReturn = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$isReturn` | **bool** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
