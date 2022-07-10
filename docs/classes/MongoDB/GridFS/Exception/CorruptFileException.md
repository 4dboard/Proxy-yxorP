***

# CorruptFileException





* Full name: `\MongoDB\GridFS\Exception\CorruptFileException`
* Parent class: [`\MongoDB\Exception\RuntimeException`](../../Exception/RuntimeException.md)




## Methods


### missingChunk

Thrown when a chunk is not found for an expected index.

```php
public static missingChunk(int $expectedIndex): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expectedIndex` | **int** | Expected index number |




***

### unexpectedIndex

Thrown when a chunk has an unexpected index number.

```php
public static unexpectedIndex(int $index, int $expectedIndex): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** | Actual index number (i.e. &quot;n&quot; field) |
| `$expectedIndex` | **int** | Expected index number |




***

### unexpectedSize

Thrown when a chunk has an unexpected data size.

```php
public static unexpectedSize(int $size, int $expectedSize): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **int** | Actual size (i.e. &quot;data&quot; field length) |
| `$expectedSize` | **int** | Expected size |




***


***
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
