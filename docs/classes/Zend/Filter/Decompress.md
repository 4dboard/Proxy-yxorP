***

# Decompress

Decompresses a given string



* Full name: `\Zend\Filter\Decompress`
* Parent class: [`\Zend\Filter\Compress`](./Compress.md)




## Methods


### __invoke

Use filter as functor

```php
public __invoke(string $value): string
```

Decompresses the content $value with the defined settings






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to decompress |


**Return Value:**

The decompressed content



***

### filter

Defined by FilterInterface

```php
public filter(string $value): string
```

Decompresses the content $value with the defined settings






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to decompress |


**Return Value:**

The decompressed content



***


## Inherited methods


### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | (Optional) Options to set |




***

### setOptions



```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### getAdapter

Returns the current adapter, instantiating it if necessary

```php
public getAdapter(): \Zend\Filter\Compress\CompressionAlgorithmInterface
```











***

### getAdapterName

Retrieve adapter name

```php
public getAdapterName(): string
```











***

### setAdapter

Sets compression adapter

```php
public setAdapter(string|\Zend\Filter\Compress\CompressionAlgorithmInterface $adapter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **string&#124;\Zend\Filter\Compress\CompressionAlgorithmInterface** | Adapter to use |




***

### getAdapterOptions

Retrieve adapter options

```php
public getAdapterOptions(): array
```











***

### setAdapterOptions

Set adapter options

```php
public setAdapterOptions(array $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```











***

### __call

Calls adapter methods

```php
public __call(string $method, string|array $options): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method to call |
| `$options` | **string&#124;array** | Options for this method |




***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string
```

Compresses the content $value with the defined settings






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to compress |


**Return Value:**

The compressed content



***

### hasPcreUnicodeSupport



```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### isOptions



```php
protected static isOptions(mixed $options): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
