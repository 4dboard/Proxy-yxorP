***

# MercurialProcessor

Injects Hg branch and Hg revision number in all records



* Full name: `\Monolog\Processor\MercurialProcessor`
* This class implements:
[`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md)



## Properties


### level



```php
private $level
```






***

### cache



```php
private static $cache
```



* This property is **static**.


***

## Methods


### __construct



```php
public __construct(mixed $level = Logger::DEBUG): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$level` | **mixed** |  |




***

### __invoke



```php
public __invoke(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |




***

### getMercurialInfo



```php
private static getMercurialInfo(): mixed
```



* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
