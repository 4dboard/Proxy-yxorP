***

# CompositeNamingStrategy





* Full name: `\Zend\Hydrator\NamingStrategy\CompositeNamingStrategy`
* This class implements:
[`\Zend\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)



## Properties


### namingStrategies



```php
private array $namingStrategies
```






***

### defaultNamingStrategy



```php
private \Zend\Hydrator\NamingStrategy\NamingStrategyInterface $defaultNamingStrategy
```






***

## Methods


### __construct



```php
public __construct(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface[] $strategies, \Zend\Hydrator\NamingStrategy\NamingStrategyInterface|null $defaultNamingStrategy = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategies` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface[]** | indexed by the name they translate |
| `$defaultNamingStrategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface&#124;null** |  |




***

### extract

Converts the given name so that it can be hydrated by the hydrator.

```php
public extract(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The original name |


**Return Value:**

The extracted name



***

### hydrate

Converts the given name so that it can be extracted by the hydrator.

```php
public hydrate(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | The original name |


**Return Value:**

The hydrated name



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
