***

# AbstractWriter





* Full name: `\Zend\Config\Writer\AbstractWriter`
* This class implements:
[`\Zend\Config\Writer\WriterInterface`](./WriterInterface.md)
* This class is an **Abstract class**




## Methods


### toFile

toFile(): defined by Writer interface.

```php
public toFile(string $filename, mixed $config, bool $exclusiveLock = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **mixed** |  |
| `$exclusiveLock` | **bool** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toFile() - 

***

### toString

toString(): defined by Writer interface.

```php
public toString(mixed $config): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |



**See Also:**

* \Zend\Config\Writer\WriterInterface::toString() - 

***

### processConfig



```php
protected processConfig(array $config): string
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
