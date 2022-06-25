***

# UidProcessor

Adds a unique identifier into records



* Full name: `\Monolog\Processor\UidProcessor`
* This class implements:
[`\Monolog\Processor\ProcessorInterface`](./ProcessorInterface.md), [`\Monolog\ResettableInterface`](../ResettableInterface.md)



## Properties


### uid



```php
private $uid
```






***

## Methods


### __construct



```php
public __construct(mixed $length = 7): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***

### __invoke



```php
public __invoke(array $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |


**Return Value:**

The processed records



***

### getUid



```php
public getUid(): string
```











***

### reset



```php
public reset(): mixed
```











***

### generateUid



```php
private generateUid(mixed $length): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
