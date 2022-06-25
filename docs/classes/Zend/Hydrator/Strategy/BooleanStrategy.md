***

# BooleanStrategy

This Strategy extracts and hydrates int and string values to Boolean values



* Full name: `\Zend\Hydrator\Strategy\BooleanStrategy`
* This class implements:
[`\Zend\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)



## Properties


### trueValue



```php
private int|string $trueValue
```






***

### falseValue



```php
private int|string $falseValue
```






***

## Methods


### __construct



```php
public __construct(int|string $trueValue, int|string $falseValue): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trueValue` | **int&#124;string** |  |
| `$falseValue` | **int&#124;string** |  |




***

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(bool $value): int|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **bool** | The original value. |


**Return Value:**

Returns the value that should be extracted.



***

### hydrate

Converts the given value so that it can be hydrated by the hydrator.

```php
public hydrate(int|string $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **int&#124;string** | The original value. |


**Return Value:**

Returns the value that should be hydrated.



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
