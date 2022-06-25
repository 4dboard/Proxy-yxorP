***

# UnderscoreNamingStrategy





* Full name: `\Zend\Stdlib\Hydrator\NamingStrategy\UnderscoreNamingStrategy`
* Parent class: [`\Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy`](../../../Hydrator/NamingStrategy/UnderscoreNamingStrategy.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)






## Inherited methods


### hydrate

Remove underscores and capitalize letters

```php
public hydrate(string $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### extract

Remove capitalized letters and prepend underscores.

```php
public extract(string $name): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getUnderscoreToStudlyCaseFilter



```php
protected getUnderscoreToStudlyCaseFilter(): \Zend\Filter\FilterChain
```











***

### getCamelCaseToUnderscoreFilter



```php
protected getCamelCaseToUnderscoreFilter(): \Zend\Filter\FilterChain
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
