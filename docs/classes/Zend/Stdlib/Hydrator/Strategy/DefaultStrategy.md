***

# DefaultStrategy





* Full name: `\Zend\Stdlib\Hydrator\Strategy\DefaultStrategy`
* Parent class: [`\Zend\Hydrator\Strategy\DefaultStrategy`](../../../Hydrator/Strategy/DefaultStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)






## Inherited methods


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
