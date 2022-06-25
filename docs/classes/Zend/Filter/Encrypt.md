***

# Encrypt

Encrypts a given string



* Full name: `\Zend\Filter\Encrypt`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)



## Properties


### adapter

Encryption adapter

```php
protected $adapter
```






***

## Methods


### __construct

Class constructor

```php
public __construct(string|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | (Optional) Options to set, if null mcrypt is used |




***

### getAdapterInstance

Returns the adapter instance

```php
public getAdapterInstance(): \Zend\Filter\Encrypt\EncryptionAlgorithmInterface
```











***

### getAdapter

Returns the name of the set adapter

```php
public getAdapter(): string
```











***

### setAdapter

Sets new encryption options

```php
public setAdapter(string|array $options = null): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array** | (Optional) Encryption options |




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

Defined by Zend\Filter\Filter

```php
public filter(string $value): string
```

Encrypts the content $value with the defined settings






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | Content to encrypt |


**Return Value:**

The encrypted content



***


## Inherited methods


### hasPcreUnicodeSupport



```php
public static hasPcreUnicodeSupport(): bool
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






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

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```











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
