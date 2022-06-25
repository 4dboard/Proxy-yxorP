***

# FilterComposite





* Full name: `\Zend\Stdlib\Hydrator\Filter\FilterComposite`
* Parent class: [`\Zend\Hydrator\Filter\FilterComposite`](../../../Hydrator/Filter/FilterComposite.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\Filter\FilterInterface`](./FilterInterface.md)






## Inherited methods


### __construct

Define default Filter

```php
public __construct(array $orFilter = [], array $andFilter = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$orFilter` | **array** |  |
| `$andFilter` | **array** |  |




***

### addFilter

Add a filter to the composite. Has to be indexed with $name in
order to identify a specific filter.

```php
public addFilter(string $name, callable|\Zend\Hydrator\Filter\FilterInterface $filter, int $condition = self::CONDITION_OR): \Zend\Hydrator\Filter\FilterComposite
```

This example will exclude all methods from the hydration, that starts with 'getService'
<code>
$composite->addFilter('exclude',
    function ($method) {
        if (preg_match('/^getService/', $method) {
            return false;
        }
        return true;
    }, FilterComposite::CONDITION_AND
);
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$filter` | **callable&#124;\Zend\Hydrator\Filter\FilterInterface** |  |
| `$condition` | **int** | Can be either<br />FilterComposite::CONDITION_OR or FilterComposite::CONDITION_AND |




***

### removeFilter

Remove a filter from the composition

```php
public removeFilter( $name): \Zend\Hydrator\Filter\FilterComposite
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** | string Identifier for the filter |




***

### hasFilter

Check if $name has a filter registered

```php
public hasFilter( $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** | string Identifier for the filter |




***

### filter

Filter the composite based on the AND and OR condition
Will return true if one from the "or conditions" and all from
the "and condition" returns true. Otherwise false

```php
public filter(string $property): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | string Parameter will be e.g. Parent\Namespace\Class::method |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
