***

# MapNamingStrategy





* Full name: `\Zend\Stdlib\Hydrator\NamingStrategy\MapNamingStrategy`
* Parent class: [`\Zend\Hydrator\NamingStrategy\MapNamingStrategy`](../../../Hydrator/NamingStrategy/MapNamingStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)






## Inherited methods


### __construct

Initialize.

```php
public __construct(array $mapping, array $reverse = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mapping` | **array** | Map for name conversion on hydration |
| `$reverse` | **array** | Reverse map for name conversion on extraction |




***

### flipMapping

Safelly flip mapping array.

```php
protected flipMapping(array $array): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** | Array to flip |


**Return Value:**

Flipped array



***

### hydrate

Converts the given name so that it can be extracted by the hydrator.

```php
public hydrate(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The original name |


**Return Value:**

The hydrated name



***

### extract

Converts the given name so that it can be hydrated by the hydrator.

```php
public extract(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The original name |


**Return Value:**

The extracted name



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
