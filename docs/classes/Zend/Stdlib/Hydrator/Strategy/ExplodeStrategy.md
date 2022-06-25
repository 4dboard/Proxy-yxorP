***

# ExplodeStrategy





* Full name: `\Zend\Stdlib\Hydrator\Strategy\ExplodeStrategy`
* Parent class: [`\Zend\Hydrator\Strategy\ExplodeStrategy`](../../../Hydrator/Strategy/ExplodeStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\Strategy\StrategyInterface`](./StrategyInterface.md)






## Inherited methods


### __construct

Constructor

```php
public __construct(string $delimiter = &#039;,&#039;, int|null $explodeLimit = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** | String that the values will be split upon |
| `$explodeLimit` | **int&#124;null** | Explode limit |




***

### setValueDelimiter

Sets the delimiter string that the values will be split upon

```php
private setValueDelimiter(string $delimiter): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** |  |




***

### hydrate

Converts the given value so that it can be hydrated by the hydrator.

```php
public hydrate(string|null $value): string[]
```

Split a string by delimiter






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;null** |  |




***

### extract

Converts the given value so that it can be extracted by the hydrator.

```php
public extract(string[] $value): string|null
```

Join array elements with delimiter






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string[]** | The original value. |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
