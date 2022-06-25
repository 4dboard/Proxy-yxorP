***

# MemoryProcessor

Some methods that are common for all memory processors



* Full name: `\Monolog\Processor\MemoryProcessor`
* This class implements:
[`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)
* This class is an **Abstract class**



## Properties


### realUsage



```php
protected bool $realUsage
```






***

### useFormatting



```php
protected bool $useFormatting
```






***

## Methods


### __construct



```php
public __construct(bool $realUsage = true, bool $useFormatting = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$realUsage` | **bool** | Set this to true to get the real size of memory allocated from system. |
| `$useFormatting` | **bool** | If true, then format memory size to human readable string (MB, KB, B depending on size) |




***

### formatBytes

Formats bytes into a human readable string if $this->useFormatting is true, otherwise return $bytes as is

```php
protected formatBytes(int $bytes): string|int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytes` | **int** |  |


**Return Value:**

Formatted string if $this->useFormatting is true, otherwise return $bytes as is



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
