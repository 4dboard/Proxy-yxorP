***

# Gz

Compression adapter for Gzip (ZLib)



* Full name: `\Zend\Filter\Compress\Gz`
* Parent class: [`\Zend\Filter\Compress\AbstractCompressionAlgorithm`](./AbstractCompressionAlgorithm.md)



## Properties


### options

Compression Options
array(
    'level'    => Compression level 0-9
    'mode'     => Compression mode, can be 'compress', 'deflate'
    'archive'  => Archive to use
)

```php
protected array $options
```






***

## Methods


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

### getLevel

Returns the set compression level

```php
public getLevel(): int
```











***

### setLevel

Sets a new compression level

```php
public setLevel(int $level): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **int** |  |




***

### getMode

Returns the set compression mode

```php
public getMode(): string
```











***

### setMode

Sets a new compression mode

```php
public setMode(string $mode): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mode` | **string** | Supported are &#039;compress&#039;, &#039;deflate&#039; and &#039;file&#039; |




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
