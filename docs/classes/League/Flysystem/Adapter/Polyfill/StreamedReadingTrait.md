***

# StreamedReadingTrait

A helper for adapters that only handle strings to provide read streams.



* Full name: `\League\Flysystem\Adapter\Polyfill\StreamedReadingTrait`




## Methods


### readStream

Reads a file as a stream.

```php
public readStream(string $path): array|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |



**See Also:**

* \League\Flysystem\Adapter\Polyfill\League\Flysystem\ReadInterface::readStream() - 

***

### read

Reads a file.

```php
public read(string $path): array|false
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |



**See Also:**

* \League\Flysystem\Adapter\Polyfill\League\Flysystem\ReadInterface::read() - 

***

***


