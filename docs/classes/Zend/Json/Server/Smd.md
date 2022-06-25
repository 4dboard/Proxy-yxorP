***

# Smd

* Full name: `\Zend\Json\Server\Smd`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ENV_JSONRPC_1`|public| |&#039;JSON-RPC-1.0&#039;|
|`ENV_JSONRPC_2`|public| |&#039;JSON-RPC-2.0&#039;|
|`SMD_VERSION`|public| |&#039;2.0&#039;|

## Properties

### contentType

Content type

```php
protected string $contentType
```

***

### contentTypeRegex

Content type regex

```php
protected string $contentTypeRegex
```

***

### description

Service description

```php
protected string $description
```

***

### dojoCompatible

Generate Dojo-compatible SMD

```php
protected bool $dojoCompatible
```

***

### envelope

Current envelope

```php
protected string $envelope
```

***

### envelopeTypes

Allowed envelope types

```php
protected array $envelopeTypes
```

***

### id

Service id

```php
protected string $id
```

***

### services

Services offered

```php
protected array $services
```

***

### target

Service target

```php
protected string $target
```

***

### transport

Global transport

```php
protected string $transport
```

***

### transportTypes

Allowed transport types

```php
protected array $transportTypes
```

***

## Methods

### setOptions

Set object state via options

```php
public setOptions(array $options): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |

***

### setTransport

Set transport

```php
public setTransport(string $transport): \Zend\Json\Server\Smd
```

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

### setEnvelope

Set envelope

```php
public setEnvelope(string $envelopeType): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$envelopeType` | **string** |  |

***

### getEnvelope

Retrieve envelope

```php
public getEnvelope(): string
```

***

### setContentType

Set content type

```php
public setContentType(string $type): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |

***

### getContentType

Retrieve content type

```php
public getContentType(): string
```

***

### setTarget

Set service target

```php
public setTarget(string $target): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |

***

### getTarget

Retrieve service target

```php
public getTarget(): string
```

***

### setId

Set service ID

```php
public setId(string $id): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***

### getId

Get service id

```php
public getId(): string
```

***

### setDescription

Set service description

```php
public setDescription(string $description): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |

***

### getDescription

Get service description

```php
public getDescription(): string
```

***

### setDojoCompatible

Indicate whether or not to generate Dojo-compatible SMD

```php
public setDojoCompatible(bool $flag): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **bool** |  |

***

### isDojoCompatible

Is this a Dojo compatible SMD?

```php
public isDojoCompatible(): bool
```

***

### addService

Add Service

```php
public addService(\Zend\Json\Server\Smd\Service|array $service): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$service` | **\Zend\Json\Server\Smd\Service&#124;array** |  |

***

### addServices

Add many services

```php
public addServices(array $services): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array** |  |

***

### setServices

Overwrite existing services with new ones

```php
public setServices(array $services): \Zend\Json\Server\Smd
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array** |  |

***

### getService

Get service object

```php
public getService(string $name): bool|\Zend\Json\Server\Smd\Service
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getServices

Return services

```php
public getServices(): array
```

***

### removeService

Remove service

```php
public removeService(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### toArray

Cast to array

```php
public toArray(): array
```

***

### toDojoArray

Export to DOJO-compatible SMD array

```php
public toDojoArray(): array
```

***

### toJson

Cast to JSON

```php
public toJson(): string
```

***

### __toString

Cast to string (JSON)

```php
public __toString(): string
```

yxorP::get('REQUEST')
