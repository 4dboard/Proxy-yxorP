***

# StrategyChain





* Full name: `\Zend\Hydrator\Strategy\StrategyChain`
* This class implements:
[`\Zend\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)



## Properties


### extractionStrategies

Strategy chain for extraction

```php
private \Zend\Hydrator\Strategy\StrategyInterface[] $extractionStrategies
```






***

### hydrationStrategies

Strategy chain for hydration

```php
private \Zend\Hydrator\Strategy\StrategyInterface[] $hydrationStrategies
```






***

## Methods


### __construct

Constructor

```php
public __construct(array|\Traversable $extractionStrategies): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extractionStrategies` | **array&#124;\Traversable** |  |




***

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |


**Return Value:**

Returns the value that should be extracted.



***

### hydrate

Converts the given value so that it can be hydrated by the hydrator.

```php
public hydrate(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The original value. |


**Return Value:**

Returns the value that should be hydrated.



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
