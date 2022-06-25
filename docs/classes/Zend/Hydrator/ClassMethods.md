***

# ClassMethods





* Full name: `\Zend\Hydrator\ClassMethods`
* Parent class: [`\Zend\Hydrator\AbstractHydrator`](./AbstractHydrator.md)
* This class implements:
[`\Zend\Hydrator\HydratorOptionsInterface`](./HydratorOptionsInterface.md)



## Properties


### hydrationMethodsCache

Holds the names of the methods used for hydration, indexed by class::property name,
false if the hydration method is not callable/usable for hydration purposes

```php
private string[]|bool[] $hydrationMethodsCache
```






***

### extractionMethodsCache

A map of extraction methods to property name to be used during extraction, indexed
by class name and method name

```php
private string[][] $extractionMethodsCache
```






***

### underscoreSeparatedKeys

Flag defining whether array keys are underscore-separated (true) or camel case (false)

```php
protected bool $underscoreSeparatedKeys
```






***

### callableMethodFilter



```php
private \Zend\Hydrator\Filter\FilterInterface $callableMethodFilter
```






***

## Methods


### __construct

Define if extract values will use camel case or name with underscore

```php
public __construct(bool|array $underscoreSeparatedKeys = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$underscoreSeparatedKeys` | **bool&#124;array** |  |




***

### setOptions



```php
public setOptions(array|\Traversable $options): \Zend\Hydrator\ClassMethods
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### setUnderscoreSeparatedKeys



```php
public setUnderscoreSeparatedKeys(bool $underscoreSeparatedKeys): \Zend\Hydrator\ClassMethods
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$underscoreSeparatedKeys` | **bool** |  |




***

### getUnderscoreSeparatedKeys



```php
public getUnderscoreSeparatedKeys(): bool
```











***

### extract

Extract values from an object with class methods

```php
public extract(object $object): array
```

Extracts the getter/setter of the given $object.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |




***

### hydrate

Hydrate an object by populating getter/setter methods

```php
public hydrate(array $data, object $object): object
```

Hydrates an object by getter/setter methods of the object.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$object` | **object** |  |




***

### addFilter

Add a new filter to take care of what needs to be hydrated.

```php
public addFilter(mixed $name, mixed $filter, mixed $condition = FilterFilterComposite::CONDITION_OR): \Zend\Hydrator\Filter\FilterComposite
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** | Index in the composite |
| `$filter` | **mixed** |  |
| `$condition` | **mixed** |  |




***

### removeFilter

Remove a filter from the composition.

```php
public removeFilter(mixed $name): \Zend\Hydrator\Filter\FilterComposite
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### setNamingStrategy

Adds the given naming strategy

```php
public setNamingStrategy(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface $strategy): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface** | The naming to register. |




***

### removeNamingStrategy

Removes the naming strategy

```php
public removeNamingStrategy(): self
```











***

### resetCaches

Reset all local hydration/extraction caches

```php
private resetCaches(): mixed
```











***


## Inherited methods


### __construct

Initializes a new instance of this class.

```php
public __construct(): mixed
```











***

### getStrategy

Gets the strategy with the given name.

```php
public getStrategy(string $name): \Zend\Hydrator\Strategy\StrategyInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to get. |




***

### hasStrategy

Checks if the strategy with the given name exists.

```php
public hasStrategy(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to check for. |




***

### addStrategy

Adds the given strategy under the given name.

```php
public addStrategy(string $name, \Zend\Hydrator\Strategy\StrategyInterface $strategy): \Zend\Hydrator\HydratorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to register. |
| `$strategy` | **\Zend\Hydrator\Strategy\StrategyInterface** | The strategy to register. |




***

### removeStrategy

Removes the strategy with the given name.

```php
public removeStrategy(string $name): \Zend\Hydrator\HydratorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to remove. |




***

### extractValue

Converts a value for extraction. If no strategy exists the plain value is returned.

```php
public extractValue(string $name, mixed $value, mixed $object = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$object` | **mixed** | The object is optionally provided as context. |




***

### hydrateValue

Converts a value for hydration. If no strategy exists the plain value is returned.

```php
public hydrateValue(string $name, mixed $value, array $data = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$data` | **array** | The whole data is optionally provided as context. |




***

### extractName

Convert a name for extraction. If no naming strategy exists, the plain value is returned.

```php
public extractName(string $name, null $object = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$object` | **null** | The object is optionally provided as context. |




***

### hydrateName

Converts a value for hydration. If no naming strategy exists, the plain value is returned.

```php
public hydrateName(string $name, array $data = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$data` | **array** | The whole data is optionally provided as context. |




***

### getFilter

Get the filter instance

```php
public getFilter(): \Zend\Hydrator\Filter\FilterComposite
```











***

### addFilter

Add a new filter to take care of what needs to be hydrated.

```php
public addFilter(string $name, callable|\Zend\Hydrator\Filter\FilterInterface $filter, int $condition = FilterFilterComposite::CONDITION_OR): \Zend\Hydrator\Filter\FilterComposite
```

To exclude e.g. the method getServiceLocator:

<code>
$composite->addFilter("servicelocator",
    function ($property) {
        list($class, $method) = explode('::', $property);
        if ($method === 'getServiceLocator') {
            return false;
        }
        return true;
    }, FilterComposite::CONDITION_AND
);
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |
| `$filter` | **callable&#124;\Zend\Hydrator\Filter\FilterInterface** |  |
| `$condition` | **int** |  |




***

### hasFilter

Check whether a specific filter exists at key $name or not

```php
public hasFilter(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |




***

### removeFilter

Remove a filter from the composition.

```php
public removeFilter( $name): \Zend\Hydrator\Filter\FilterComposite
```

To not extract "has" methods, you simply need to unregister it

<code>
$filterComposite->removeFilter('has');
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




***

### setNamingStrategy

Adds the given naming strategy

```php
public setNamingStrategy(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface $strategy): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface** | The naming to register. |




***

### getNamingStrategy

Gets the naming strategy.

```php
public getNamingStrategy(): \Zend\Hydrator\NamingStrategy\NamingStrategyInterface
```











***

### hasNamingStrategy

Checks if a naming strategy exists.

```php
public hasNamingStrategy(): bool
```











***

### removeNamingStrategy

Removes the naming strategy

```php
public removeNamingStrategy(): self
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
