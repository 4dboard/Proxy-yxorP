***

# MemoryUsageProcessor

Injects memory_get_usage in all records



* Full name: `\Monolog\Processor\MemoryUsageProcessor`
* Parent class: [`\Monolog\Processor\MemoryProcessor`](./MemoryProcessor.md)

**See Also:**

* \Monolog\Processor\Monolog\Processor\MemoryProcessor::__construct() - for options




## Methods


### __invoke



```php
public __invoke(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***


## Inherited methods


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
