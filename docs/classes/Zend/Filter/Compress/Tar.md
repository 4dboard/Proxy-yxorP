***

# Tar

Compression adapter for Tar



* Full name: `\Zend\Filter\Compress\Tar`
* Parent class: [`\Zend\Filter\Compress\AbstractCompressionAlgorithm`](./AbstractCompressionAlgorithm.md)



## Properties


### options

Compression Options
array(
    'archive'  => Archive to use
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

### getTarget

Returns the set target path

```php
public getTarget(): string
```











***

### setTarget

Sets the target path to use

```php
public setTarget(string $target): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |




***

### getMode

Returns the set compression mode

```php
public getMode(): string
```











***

### setMode

Compression mode to use

```php
public setMode(string $mode): self
```

Either Gz or Bz2.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **string** |  |




***

### compress

Compresses the given content

```php
public compress(string $content): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** |  |




***

### decompress

Decompresses the given content

```php
public decompress(string $content): string
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
