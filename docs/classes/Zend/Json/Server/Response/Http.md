***

# Http





* Full name: `\Zend\Json\Server\Response\Http`
* Parent class: [`\Zend\Json\Server\Response`](../Response.md)




## Methods


### toJson

Emit JSON

```php
public toJson(): string
```

Send appropriate HTTP headers. If no Id, then return an empty string.









***

### sendHeaders

Send headers

```php
public sendHeaders(): void
```

If headers are already sent, do nothing. If null ID, send HTTP 204
header. Otherwise, send content type header based on content type of
service map.









***


## Inherited methods


### setOptions

Set response state

```php
public setOptions(array $options): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### loadJson

Set response state based on JSON

```php
public loadJson(string $json): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |




***

### setResult

Set result

```php
public setResult(mixed $value): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getResult

Get result

```php
public getResult(): mixed
```











***

### setError

Set result error

```php
public setError(mixed $error = null): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **mixed** |  |




***

### getError

Get response error

```php
public getError(): null|\Zend\Json\Server\Error
```











***

### isError

Is the response an error?

```php
public isError(): bool
```











***

### setId

Set request ID

```php
public setId(mixed $name): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### getId

Get request ID

```php
public getId(): mixed
```











***

### setVersion

Set JSON-RPC version

```php
public setVersion(string $version): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |




***

### getVersion

Retrieve JSON-RPC version

```php
public getVersion(): string
```











***

### toJson

Cast to JSON

```php
public toJson(): string
```











***

### getArgs

Retrieve args

```php
public getArgs(): mixed
```











***

### setArgs

Set args

```php
public setArgs(mixed $args): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **mixed** |  |




***

### setServiceMap

Set service map object

```php
public setServiceMap(\Zend\Json\Server\Smd $serviceMap): \Zend\Json\Server\Response
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serviceMap` | **\Zend\Json\Server\Smd** |  |




***

### getServiceMap

Retrieve service map

```php
public getServiceMap(): \Zend\Json\Server\Smd|null
```











***

### __toString

Cast to string (JSON)

```php
public __toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
