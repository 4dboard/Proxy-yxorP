***

# Rar

Compression adapter for Rar



* Full name: `\Zend\Filter\Compress\Rar`
* Parent class: [`\Zend\Filter\Compress\AbstractCompressionAlgorithm`](./AbstractCompressionAlgorithm.md)



## Properties


### options

Compression Options
array(
    'callback' => Callback for compression
    'archive'  => Archive to use
    'password' => Password to use
    'target'   => Target to write the files to
)

```php
protected array $options
```






***

## Methods


### __construct

Class constructor

```php
public __construct(array $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** | (Optional) Options to set |




***

### getCallback

Returns the set callback for compression

```php
public getCallback(): string
```











***

### setCallback

Sets the callback to use

```php
public setCallback(string $callback): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **string** |  |




***

### getArchive

Returns the set archive

```php
public getArchive(): string
```











***

### setArchive

Sets the archive to use for de-/compression

```php
public setArchive(string $archive): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$archive` | **string** | Archive to use |




***

### getPassword

Returns the set password

```php
public getPassword(): string
```











***

### setPassword

Sets the password to use

```php
public setPassword(string $password): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** |  |




***

### getTarget

Returns the set targetpath

```php
public getTarget(): string
```











***

### setTarget

Sets the targetpath to use

```php
public setTarget(string $target): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |




***

### compress

Compresses the given content

```php
public compress(string|array $content): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string&#124;array** |  |




***

### decompress

Decompresses the given content

```php
public decompress(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### toString

Returns the adapter name

```php
public toString(): string
```











***


## Inherited methods


### __construct

Class constructor

```php
public __construct(null|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **null&#124;array&#124;\Traversable** | (Optional) Options to set |




***

### getOptions

Returns one or all set options

```php
public getOptions(string $option = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **string** | (Optional) Option to return |




***

### setOptions

Sets all or one option

```php
public setOptions(array $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
