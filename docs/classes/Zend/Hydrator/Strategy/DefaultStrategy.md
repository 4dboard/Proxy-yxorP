***

# DefaultStrategy





* Full name: `\Zend\Hydrator\Strategy\DefaultStrategy`
* This class implements:
[`\Zend\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)




## Methods


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
